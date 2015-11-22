<?php

namespace ARM\Http\Controllers;

use ARM\Http\Requests\CreateProspectRequest;
use ARM\Http\Requests\EditProspectRequest;
use ARM\Http\Requests\EditUserRequest;
use ARM\Prospect;
use Illuminate\Http\Request;
use ARM\Http\Requests;
use ARM\Http\Controllers\Controller;
use Illuminate\Routing\Redirector;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Maatwebsite\Excel\Facades\Excel;

class ProspectController extends Controller
{
    public function __construct(){
        $this->beforeFilter('@findProspect', ['only' => ['show', 'edit', 'update', 'destroy']]);
    }

    public function findProspect(Route $route){

        $this->prospect = Prospect::findOrFail($route->getParameter('prospects'));

    }
    /**
     * Display a listing of the resource.
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $name = $request->get('name');
        $contact = $request->get('contact');

        $prospects = Prospect::filterAndPaginate($name, $contact);

        return view('prospect.index', compact(['prospects', 'name', 'contact']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('prospect.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param Redirector $redirect
     * @return \Illuminate\Http\Response
     */
    public function store(CreateProspectRequest $request, Redirector $redirect)
    {
        $prospect = new Prospect($request->all());
        $prospect->fecha_alta = date('Y-m-d');
        $prospect->type = 0;
        $prospect->save();

        return $redirect->route('prospects.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //$prospect = Prospect::findOrFail($id);

        //return view('prospect.edit', compact('prospect'));

        return view('prospect.edit')->with('prospect', $this->prospect);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EditProspectRequest $request, $id, Redirector $redirect)
    {
        //$prospect = Prospect::findOrFail($id);

        //$prospect->fill($request->all());

        //$prospect->save();

        //return $redirect->route('prospects.index');

        $this->prospect->fill($request->all());

        $this->prospect->save();

        return $redirect->route('prospects.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, Redirector $redirect, Request $request)
    {

        $this->prospect->status = 0;
        $this->prospect->save();

        $message = $this->prospect->name . ' fue eliminado';

        if($request->ajax()){
            return response()->json([
                'id' => $this->prospect->id,
                'message' => $message
            ]);
            ///return $message;
        }

        Session::flash('message', $message);

        return $redirect->route('prospects.index');
    }

    public function convertProspect($id, Redirector $redirect){
        $prospect = Prospect::findOrFail($id);
        $prospect->type = 1;
        $prospect->fecha_conversion = date("Y-m-d");
        $prospect->save();

        $message = $prospect->name . ' ha sido convertido a cliente';

        Session::flash('message', $message);

        return $redirect->route('prospects.index');
    }

    public function exportExcel(Request $request){

        $name = $request->get('name');
        $contact = $request->get('contact');

        $prospects = Prospect::filterAndPaginate($name, $contact);
        //$customers = Customer::where('type', '1')->where("name", "Like", "%$name%")->where("name", "Like", "%$contact%")->get();

        Excel::create('Prospectos', function($excel) use($prospects) {

            $excel->sheet('Prospectos', function($sheet) use($prospects) {

                $sheet->loadView('prospect.partials.export', ['prospects' => $prospects]);

            });
        })->export('xls');

    }
}

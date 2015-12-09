<?php

namespace ARM\Http\Controllers;

use ARM\Machine;
use Illuminate\Http\Request;
use ARM\Http\Requests;
use ARM\Http\Controllers\Controller;
use Illuminate\Routing\Redirector;
use Illuminate\Routing\Route;

class MachineController extends Controller
{
    public function __construct(){
        $this->beforeFilter('@findMachine', ['only' => ['show', 'edit', 'update', 'destroy']]);
    }

    public function findMachine(Route $route){

        $this->machine = Machine::findorFail($route->getParameter('machines'));
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $id = $request->get('id');
        $name = $request->get('name');
        $marca = $request->get('brand');
        $modelo = $request->get('model');
        $serie = $request->get('series');
        $año = $request->get('year');
        $disponibilidad = $request->get('availability');

        $machines = Machine::filterAndPaginate($id, $name, $marca, $modelo, $serie, $año, $disponibilidad);

        return view('machine.index', compact(['machines', 'name', 'marca', 'modelo', 'serie', 'año', 'disponibilidad']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('machine.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Redirector $redirect)
    {
        $machine = new Machine($request->all());
        $machine->availability = 1;
        $machine->status = 1;
        $machine->save();

        return $redirect->route('machines.index');
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
        return view('machine.edit')->with('machine', $this->machine);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id, Redirector $redirect)
    {
        $this->machine->fill($request->all());

        $this->machine->save();

        return $redirect->route('machines.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, Redirector $redirect, Request $request)
    {

        $this->machine->delete();

        $message = $this->machine->name . ' fue eliminada';

        if($request->ajax()){
            return response()->json([
                'id' => $this->machine->id,
                'message' => $message
            ]);
            ///return $message;
        }

        Session::flash('message', $message);

        return $redirect->route('sellers.index');

    }
}

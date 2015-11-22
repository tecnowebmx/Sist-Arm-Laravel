<?php

namespace ARM\Http\Controllers;

use ARM\Customer;
use ARM\File;
use Illuminate\Http\Request;
use ARM\Http\Requests;
use ARM\Http\Controllers\Controller;
use Illuminate\Routing\Redirector;
use Illuminate\Routing\Route;
use Maatwebsite\Excel\Facades\Excel;

class CustomerController extends Controller
{
    public function __construct(){
        $this->beforeFilter('@findCustomer', ['only' => ['show', 'edit', 'update', 'destroy']]);
    }

    public function findCustomer(Route $route){
        $this->customer = Customer::findOrFail($route->getParameter('customers'));

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $name = $request->get('name');
        $contact = $request->get('contact');

        $customers = Customer::filterAndPaginate($name, $contact);

        return view('customer.index', compact(['customers', 'name', 'contact']));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        return view('customer.edit')->with('customer', $this->customer);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @param Redirector $redirect
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id, Redirector $redirect)
    {
        $this->customer->fill($request->all());

        $this->customer->save();

        return $redirect->route('customers.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @param Redirector $redirect
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, Redirector $redirect, Request $request)
    {
        $this->customer->status = 0;
        $this->customer->save();

        $message = $this->customer->name . ' fue eliminado';

        if($request->ajax()){
            return response()->json([
                'id' => $this->customer->id,
                'message' => $message
            ]);
            ///return $message;
        }

        Session::flash('message', $message);

        return $redirect->route('customers.index');
    }

    /**
     * @param Request $request
     */
    public function exportExcel(Request $request){

        $name = $request->get('name');
        $contact = $request->get('contact');

        $customers = Customer::filterAndPaginate($name, $contact);
        //$customers = Customer::where('type', '1')->where("name", "Like", "%$name%")->where("name", "Like", "%$contact%")->get();

        Excel::create('Clientes', function($excel) use($customers) {

            $excel->sheet('Clientes', function($sheet) use($customers) {

                $sheet->loadView('customer.partials.export', ['customers' => $customers]);

            });
        })->export('xls');

    }

    public  function file($id){
        $customer = Customer::findOrFail($id);

        $files = File::where('customer_id', $customer->id)->get();

        return view('customer.files', compact(['customer', 'files']));
    }

    public function add(Request $request, $id){

        $customer = Customer::findorFail($id);

        $path = public_path().'/uploads/';
        $files = $request->file('file');

        foreach($files as $file){
            $fileName = $file->getClientOriginalName();
            $fileType = $file->guessExtension();
            $fileSize = $file->getClientSize()/1024;
            $fileRealPath = $path.$fileName;
            $fileMime = $file->getMimeType();

                $aFile = new File();
                $aFile->name = $fileName;
                $aFile->url = $path;
                $aFile->type = $fileType;
                $aFile->size = $fileSize;
                $aFile->size = $fileSize;
                $aFile->realpath = $fileRealPath;
                $aFile->mime = $fileMime;
                $aFile->customer()->associate($customer);



                    if($file->move($path, $fileName)){
                        $aFile->save();
                    }
        }

        return view('customer.files')->with('customer', $customer);
    }

    public function deleteFile($id){

        $file = File::findorFail($id);

        $file->delete();

        $customer = Customer::findOrFail($file->customer_id);

        $files = File::where('customer_id', $customer->id)->get();

        return view('customer.files', compact(['customer', 'files']));
    }

}

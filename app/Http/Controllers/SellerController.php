<?php

namespace ARM\Http\Controllers;

use ARM\Seller;
use Illuminate\Http\Request;
use ARM\Http\Requests;
use ARM\Http\Controllers\Controller;
use Illuminate\Routing\Redirector;
use Illuminate\Routing\Route;

class SellerController extends Controller
{
    public function __construct(){
        $this->beforeFilter('@findSeller', ['only' => ['show', 'edit', 'update', 'destroy']]);
    }

    public function findSeller(Route $route){
        $this->seller = Seller::findorFail($route->getParameter('sellers'));
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $sellers = Seller::paginate();
        //$sellers = Seller::filterAndPaginate($request->get('name'), $request->get());
        return view('seller.index', compact('sellers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('seller.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Redirector $redirect)
    {
        $seller = new Seller($request->all());
        $seller->status = 1;
        $seller->save();

        return $redirect->route('sellers.index');
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
        //$seller = Seller::findOrFail($id);

        //return view('seller.edit', compact('seller'));
        return view('seller.edit')->with('seller', $this->seller);
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
        /*$seller = Seller::findOrFail($id);

        $seller->fill($request->all());
        $seller->save();

        return $redirect->route('sellers.index');*/

        $this->seller->fill($request->all());

        $this->seller->save();

        return $redirect->route('sellers.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, Redirector $redirect, Request $request)
    {
        $this->seller->delete();

        $message = $this->seller->name . ' fue eliminado';

        if($request->ajax()){
            return response()->json([
                'id' => $this->seller->id,
                'message' => $message
            ]);
            ///return $message;
        }

        Session::flash('message', $message);

        return $redirect->route('sellers.index');
    }
}

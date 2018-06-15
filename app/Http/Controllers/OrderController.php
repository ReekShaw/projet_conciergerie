<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;
use DB;

class OrderController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categorys=$this->showCategory();
        $communities=$this->showCommunity();
        $subscribers=$this->showSubsribers();
        return view('tickets.commande')->with(['categorys' => $categorys, 'communities' => $communities, 'subscribers' => $subscribers]);
    }

    public function showCategory(){
        $categorys = DB::table('category')
        ->select('category.*')
        ->get();
        return $categorys;
    }

    public function showCommunity(){
        $communities = DB::table('communities')
        ->select('communities.*')
        ->get();
        return $communities;
    }

    public function showSubsribers(){
        $subscribers = DB::table('subscribers')
        ->select('subscribers.*')
        ->where('subscribers.communities_id', '=', $choix_commu)
        ->get();
        return $subscribers;
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
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }

    
}

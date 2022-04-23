<?php

namespace App\Http\Controllers;

use App\Models\ShippingMode;
use Illuminate\Http\Request;

class ShippingModeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = ShippingMode::all();
        return view('maintenance.shipmode.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('maintenance.shipmode.create');
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
        $data = $request->input();
        ShippingMode::create([
            'name' =>  $data['name'],
            'details' =>  $data['details'],
            
        ]);
        return redirect('maintenance/shipmode')->with('success',"Added");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ShippingMode  $shippingMode
     * @return \Illuminate\Http\Response
     */
    public function show(ShippingMode $shippingMode)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ShippingMode  $shippingMode
     * @return \Illuminate\Http\Response
     */
    public function edit(ShippingMode $shippingMode,$id)
    {
        //
        $data = ShippingMode::find($id);
        return view('maintenance.shipmode.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ShippingMode  $shippingMode
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ShippingMode $shippingMode,$id)
    {
        //
        $data = $request->input();
        $shipmode = ShippingMode::find($id); 
        $shipmode->name = $data['name'];
        $shipmode->details = $data['details'];
      
        $shipmode->save();
        
        return redirect('maintenance/shipmode')->with('success',"Updated");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ShippingMode  $shippingMode
     * @return \Illuminate\Http\Response
     */
    public function destroy(ShippingMode $shippingMode)
    {
        //
    }
}

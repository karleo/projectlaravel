<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Country;
use App\Models\Courier;
use PDF;

class ShipmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $country = Country::all();
        $data = Courier::all();
        return view('courier.index',compact('country','data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $country = Country::all();

        $maxID = Courier::max('tracking');        
        if (is_numeric($maxID)) {
            $nextNum = $maxID + 1;
        } else {
            $nextNum = 1;
        }
        $data = str_pad($nextNum, 6, '0', STR_PAD_LEFT);

        return view('courier.create',compact('country','data'));
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
        $country = Country::all();

        //tracking 
        $maxID = Courier::max('tracking');        
        if (is_numeric($maxID)) {
            $nextNum = $maxID + 1;
        } else {
            $nextNum = 1;
        }      


        Courier::create([
            'tracking' => str_pad($nextNum, 6, '0', STR_PAD_LEFT),
            'reference' => $this->uniqueserial(),
            'shipper' => $data['shipper'],
            'shipper_email' => $data['semail'],
            'shipper_addrs' => $data['saddress'],
            'shipper_contact' => $data['snumber'], 
            'origin_country_id' => $data['scountry'], 
            'origin_city_id' => $data['scity'], 
            'origin_zipcode' => $data['szipcode'],             
            // 'origin_code' => $data[''], 

            'consignee' => $data['consignee'],
            'consignee_addrs' => $data['raddress'],
            'consignee_email' => $data['remail'],
            'consignee_contact' => $data['rnumber'], 
            'dest_country_id' => $data['rcountry'], 
            'dest_city_id' => $data['rcity'], 
            'dest_zipcode' => $data['rzipcode'],       

        ]);

        return redirect('courier'); 
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function uniqueserial(){
        do {           

            $pass = substr(str_shuffle("0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, 12); 
        } while (Courier::where("reference", "=", $pass)->first());
  
        return $pass;
    }

    public function PDFgenerate( $id)
    {
        $data = Courier::find($id);
        // $data = ['title' => 'NiceSnippets Blog'];
        $pdf = PDF::setPaper('A5','portrait')->loadView('courier.label', $data);
  
        return $pdf->stream('label.pdf');
    }
}

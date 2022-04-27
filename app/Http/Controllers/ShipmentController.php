<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Country;
use App\Models\Courier;
use App\Models\PackageType;
use App\Models\ShippingMode;
use App\Models\CourierStatus;
use App\Models\CourierCompany;
use App\Models\PaymentMode;
use App\Models\Customer;
use App\Models\PackageDetail;
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
    public function create(Request $request)
    {
        //
        $country = Country::all();
        $package = PackageType::all()->sortByDesc("id");
        $shipmode = ShippingMode::all()->sortByDesc("id");
        $status = CourierStatus::all()->sortByDesc("id");
        $company = CourierCompany::all()->sortByDesc("id");
        $payment_mode = PaymentMode::all()->sortByDesc("id");
        $customer = Customer::all();
        $maxID = Courier::max('tracking');        
        if (is_numeric($maxID)) {
            $nextNum = $maxID + 1;
        } else {
            $nextNum = 1;
        }
        $data = str_pad($nextNum, 6, '0', STR_PAD_LEFT);    

        // $value = $request->session()->get('key','wasak');
        // dd($value);

        return view('courier.create',compact('country','data','package','shipmode','status','company','payment_mode', 'customer'));
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
        $request->validate([
            'shipper' => 'required',
            'saddress' => 'required',
            'snumber' => 'required',
            'scountry' => 'required',
            'scity' => 'required',

            'consignee' => 'required',
            'raddress' => 'required',
            'rnumber' => 'required',
            'rcountry' => 'required',
            'rcity' => 'required',

            'date_ship' => 'required',
            'pack_type' => 'required',
            'c_value' => 'required',      
        ]);

        // $rules = [
        //     'shipper' => 'required',
        //     'shipper_addrs' => 'required',
        //     'shipper_contact' => 'required',
        //     'origin_country_id' => 'required',
        //     'origin_city_id' => 'required',

        //     'consignee' => 'required',
        //     'consignee_addrs' => 'required',
        //     'consignee_contact' => 'required',
        //     'dest_country_id' => 'required',
        //     'dest_city_id' => 'required',

        //     'date_ship' => 'required',
        //     'pack_type' => 'required',
        //     'custom_value' => 'required',

      
        // ];

        // $validator = Validator::make($request->all(),$rules);

		// if ($validator->fails()) {		 
        //     return response()->json($validator->errors(), 400);
		// }

        $data = $request->input();
        $country = Country::all();

        //tracking 
        $maxID = Courier::max('tracking');        
        if (is_numeric($maxID)) {
            $nextNum = $maxID + 1;
        } else {
            $nextNum = 1;
        }      

        // dd($data['rcode']);
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

            // Shipment info
            'date_ship' => $data['date_ship'],
            'pack_type' => $data['pack_type'],
            'ship_mode' => $data['ship_mode'],
            'ship_status' => $data['ship_status'], 
            'custom_value'=>  $data['c_value'],
        ]);

        $courier_id = Courier::max('id');

        PackageDetail::create([
            'couriers_id' => $courier_id,
            'tracking' => str_pad($nextNum, 6, '0', STR_PAD_LEFT),
            'description' => $data['descrip'],
            'quantity' => $data['qty'],
            'weight' => $data['weight'],
            'length' => $data['length'],
            'width' => $data['width'],
            'height' => $data['height'],
            'vweight' => $data['vweight'],
            'cweight' => $data['cweight'],          
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
        $pdf = PDF::setPaper('A6','portrait')->loadView('courier.label', $data);
  
        return $pdf->stream('label.pdf');
        // return view('courier.label');
    }

    public function label2(Request $request){
        return view('courier.label2');
    }

    public function dcustomer(Request $request){

        $id = $request->input('id');
        $dcustomer = Customer::where('id',$id)->get();

        return response()->json($dcustomer);

    }
}

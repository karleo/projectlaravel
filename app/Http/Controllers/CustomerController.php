<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Country;
use App\Models\City;
use App\Models\Customer;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = Customer::all();
 
        return view('customer.index',compact('data'));
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
        return view('customer.create', compact('country'));
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

        Customer::create([
            'customer_code' => $data['code'],
            'customer_name' => $data['cname'],
            'contact' => $data['contact'],
            'address' => $data['address'],
            'email' => $data['email'],
            'cellphone' => $data['cellphone'],
            'zipcode' => $data['zipcode'],
            'country_id' => $data['country'],
            'city_id' => $data['city'],
            'company_name' => $data['compnayname'],
        ]);

        return redirect('customer')->with('success',"Added");

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
        $data = Customer::find($id);
        $country = Country::all();
        return view('customer.edit',compact('data','country'));
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
        $data = $request->input();

        $customer = Customer::find($id);

        $customer->customer_code = $data['code'];
        $customer->customer_name = $data['cname'];
        $customer->contact = $data['contact'];
        $customer->address = $data['address'];
        $customer->email = $data['email'];
        $customer->cellphone = $data['cellphone'];
        $customer->zipcode = $data['zipcode'];
        $customer->country_id = $data['country'];
        $customer->city_id = $data['city'];
        $customer->company_name = $data['compnayname'];
        $customer->save();

        return redirect('customer')->with('success','Updated');

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
        $customer = Customer::find($id);
        $customer->delete();
        return redirect('customer')->with('success','Deleted');

    }
}

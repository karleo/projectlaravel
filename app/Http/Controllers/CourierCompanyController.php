<?php

namespace App\Http\Controllers;

use App\Models\CourierCompany;
use Illuminate\Http\Request;
use App\Models\Country;

class CourierCompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = CourierCompany::all();
        return view('maintenance.company.index',compact('data'));
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
        return view ('maintenance.company.create',compact('country'));
        
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
        CourierCompany::create([
            'name_com' => $data['name_com'],
            'address' => $data['address'],
            'contact' => $data['contact'],
            'website' => $data['website'],
            'city' => $data['city'],
            'country' => $data['country'],
        ]);
        return redirect('maintenance/company')->with('success', 'Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CourierCompany  $courierCompany
     * @return \Illuminate\Http\Response
     */
    public function show(CourierCompany $courierCompany)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CourierCompany  $courierCompany
     * @return \Illuminate\Http\Response
     */
    public function edit(CourierCompany $courierCompany, $id)
    {
        //
        $data = CourierCompany::find($id);
        return view('maintenance.company.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CourierCompany  $courierCompany
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CourierCompany $courierCompany, $id)
    {
        //
        $data = $request->input();
        $ccompany = CourierCompany::find($id); 
        $ccompany->name_com = $data['name_com'];
        $ccompany->address = $data['address'];
      
        $ccompany->save();
        
        return redirect('maintenance/company')->with('success',"Updated");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CourierCompany  $courierCompany
     * @return \Illuminate\Http\Response
     */
    public function destroy(CourierCompany $courierCompany)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\File;
use App\Models\Employee;
use App\Models\Country;
use App\Models\City;
use DB;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = Employee::all(); 
        return view('employee.index',compact('data'));
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
        return view('employee.create',compact('country'));
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
  
        // $test = $request->file('image')->guessExtension();
        // dd($test);

        $this->validate($request, [
            'fname' => 'required',
            'lname' => 'required',
            'gender' => 'required',
            'bdate' => 'required',
            'hdate' => 'required',
            'age' => 'required',
            'address01' => 'required',
            'image' => 'required|mimes:jpg,png,jpeg|max:5048',
        ]); 
 
        $rules = [ 
            'fname' => 'required',
            'lname' => 'required',
            'gender' => 'required',
            'bdate' => 'required',
            'hdate' => 'required',
            'age' => 'required',
            'address01' => 'required',
            'image' => 'required|mimes:jpg,png,jpeg|max:5048',

        ]; 
        
		$validator = Validator::make($request->all(),$rules);


        if ($validator->fails()) {		
         return response()->json($validator->errors(), 400);
		}
		else{ 
            
            $data = $request->input();
         
            $newImageName = time() . '-' . $data['fname'] . ' ' .$data['lname'] . '.'. $request->image->extension();
            // $request->image->getClientOriginalName();         

            $request->image->move(public_path('files/images'), $newImageName);
        // try{
            Employee::create([
                'first_name' =>  $data['fname'],
                'last_name' =>  $data['lname'],
                'middle_name' => $data['mname'],
                'gender' =>  $data['gender'],
                'birth_date' =>$data['bdate'],
                'hire_date' =>$data['hdate'],
                'age' => $data['age'],
                'address01' => $data['address01'],
                'address02' => $data['address02'],
                'image' =>  $newImageName,
            ]);

        // }
        // catch(Exception $e){
        //     return redirect('employee')->with('failed',"operation failed");
        // }

            return redirect('employee')->with('success',"Added");
        }   

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
    public function edit()
    {
        //
        return view('employee.edit');
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
}

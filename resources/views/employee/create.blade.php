@extends('layouts.header')

@section('content')

<!-- section header-->
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Employee Form</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Employee</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>
<!-- section end-->

    
<section class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Employee</h3>
            </div>

            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{route('employee.store')}}" method="post" role="form" enctype="multipart/form-data">
                @csrf
                {{-- @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif --}}
              <div class="card-body">
                <div class="row">
                <div class="form-group col-3">
                  <label for="">First Name</label>
                  <input type="text" class="form-control" name="fname" id="" placeholder="First Name">
                  @if ($errors->has('fname'))
                  <div class="error alert-danger ">
                    The first name field is required.  
                    {{-- {{ $errors->first('fname') }}  --}}
                  </div>
                  @endif
                </div>
                <div class="form-group col-3">
                  <label for="">Middle Name</label>
                  <input type="text" class="form-control" name="mname" id="" placeholder="Middle Name">
                </div>
                <div class="form-group col-3">
                    <label for="">Last Name</label>
                    <input type="text" class="form-control" name="lname" id="" placeholder="Last Name">
                    @if ($errors->has('lname'))
                    <div class="error alert-danger ">
                      The last name field is required.   
                    </div>
                    @endif
                  </div>
                <div class="form-group col-3">
                  <label for="">Photo Profile</label>
                  <div class="form-group">
                    <div class="form-group">
                      <input type="file" class="form-control" name="image" id="image">
                    </div> 
                  </div>
                </div>
                </div>

                <div class="row">
                    <div class="form-group col-3">
                        <label for="">Gender</label>
                        <select class="form-control" name="gender">
                            <option value=1>Male</option>
                            <option value=2>Female</option> 
                          </select> 
                    </div>
                    <div class="form-group col-3">
                        <label for="">Birth Date</label>
                        <input type="date" class="form-control" name="bdate" id=" " placeholder="">
                        @if ($errors->has('bdate'))
                        <div class="error alert-danger ">
                          The birth date field is required.   
                        </div>
                        @endif
                    </div>
                    <div class="form-group col-3">
                        <label for=" ">Age</label>
                        <input type="text" class="form-control" name="age" id="" placeholder="Age">
                        @if ($errors->has('age'))
                        <div class="error alert-danger ">
                          The age field is required.   
                        </div>
                        @endif
                    </div>
                    <div class="form-group col-3">
                        <label for=" ">Hire Date</label>
                        <input type="date" class="form-control" name="hdate" id=" " placeholder=" ">
                        @if ($errors->has('hdate'))
                        <div class="error alert-danger ">
                          The hire date field is required.   
                        </div>
                        @endif
                    </div>                     
                </div> 
                
                <div class="row"> 
                    <div class="form-group col-6">
                        <label for="">Address</label>
                        <input type="text" class="form-control" name="address01" id=" " placeholder="Address">
                        @if ($errors->has('address01'))
                        <div class="error alert-danger ">
                          The address field is required.   
                        </div>
                        @endif
                    </div>
                    <div class="form-group col-6">
                        <label for=" ">Address 2</label>
                        <input type="text" class="form-control" name="address02" id="" placeholder="Address 02">
                    </div> 
                </div>

                <div class="row"> 
                  <div class="form-group col-6">
                      <label for="">Country</label>
                      <select class="form-control" name="country" id="ocountry">
                        <option selected="" disabled="">Select Country</option> 
                        @foreach ($country as $item)                              
                          <option value={{$item->id}}> {{$item->name}}</option>
                        @endforeach
                      </select>
                      {{-- <input type="text" class="form-control" name="country" id=" " placeholder="Country">  --}}
                  </div>
                  <div class="form-group col-6">
                      <label for=" ">City</label>
                      <select class="form-control" name="city" id="city"> </select>
                      {{-- <input type="text" class="form-control" name="city" id="" placeholder="City"> --}}
                  </div> 
                </div>



              </div>
              <!-- /.card-body -->

              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Save</button>
              </div>
            </form>
          </div>
          <!-- /.card --> 

        </div>
 
         
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>


	<section class="content">
    <div class="container-fluid">
      <div class="row">
    <div class="col-md-6">
       <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Documents</h3>
         </div>
        <!-- <form role="form"> -->
        <div class="card-body">
          <div class="row">
            <!-- /.card-header -->
            <div class="card-body p-0" >
              <table class="table table-sm">
                <thead>
                  <tr>
                    <th   class='text-center'><b>Documents Name</b></th>
                    <th class='text-center'><b>File Name	</b></th> 
                    <th class='text-center'>Action</th>										 
                  </tr>
                </thead>
                <tbody class='items'>
                {{-- @foreach($d_courier as $data) --}}
                <tr>
                  {{-- <td class='text-center'style="width: 30%;">{{$data->detail_description}}</td>
                  <td class='text-center'>{{$data->detail_qnty}}</td>
                  <td class='text-center'>{{ $data->detail_weight }} </td>
                  <td class='text-center'>{{ $data->detail_length }}  </td>
                  <td class='text-center'>{{$data->detail_width}}</td>
                  <td class='text-center'>{{$data->detail_height}}</td>
                  <td style="width: 10%;" class='text-center'>{{$data->detail_vol}}</td>
                  <td class='text-center' > 
              
                    <a href="{{route('shipment.editd',$data->id)}}" class="btn btn-sm btn-info" data-toggle="modal" data-target="#emodal-xl">Edit</a>
                
                    <a href="{{route('shipment.delete',$data->id)}}" class="btn btn-sm btn-danger">Delete</a>  
                   </td> --}}
                </tr>
                {{-- @endforeach --}}
                </tbody>
              </table>
            </div>
                      </div>
                  </div>
         <div class="col-3">
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-xl">
            Add documents
          </button>
        </div>
      </div>
       </div>
    </div>
   </div>
</section>
 

 	<!-- /.modal-content -->
	 <div class="modal fade" id="modal-xl">
		<div class="col-md-12">
			<div class="modal-dialog modal-xl">
			<div class="modal-content">
				<div class="modal-header">
				<h4 class="modal-title">Documents Details</h4>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<form action=" " method="POST" role="modal">
					@csrf
				<div class="card-body">
					<div class="row">
						<div class="modal-body">
						</div>
					</div>
					<div class="row">
					<div class="form-group col-8">
							<label for="exampleInputPassword1">File Description</label>
							<input type="text" class="form-control" name="detail_description" id="exampleInputPassword1" placeholder="Item Description "></textarea>
						</div>
						<div class="form-group col-4">
							<label for="exampleInputPassword1">Documents</label>
              <input type="file" class="form-control" name="docs" id="">
						</div>
					</div>
				 
				</div>
				<div class="modal-footer justify-content-between">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-primary">Add document</button>
				</div>
			</div>
			</form>
			</div>
			<!-- /.modal-content -->
			</div>
			<!-- /.modal-dialog -->
		</div>
		<!-- /.modal -->





@endsection
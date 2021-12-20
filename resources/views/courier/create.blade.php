@extends('layouts.header')

@section('content')

<!-- section header-->
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Shipment Form</h1>  
          <div class="row">
            <div class="col-sm-3">
              <label for="">Tracking</label>  
              <input type="text" name="tracking" value="{{$data}}" readonly disabled> 
            </div>
          </div>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Shipment</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>
<!-- section end-->

    
<section class="content">
    <div class="container-fluid">
      <div class="row mb-2">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Shipment</h3>
            </div>

            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{route('courier.store')}}" method="post" role="form">
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
                    <div class="form-group col-6">
                        <label for="">Shipment From</label>
                        <input type="text" class="form-control" name="shipper" id="" placeholder="Shipper Name"> 
                    </div>
                    <div class="form-group col-6">
                      <label for="">Email Adress</label>
                      <input type="text" class="form-control" name="semail" id="" placeholder="Email Address"> 
                    </div>  
                    <div class="form-group col-12">
                        <label for="">Address</label>
                        <input type="text" class="form-control" name="saddress" id="" placeholder="Address">
                    </div>
                    <div class="form-group col-4">
                        <label for="">Contact Number</label>
                        <input type="text" class="form-control" name="snumber" id="" placeholder="Contact Number"> 
                    </div> 
                    <div class="form-group col-3"  >
                      <label for="">Zip Code</label>
                      <input type="text" class="form-control" name="szipcode" id="" placeholder="Zip Code"> 
                    </div>
                    <div class="form-group col-3" style="display:none">
                      <label for="">Contact Number</label>
                      <input type="text" class="form-control" name="" id="" placeholder="Contact Number"> 
                    </div>        
                    <div class="form-group col-6">
                      <label for="">Country</label>
                      <select class="form-control " name="scountry" id="ocountry">
                        <option selected="" disabled="">Select Country</option> 
                        @foreach ($country as $item)                              
                          <option value={{$item->id}}> {{$item->name}}</option>
                        @endforeach
                      </select>
                        {{-- <input type="text" class="form-control" name="scountry" id="" placeholder="Country"> --}}
                    </div>
                      <div class="form-group col-4">
                          <label for="">City</label>
                          <select class="form-control " name="scity" id="city" placeholder="City"> </select>
                      </div>  
                </div> 

              </div>              
              <!-- /.card-body -->
             <!-- button -->
          </div>
          <!-- /.card --> 
        </div>

      <!-- Consignee -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Consignee Details</h3>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="form-group col-6">
                    <label for="">Consignee</label>
                    <input type="text" class="form-control" name="consignee" id="" placeholder="Consignee Name"> 
                </div>               
                <div class="form-group col-6">
                  <label for="">Email Address</label>
                  <input type="text" class="form-control" name="remail" id="" placeholder="Email Address"> 
              </div>
                <div class="form-group col-12">
                    <label for="">Address</label>
                    <input type="text" class="form-control" name="raddress" id="" placeholder="Address">
                </div>
                <div class="form-group col-6">
                  <label for="">Contact Number</label>
                  <input type="text" class="form-control" name="rnumber" id="" placeholder="Contact Number"> 
              </div>
                <div class="form-group col-6">
                    <label for="">Zipcode</label>
                    <input type="text" class="form-control" name="rzipcode" id="" placeholder="Zipcode">
                </div>
                <div class="form-group col-4">
                    <label for="">Country</label>
                    <select class="form-control" name="rcountry" id="dcountry" >
                      <option selected="" disabled="">Select Country</option> 
                      @foreach ($country as $item)
                        <option value="{{$item->id}}">{{$item->name}}</option>                          
                      @endforeach
                    </select>
                    {{-- <input type="text" class="form-control" name="rcountry" id="" placeholder="Country"> --}}
                </div>
                <div class="form-group col-4">
                    <label for="">City</label>
                    <select  class="form-control" name="rcity" id="dcity" placeholder="City"> </select>
                </div>              
              </div> 
            </div> 
          </div> 
        </div> 
    <!-- End Consignee -->        


    <div class="card-footer">
      <button type="submit" class="btn btn-primary">Save</button>
    </div>
  </form>
 

      </div> 
      <!-- /.row --> 
     

    </div><!-- /.container-fluid -->
  </section>




	<section class="content">
    <div class="container-fluid">
      <div class="row">
    <div class="col-md-12">
       <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Package Details</h3>
         </div>
        <!-- <form role="form"> -->
        <div class="card-body">
          <div class="row">
            <!-- /.card-header -->
            <div class="card-body p-0 col-md-12" >
              <table class="table table-sm">
                <thead>
                  <tr>
                    <th style="width: 30%;" class='text-center'><b>Description</b></th>
                    <th class='text-center'><b>Quantity	</b></th>
                    <th class='text-center'><b>Weight (kg)</b></th>
                    <th class='text-center'><b>Length (cm)</b></th>
                    <th class='text-center'><b>Width (cm)</b></th>
                    <th class='text-center'><b>Height (cm)</b></th>
                    <th style="width: 10%;" class='text-center'><b>Weight vol. (kg)</b></th>
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
         <div class="col-9">
          <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-xl">
            Add boxes
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
				<h4 class="modal-title">Details</h4>
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
							<label for="exampleInputPassword1">Item Description</label>
							<textarea type="text" class="form-control" name="detail_description" id="exampleInputPassword1" placeholder="Item Description "></textarea>
						</div>
						<div class="form-group col-4">
							<label for="exampleInputPassword1">Quantity</label>
							<input type="number" class="form-control" name="detail_qnty" id="exampleInputPassword1" placeholder="Quantity">
						</div>
					</div>
					<div class="row">
						<div class="form-group col-sm-12 col-md-3">
								<label for="exampleInputPassword1">Weight (kg)</label>
								<input type="text" class="form-control" name="detail_weight" id="exampleInputPassword1" placeholder="weigth"></textarea>
							</div>
							<div class="form-group col-sm-12 col-md-9">
								<label for="exampleInputPassword1">Dimension (cm)</label>
								<div class="input-group">
								<input type="number" class="form-control" name="detail_length" id="exampleInputPassword1" placeholder="length">
								<div class="cross strong text__color-gray-darker text__size-smaller">&nbsp; x &nbsp;</div>
								<input type="number" class="form-control" name="detail_width" id="exampleInputPassword1" placeholder="width">
								<div class="cross strong text__color-gray-darker text__size-smaller">&nbsp; x &nbsp;</div>
								<input type="number" class="form-control" name="detail_height" id="exampleInputPassword1" placeholder="height">
							</div>
						</div>
					</div>
				</div>
				<div class="modal-footer justify-content-between">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-primary">Add boxes</button>
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

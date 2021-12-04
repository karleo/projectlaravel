@extends('layouts.header')

@section('content')

<!-- section header-->
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Shipment Form</h1>
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
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Shipment</h3>
            </div>

            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{route('employee.store')}}" method="post" role="form">
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
                        <label for="">Shipment From</label>
                        <input type="text" class="form-control" name="shipper" id="" placeholder="Shipper Name"> 
                    </div>
                    <div class="form-group col-3">
                        <label for="">Contact Number</label>
                        <input type="text" class="form-control" name="snumber" id="" placeholder="Contact Number"> 
                    </div>
                    <div class="form-group col-3">
                        <label for="">Address</label>
                        <input type="text" class="form-control" name="saddress" id="" placeholder="Address">
                    </div>
                    <div class="form-group col-3">
                        <label for="">Country</label>
                        <input type="text" class="form-control" name="scountry" id="" placeholder="Country">
                    </div>
                    <div class="form-group col-3">
                        <label for="">City</label>
                        <input type="text" class="form-control" name="scity" id="" placeholder="City">
                    </div>              
                </div>
          
                <div class="row">
                    <div class="form-group col-3">
                        <label for="">Consignee</label>
                        <input type="text" class="form-control" name="consignee" id="" placeholder="Consignee Name"> 
                    </div>
                    <div class="form-group col-3">
                        <label for="">Contact Number</label>
                        <input type="text" class="form-control" name="rnumber" id="" placeholder="Contact Number"> 
                    </div>
                    <div class="form-group col-3">
                        <label for="">Address</label>
                        <input type="text" class="form-control" name="raddress" id="" placeholder="Address">
                    </div>
                    <div class="form-group col-3">
                        <label for="">Zipcode</label>
                        <input type="text" class="form-control" name="rzipcode" id="" placeholder="Zipcode">
                    </div>
                    <div class="form-group col-3">
                        <label for="">Country</label>
                        <input type="text" class="form-control" name="rcountry" id="" placeholder="Country">
                    </div>
                    <div class="form-group col-3">
                        <label for="">City</label>
                        <input type="text" class="form-control" name="rcity" id="" placeholder="City">
                    </div>              
                </div>  

                <br>
                <div class="card card-primary ">
                  <div class="card-header"> Shipment Details</div>
                    <div class="card-body">
                      <div class="row">
                        <div class="form-group col-3">
                            <label for="">Consignee</label>
                            <input type="text" class="form-control" name="consignee" id="" placeholder="Consignee Name"> 
                        </div>
                        <div class="form-group col-3">
                            <label for="">Contact Number</label>
                            <input type="text" class="form-control" name="rnumber" id="" placeholder="Contact Number"> 
                        </div>
                        <div class="form-group col-3">
                            <label for="">Address</label>
                            <input type="text" class="form-control" name="raddress" id="" placeholder="Address">
                        </div>
                        <div class="form-group col-3">
                            <label for="">Zipcode</label>
                            <input type="text" class="form-control" name="rzipcode" id="" placeholder="Zipcode">
                        </div>
                        <div class="form-group col-3">
                            <label for="">Country</label>
                            <input type="text" class="form-control" name="rcountry" id="" placeholder="Country">
                        </div>
                        <div class="form-group col-3">
                            <label for="">City</label>
                            <input type="text" class="form-control" name="rcity" id="" placeholder="City">
                        </div>                         
                      </div>
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


@endsection
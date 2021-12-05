@extends('layouts.header')

@section('content')    

<!-- section header-->
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Customer Form</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Customer</li>
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
              <h3 class="card-title">Customer</h3>
            </div>

            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{route('customer.update', $data->id)}}" method="post" role="form">
                @csrf
                @method('PUT')
                
              <div class="card-body">
                <div class="row">
                    <div class="form-group col-2">
                        <label for="">Customer Code</label>
                        <input type="text" class="form-control" name="code" value="{{$data->customer_code}}" placeholder="Customer Code">
                    </div>
                    <div class="form-group col-4">
                    <label for="">Customer Name</label>
                    <input type="text" class="form-control" name="cname" value="{{$data->customer_name}}" placeholder="Customer Name">
                    @if ($errors->has('cname'))
                    <div class="error alert-danger ">
                        The customer name field is required.  
                        {{-- {{ $errors->first('fname') }}  --}}
                    </div>
                    @endif
                    </div>
                    <div class="form-group col-3">
                        <label for="">Contact Number</label>
                        <input type="text" class="form-control" name="contact" value="{{$data->contact}}" placeholder="Contact Number">
                    </div>
                    <div class="form-group col-3">
                        <label for="">Cellphone Number</label>
                        <input type="text" class="form-control" name="cellphone" value="{{$data->cellphone}}" placeholder="Cellphone Number">
                    </div> 
                </div>

                <div class="row">
                    <div class="form-group col-3">
                        <label for="">Email</label>
                        <input type="text" class="form-control" name="email" value="{{$data->email}}" placeholder="Email "> 
                    </div>     
                    <div class="form-group col-9">
                        <label for="">Address</label>
                        <input type="text" class="form-control" name="address" value="{{$data->address}}" placeholder="Adress ">  
                    </div>  
                </div> 
                
                <div class="row"> 
                    <div class="form-group col-5">
                        <label for=" ">Company Name</label>
                        <input type="text" class="form-control" name="compnayname" value="{{$data->company_name}}" placeholder="Company Name">                         
                    </div>   
                    <div class="form-group col-1">
                        <label for=" ">Zipcode</label>
                        <input type="text" class="form-control" name="zipcode" value="{{$data->zipcode}}" placeholder="Zip Code">                         
                    </div>   
                    <div class="form-group col-3">
                        <label for="">Country</label>
                        <select class="form-control" name="country" id="ocountry" value="{{$data->country->name}}">
                            <option selected="{{$data->country_id}}" disabled="">{{$data->country->name}}</option>
                            @foreach ($country as $item)
                                <option value="{{$item->id}}">{{$item->name}}</option>
                            @endforeach
                        </select>
                        {{-- <input type="text" class="form-control" name="country" id=" " placeholder="Country">  --}}
                    </div>       
                    <div class="form-group col-3">
                        <label for="">City</label>
                        <select class="form-control" name="city" id="city">
                            <option value="{{$data->city_id}}">{{$data->city->name}}</option>
                        </select>
                        {{-- <input type="text" class="form-control" name="city" id="" placeholder="City"> --}}
                    </div> 
                </div>
              </div>
              <!-- /.card-body --> 
              
              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Update</button>
                <a href="{{route('customer.index')}}" class="btn btn-info">Back</a>
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
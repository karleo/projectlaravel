@extends('layouts.header')

@section('content') 

<!-- section header-->
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Package Form</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Package</li>
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
              <h3 class="card-title">Package</h3>
            </div>
            
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{route('package.update' , $data->id)}}" method="post" role="form">
                @csrf                
                @method('PUT')
              <div class="card-body">
                <div class="row">
                <div class="form-group col-3">
                  <label for="">Package Name</label>
                  <input type="text" class="form-control" name="name" value="{{$data->name}}" placeholder="Package Name"> 
                </div>
                <div class="form-group col-3">
                  <label for="">Details </label>
                  <input type="text" class="form-control" name="details" value="{{$data->details}}"  placeholder="Details">
                </div>                              
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Update</button>
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
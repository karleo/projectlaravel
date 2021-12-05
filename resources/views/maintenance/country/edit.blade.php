@extends('layouts.header')

@section('content') 

<!-- section header-->
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Country Form</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Country</li>
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
              <h3 class="card-title">Country</h3>
            </div>
            
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{route('country.update' , $data->id)}}" method="post" role="form">
                @csrf                
                @method('PUT')
              <div class="card-body">
                <div class="row">
                <div class="form-group col-3">
                  <label for="">Country Name</label>
                  <input type="text" class="form-control" name="cname" value="{{$data->name}}" placeholder="Country Name"> 
                </div>
                <div class="form-group col-3">
                  <label for="">Code </label>
                  <input type="text" class="form-control" name="code" value="{{$data->code}}"  placeholder="Code">
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
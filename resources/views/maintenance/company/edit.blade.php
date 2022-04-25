@extends('layouts.header')

@section('content') 

<!-- section header-->
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Courier Compnay </h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Courier Compnay</li>
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
              <h3 class="card-title">Courier Compnay</h3>
            </div>
            
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{route('ccompany.update' , $data->id)}}" method="post" role="form">
                @csrf                
                @method('PUT')
              <div class="card-body">
                <div class="row">
                <div class="form-group col-3">
                  <label for="">Compnay Name</label>
                  <input type="text" class="form-control" name="name_com" value="{{$data->name_com}}" placeholder="Compnay Name"> 
                </div>
                <div class="form-group col-3">
                  <label for="">Address </label>
                  <input type="text" class="form-control" name="address" value="{{$data->address}}"  placeholder="Adress">
                </div>                              
                <div class="form-group col-3">
                    <label for="">Contact </label>
                    <input type="text" class="form-control" name="contact" value="{{$data->contact}}"  placeholder="Contact">
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
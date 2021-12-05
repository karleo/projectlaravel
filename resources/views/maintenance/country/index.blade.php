@extends('layouts.header')

@section('content')
    

<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Country List</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Country List</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12"> 

          <div class="card">
            <div class="card-header">
              <h3 class="card-title col-1">  <a class="btn btn-block btn-primary" href="{{route('country.create')}}">Add</a>  </h3>
            
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Name</th>
                  <th>Code</th>
                  <th>Action</th>                   
                </tr>
                </thead>
                <tbody>
                @foreach ($data as $row)
                <tr>
                  <td> {{$row->name}}</td>
                  <td>{{$row->code}}</td> 
                  <td>	
                    <a href="{{route('country.edit', $row->id)}}" class="btn btn-sm btn-info">Edit</a> 
										{{-- <a href="{{route('country.destroy',$row->id)}}" class="btn btn-sm btn-danger">Delete</a>                     --}}
                </tr>
                @endforeach 
              
                </tbody>
                <tfoot>
                <tr>
                  <th>Name</th>
                  <th>Code</th>      
                  <th>Action</th>         
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
  </section>
  <!-- /.content -->

    

@endsection
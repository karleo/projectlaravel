@extends('layouts.header')

@section('content')
 

<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Customer List</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Customer List</li>
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
              <h3 class="card-title col-1">  <a class="btn btn-block btn-primary" href="{{route('customer.create')}}">Add</a>  </h3>
            
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Customer Code</th>
                  <th>Customer Name</th>
                  <th>Country</th>
                  <th>Company Name</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($data as $row)
                <tr>
                  <td>{{$row->customer_code}}</td>
                  <td>{{$row->customer_name}}</td>
                  <td>{{$row->country->name}}</td>
                  <td>{{$row->company_name}}</td> 
                  <td>
                    <a href="{{route('customer.edit',$row->id)}}" class="btn btn-sm btn-info">Edit</a>
                    {{-- <a href="{{route('customer.destroy',$row->id)}}" class="btn btn-sm btn-danger">Delete</a> --}}
                  </td> 
                </tr>
                @endforeach 
              
                </tbody>
                <tfoot>
                <tr>
                    <th>Customer Code</th>
                    <th>Customer Name</th>
                    <th>Country</th>
                    <th>Company Name</th>
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
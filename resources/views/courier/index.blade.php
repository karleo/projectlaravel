@extends('layouts.header')

@section('content')  


<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Shipment List</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Shipment List</li>
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
              <h3 class="card-title col-1">  <a class="btn btn-block btn-primary" href="{{route('courier.create')}}">Add</a>  </h3>
            
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Date</th>
                  <th>Tracking</th>
                  <th>Reference</th>
                  <th>Shipment Details</th>
                  <th>Quantity</th>
                  <th>Weight</th>
                  <th>Status</th>
                </tr>
                </thead>
                <tbody>
     
                <tr>
              
                  
                </tr>
             
              
                </tbody>
                <tfoot>
                <tr>
                    <th>Date</th>
                    <th>Tracking</th>
                    <th>Reference</th>
                    <th>Shipment Details</th>
                    <th>Quantity</th>
                    <th>Weight</th>
                    <th>Status</th>
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
@extends('layouts.header')

@section('content')  


<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Courier Status</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Status List</li>
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
              <h3 class="card-title col-1">  <a class="btn btn-block btn-primary" href="{{route('status.create')}}">Add</a>  </h3>
            
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Name</th>
                  <th>Code</th>
                  
                </tr>
                </thead>
                <tbody>
                  @foreach ($data as $item) 
                <tr>
                  <td>{{$item->name}} </td>
                  <td>{{$item->code}}  </td>  
                </tr> 
                    @endforeach
                </tbody>
                <tfoot>
                <tr>
                  <th>Name</th>
                  <th>Code</th>
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
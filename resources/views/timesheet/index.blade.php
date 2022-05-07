@extends('layouts.header')

@section('content')

  <!-- Content Wrapper. Contains page content -->
   
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard Timesheet v3</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <a href="{{route('employee.add_time')}}" class="btn btn-info">Punch In </a>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content-header -->


     <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-12"> 
  
              <div class="card">
                <div class="card-header border-0">                    
                </div>
                <div class="card-body table-responsive">
                    <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                      <th>Date</th>
                      <th>Employee ID</th>
                      <th>Name</th>
                      <th>Time In</th>
                      <th>Time Out</th>
                      <th>Total Hours</th>
                      <th>Remarks</th>
                      <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>                   
                      <td> 
                       05/05/2022
                      </td>
                      <td>
                      13    
                      </td>
                      <td>
                        Leo  
                      </td>
                      <td>10.30</td>
                      <td>
                        19.00
                      </td>
                      <td>
                        07.00
                      </td>
                      <td>
                       jabel ali
                      </td>
                      <td>
                        <a href="" class="btn btn-danger">  Punch out </a>
                        </td>
                    </tr>
                    <tr>
                        <td> 
                         05/05/2022
                        </td>
                        <td>
                        123    
                        </td>
                        <td>
                         Jan  
                        </td>
                        <td>10.30</td>
                        <td>
                          19.00
                        </td>
                        <td>
                          07.00
                        </td>
                        <td>
                         jabel ali
                        </td>
                        <td>
                          <a href="" class="btn btn-danger">  Punch out </a>
                          </td>
                      </tr>
                      <tr>
                        <td> 
                         05/05/2022
                        </td>
                        <td>
                        13    
                        </td>
                        <td>
                            Leo  
                        </td>
                        <td>10.30</td>
                        <td>
                          19.00
                        </td>
                        <td>
                          07.00
                        </td>
                        <td>
                         jabel ali
                        </td>
                        <td>
                            <a href="" class="btn btn-danger">  Punch out </a>
                            </td>
                      </tr>
                      <tr>
                        <td> 
                         05/05/2022
                        </td>
                        <td>
                        13    
                        </td>
                        <td>
                            Leo  
                        </td>
                        <td>10.30</td>
                        <td>
                          19.00
                        </td>
                        <td>
                          07.00
                        </td>
                        <td>
                         jabel ali
                        </td>
                        <td>
                        <a href="" class="btn btn-danger">  Punch out </a>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
              <!-- /.card -->
            </div>
            <!-- /.col-md-6 -->
           
                  <!-- /.d-flex -->
                </div>
              </div>
            </div>
            <!-- /.col-md-6 -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
      </div>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    </section>
 

@endsection
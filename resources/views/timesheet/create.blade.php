@extends('layouts.header')

@section('content')



<!-- section header-->
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1> </h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#"> </a></li>
            <li class="breadcrumb-item active"> </li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>
<!-- section end-->

<section class="container">
    <div class="container-fluid">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
              <!-- general form elements -->
              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Punch</h3>
                </div>
                <form action="{{route('employee.store')}}" method="post" role="form" enctype="multipart/form-data">

                    <div class="card-body">
                        <div class="row">
                        <div class="form-group col-4">
                          <label for="">Employee ID</label>
                          <select class="form-group select2bs4 col-6" name="empid"> 
                            @foreach ($data_emp as $row)
                            <option value="{{$row->emp_no }}">{{$row->emp_no }}</option>                                
                            @endforeach
                          </select>
                          {{-- <input type="text" class="form-control" name="empid" id="" placeholder="Select ID"> --}}
                          @if ($errors->has('empid'))
                          <div class="error alert-danger ">
                            The ID field is required.  
                            {{-- {{ $errors->first('fname') }}  --}}
                          </div>
                          @endif
                        </div>
                   
                        <div class="form-group col-3">
                            <label for="">Employee Name</label>
                            <select class="form-group select2bs4 col-12" name="ename"> 
                              @foreach ($data_emp as $row)
                              <option value="{{$row->id }}">{{$row->first_name }}</option>                                
                              @endforeach
                            </select>
                            {{-- <input type="text" class="form-control" name="ename" id="" placeholder="Select Name"> --}}
                            @if ($errors->has('ename'))
                            <div class="error alert-danger ">
                            The name field is required.  
                            {{-- {{ $errors->first('fname') }}  --}}
                            </div>
                            @endif
                        </div>

                        <div class="form-group col-3">
                            <label for="">Date</label>
                            <input type="text" class="form-control" name="empid" id="" value="<?php echo date('Y-m-d H:i:s') ?>" placeholder="Date" readonly>
                            @if ($errors->has('empid'))
                            <div class="error alert-danger ">
                            The ID field is required.  
                            {{-- {{ $errors->first('fname') }}  --}}
                            </div>
                            @endif
                        </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-3">
                                <label for="">Location</label>
                                <input type="text" class="form-control" name="latitude" id=""   placeholder="" readonly>                               
                            </div>
                            <div class="form-group col-3">
                                <label for="">Photo</label>
                                <input type="text" class="form-control" name="latitude" id=""   placeholder="" readonly>                               
                            </div> 
                        </div>
                        <div class="row">
                            <div class="form-group col-3">
                                <label for="">Remarks</label>
                                <input type="text" class="form-control" name="remark" id=""   placeholder="" >                               
                            </div>
                            
                        </div>
                    </div>


                    <div class="card-footer">
                        <button type="submit" class="btn btn-info" > Punch In  </button>
                    </div>

                </form>
              </div>
            </div>
    </div>
</section>


@endsection
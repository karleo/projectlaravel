@extends('layouts.header')

@section('content')

  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>
            Employee Edit
          </h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Employee</li>
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
          <h4>Employee Data <small>card-tabs / card-outline-tabs</small></h4>
        </div>
      </div>
      <!-- ./row -->
      <div class="row">
        <div class="col-12 col-sm-12">
          <div class="card card-primary card-tabs">
            <div class="card-header p-0 pt-1">
              <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">         
                {{-- <li class="pt-2 px-3"><h3 class="card-title">Card Title</h3></li>        --}}
                <li class="nav-item">
                  <a class="nav-link active" id="custom-tabs-one-profile-tab" data-toggle="pill" href="#custom-tabs-one-profile" role="tab" aria-controls="custom-tabs-one-profile" aria-selected="true">Profile</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="custom-tabs-one-messages-tab" data-toggle="pill" href="#custom-tabs-one-messages" role="tab" aria-controls="custom-tabs-one-messages" aria-selected="false">Documents</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="custom-tabs-one-settings-tab" data-toggle="pill" href="#custom-tabs-one-settings" role="tab" aria-controls="custom-tabs-one-settings" aria-selected="false">Leave</a>
                </li>
              </ul>
            </div>
            <div class="card-body col-12">
              <div class="tab-content" id="custom-tabs-one-tabContent">              
                <div class="tab-pane fade show active" id="custom-tabs-one-profile" role="tabpanel" aria-labelledby="custom-tabs-one-profile-tab">
                    <div class="row">                        
                        <div class="form-group col-3">
                            <label for="">First Name</label>
                            <input type="text" class="form-control" name="fname" id="" placeholder="First Name"> 
                        </div>
                        <div class="form-group col-3">
                            <label for="">Middle Name</label>
                            <input type="text" class="form-control" name="mname" id="" placeholder="Middle Name"> 
                        </div> 
                        <div class="form-group col-3">
                            <label for="">Last Name</label>
                            <input type="text" class="form-control" name="lname" id="" placeholder="Last Name"> 
                        </div>
                        <div class="form-group col-3">
                            <label for="">Age</label>
                            <input type="text" class="form-control" name="age" id="" placeholder="Age"> 
                        </div> 
                    </div> 
                    <div class="row">                        
                        <div class="form-group col-3">
                            <label for="">First Name</label>
                            <input type="text" class="form-control" name="fname" id="" placeholder="First Name"> 
                        </div>
                        <div class="form-group col-3">
                            <label for="">Middle Name</label>
                            <input type="text" class="form-control" name="mname" id="" placeholder="Middle Name"> 
                        </div> 
                        <div class="form-group col-3">
                            <label for="">Last Name</label>
                            <input type="text" class="form-control" name="lname" id="" placeholder="Last Name"> 
                        </div>
                        <div class="form-group col-3">
                            <label for="">Age</label>
                            <input type="text" class="form-control" name="age" id="" placeholder="Age"> 
                        </div> 
                    </div>                               
                </div>
               
             
                    <li>{{$data->image}}<img src="{{asset('files/images/' . $data->image )}}" alt="" ></li>
        

                <div class="tab-pane fade" id="custom-tabs-one-messages" role="tabpanel" aria-labelledby="custom-tabs-one-messages-tab">
                   Morbi turpis dolor, vulputate vitae felis non, tincidunt congue mauris. Phasellus volutpat augue id mi placerat mollis. Vivamus faucibus eu massa eget condimentum. Fusce nec hendrerit sem, ac tristique nulla. Integer vestibulum orci odio. Cras nec augue ipsum. Suspendisse ut velit condimentum, mattis urna a, malesuada nunc. Curabitur eleifend facilisis velit finibus tristique. Nam vulputate, eros non luctus efficitur, ipsum odio volutpat massa, sit amet sollicitudin est libero sed ipsum. Nulla lacinia, ex vitae gravida fermentum, lectus ipsum gravida arcu, id fermentum metus arcu vel metus. Curabitur eget sem eu risus tincidunt eleifend ac ornare magna.
                </div>
                <div class="tab-pane fade" id="custom-tabs-one-settings" role="tabpanel" aria-labelledby="custom-tabs-one-settings-tab">
                   Pellentesque vestibulum commodo nibh nec blandit. Maecenas neque magna, iaculis tempus turpis ac, ornare sodales tellus. Mauris eget blandit dolor. Quisque tincidunt venenatis vulputate. Morbi euismod molestie tristique. Vestibulum consectetur dolor a vestibulum pharetra. Donec interdum placerat urna nec pharetra. Etiam eget dapibus orci, eget aliquet urna. Nunc at consequat diam. Nunc et felis ut nisl commodo dignissim. In hac habitasse platea dictumst. Praesent imperdiet accumsan ex sit amet facilisis.
                </div>
              </div>
            </div>
            <!-- /.card -->
          </div>
        </div> 
      </div> 
      <!-- /.card --> 
    </div>
    <!-- /.container-fluid -->
  </section>  

@endsection
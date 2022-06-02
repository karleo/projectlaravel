@extends('layouts.header')

@section('content')

<!-- section header-->
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Employee Form</h1>
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
<!-- section end-->

    
<section class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Employee</h3>
            </div>

            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{route('employee.store')}}" method="post" role="form" enctype="multipart/form-data">
                @csrf
                {{-- @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif --}}
              <div class="card-body">
                <div class="row">
                <div class="form-group col-3">
                  <label for="">First Name</label>
                  <input type="text" class="form-control" name="fname" id="" placeholder="First Name">
                  @if ($errors->has('fname'))
                  <div class="error alert-danger ">
                    The first name field is required.  
                    {{-- {{ $errors->first('fname') }}  --}}
                  </div>
                  @endif
                </div>
                <div class="form-group col-3">
                  <label for="">Middle Name</label>
                  <input type="text" class="form-control"  name="mname" id="" placeholder="Middle Name">
                </div>
                <div class="form-group col-3">
                    <label for="">Last Name</label>
                    <input type="text" class="form-control"   name="lname" id="" placeholder="Last Name">
                    @if ($errors->has('lname'))
                    <div class="error alert-danger ">
                      The last name field is required.   
                    </div>
                    @endif
                  </div>
                <div class="form-group col-3">
                  <label for="">Photo Profile</label>
                  <div class="form-group">
                    <div class="form-group">
                      <input type="file" class="form-control" name="image" id="image">
                    </div> 
                  </div>
                </div>
                </div>

                <div class="row">
                    <div class="form-group col-3">
                        <label for="">Gender</label>
                        <select class="form-control" name="gender">
                            <option value=1>Male</option>
                            <option value=2>Female</option> 
                          </select> 
                    </div>
                    <div class="form-group col-3">
                        <label for="">Birth Date</label>
                        <input type="date" class="form-control"   onKeyUp="getAge();" name="bdate" id="birthdate" placeholder="">
                        @if ($errors->has('bdate'))
                        <div class="error alert-danger ">
                          The birth date field is required.   
                        </div>
                        @endif
                    </div>
                    <div class="form-group col-3">
                        <label for=" ">Age</label>
                        <input type="text" class="form-control" onkename="age" id="age" placeholder="Age">
                        @if ($errors->has('age'))
                        <div class="error alert-danger ">
                          The age field is required.   
                        </div>
                        @endif
                    </div>
                    <div class="form-group col-3">
                        <label for=" ">Hire Date</label>
                        <input type="date" class="form-control"  name="hdate" id=" " placeholder=" ">
                        @if ($errors->has('hdate'))
                        <div class="error alert-danger ">
                          The hire date field is required.   
                        </div>
                        @endif
                    </div>                     
                </div> 
                
                <div class="row"> 
                    <div class="form-group col-6">
                        <label for="">Address</label>
                        <input type="text" class="form-control" name="address01" id=" " placeholder="Address">
                        @if ($errors->has('address01'))
                        <div class="error alert-danger ">
                          The address field is required.   
                        </div>
                        @endif
                    </div>
                    <div class="form-group col-6">
                        <label for=" ">Address 2</label>
                        <input type="text" class="form-control" name="address02" id="" placeholder="Address 02">
                    </div> 
                </div>

                <div class="row"> 
                  <div class="form-group col-2">
                      <label for="">Country</label>
                      <select class="form-control" name="country" id="ocountry">
                        <option selected="" disabled="">Select Country</option> 
                        @foreach ($country as $item)                              
                          <option value={{$item->id}}> {{$item->name}}</option>
                        @endforeach
                      </select>
                      {{-- <input type="text" class="form-control" name="country" id=" " placeholder="Country">  --}}
                  </div>
                  <div class="form-group col-2">
                      <label for=" ">City</label>
                      <select class="form-control" name="city" id="city"> </select>
                      {{-- <input type="text" class="form-control" name="city" id="" placeholder="City"> --}}
                  </div> 
                </div> 
                <div class="row"> 
                  <div class="form-group col-4">
                      <label for="">Username</label>
                      <input type="text" class="form-control" name="username" id=" " placeholder="Username">
                      @if ($errors->has('username'))
                      <div class="error alert-danger ">
                        The address field is required.   
                      </div>
                      @endif
                  </div>
                  <div class="form-group col-4">
                      <label for=" ">Password</label>
                      <input type="text" class="form-control" name="password" id="" placeholder="password">
                  </div> 
                </div>
              </div>
              <!-- /.card-body -->
            </div>
  
              <div class="container-fluid">
                <button type="submit" class="btn btn-primary">Save</button>
              </div>
            </form>
          </div>
          <!-- /.card --> 
        </div> 
         
 
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  
  </section> 


@endsection

@section('js_script')
 

<script type="text/javascript">
 
 function getAge() 
  {
      var today = new Date();
      
      var birthDate = document.getElementById("birthDate");
      var age = today.getFullYear() - birthDate.getFullYear();
      var m = today.getMonth() - birthDate.getMonth();
      if (m < 0 || (m === 0 && today.getDate() < birthDate.getDate())) 
      {
          age--;
      }
      age.value = age;

      console.log(age);
  }
 
</script>

 
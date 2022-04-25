@extends('layouts.header')

@section('content')
    


<!-- section header-->
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Courier Company</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Company</li>
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
              <h3 class="card-title">Courier Company</h3>
            </div>

            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{route('ccompany.store')}}" method="post" role="form">
                @csrf
                
              <div class="card-body">
                <div class="row">
                <div class="form-group col-3">
                  <label for="">Comnpany Name</label>
                  <input type="text" class="form-control" name="name_com" id="" placeholder="Comnpany Name">
                  @if ($errors->has('name_com'))
                  <div class="error alert-danger ">
                    The company name field is required.  
                    {{-- {{ $errors->first('fname') }}  --}}
                  </div>
                  @endif
                </div>
                <div class="form-group col-4">
                  <label for="">Address </label>
                  <input type="text" class="form-control" name="address" id="" placeholder="Address">
                </div>
                <div class="form-group col-3">
                  <label for="">Contact </label>
                  <input type="text" class="form-control" name="contact" id="" placeholder="Contact">
                </div>      
              </div>
              <div class='row'>
                <div class="form-group col-4">
                    <label for="">Website</label>
                    <input type="text" class="form-control" name="website" id="" placeholder="Website">
                </div>
                <div class="form-group col-3">
                    <label for="">Country</label>
                    <select class="form-control" name="rcountry" id="dcountry" >
                        <option selected="" disabled="">Select Country</option> 
                        @foreach ($country as $item)
                          <option value="{{$item->id}}">{{$item->name}}</option>                          
                        @endforeach
                      </select>
                    {{-- <input type="text" class="form-control" name="country" id="" placeholder="Country"> --}}
                </div>
                <div class="form-group col-3">
                    <label for="">City</label>
                    <select  class="form-control" name="city" id="dcity" placeholder="City"> </select>
                    {{-- <input type="text" class="form-control" name="city" id="" placeholder="City"> --}}
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
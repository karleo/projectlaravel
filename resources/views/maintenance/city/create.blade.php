@extends('layouts.header')

@section('content')

<!-- section header-->
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>City Form</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">City</li>
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
              <h3 class="card-title">City</h3>
            </div>

            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{route('city.store')}}" method="post" role="form">
                @csrf

              <div class="card-body">
                <div class="row">
                <div class="form-group col-3">
                    <label for="">Country </label>
                    <select class="form-control" name="countryid" >
                        @foreach ($country as $item)
                            <option value="{{$item->id}}">{{$item->name}}</option>
                        @endforeach
                    </select>
                    {{-- <input type="text" class="form-control" name="country" id="" placeholder="Code"> --}}
                </div>

                <div class="form-group col-3">
                  <label for="">City Name</label>
                  <input type="text" class="form-control" name="cname" id="" placeholder="City Name">
                  @if ($errors->has('cname'))
                  <div class="error alert-danger ">
                    The city name field is required.
                    {{-- {{ $errors->first('fname') }}  --}}
                  </div>
                  @endif
                </div>
                <div class="form-group col-3">
                  <label for="">Code </label>
                  <input type="text" class="form-control" name="code" id="" placeholder="Code">
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

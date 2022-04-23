@extends('layouts.header')

@section('content')

<!-- section header-->
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Shipment Form</h1>  
          <div class="row">
            <div class="col-sm-3">
              <label for="">Tracking</label>  
              <input type="text" name="tracking" value="{{'PL' . $data}}" readonly disabled> 
            </div>
          </div>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Shipment</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>
<!-- section end-->

    
<section class="content">
    <div class="container-fluid">
      <div class="row mb-2">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Shipment</h3>
            </div>

            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{route('courier.store')}}" method="post" role="form">
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
                    <div class="form-group col-6">
                        <label for="">Shipment From</label>
                        <input type="text" class="form-control" name="shipper" id="" placeholder="Shipper Name"> 
                    </div>
                    <div class="form-group col-6">
                      <label for="">Email Adress</label>
                      <input type="text" class="form-control" name="semail" id="" placeholder="Email Address"> 
                    </div>  
                    <div class="form-group col-12">
                        <label for="">Address</label>
                        <input type="text" class="form-control" name="saddress" id="" placeholder="Address">
                    </div>
                    <div class="form-group col-4">
                        <label for="">Contact Number</label>
                        <input type="text" class="form-control" name="snumber" id="" placeholder="Contact Number"> 
                    </div> 
                    <div class="form-group col-3"  >
                      <label for="">Zip Code</label>
                      <input type="text" class="form-control" name="szipcode" id="" placeholder="Zip Code"> 
                    </div>
                    <div class="form-group col-3" style="display:none">
                      <label for="">Contact Number</label>
                      <input type="text" class="form-control" name="" id="" placeholder="Contact Number"> 
                    </div>        
                    <div class="form-group col-6">
                      <label for="">Country</label>
                      <select class="form-control " name="scountry" id="ocountry">
                        <option selected="" disabled="">Select Country</option> 
                        @foreach ($country as $item)                              
                          <option value={{$item->id}}> {{$item->name}}</option>
                        @endforeach
                      </select>
                        {{-- <input type="text" class="form-control" name="scountry" id="" placeholder="Country"> --}}
                    </div>
                      <div class="form-group col-4">
                          <label for="">City</label>
                          <select class="form-control " name="scity" id="city" placeholder="City"> </select>
                      </div>  
                </div> 

              </div>              
              <!-- /.card-body -->
             <!-- button -->
          </div>
          <!-- /.card --> 
        </div>

      <!-- Consignee -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Consignee Details</h3>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="form-group col-6">
                    <label for="">Consignee</label>
                    <input type="text" class="form-control" name="consignee" id="" placeholder="Consignee Name"> 
                </div>               
                <div class="form-group col-6">
                  <label for="">Email Address</label>
                  <input type="text" class="form-control" name="remail" id="" placeholder="Email Address"> 
              </div>
                <div class="form-group col-12">
                    <label for="">Address</label>
                    <input type="text" class="form-control" name="raddress" id="" placeholder="Address">
                </div>
                <div class="form-group col-6">
                  <label for="">Contact Number</label>
                  <input type="text" class="form-control" name="rnumber" id="" placeholder="Contact Number"> 
              </div>
                <div class="form-group col-6">
                    <label for="">Zipcode</label>
                    <input type="text" class="form-control" name="rzipcode" id="" placeholder="Zipcode">
                </div>
                <div class="form-group col-4">
                    <label for="">Country</label>
                    <select class="form-control" name="rcountry" id="dcountry" >
                      <option selected="" disabled="">Select Country</option> 
                      @foreach ($country as $item)
                        <option value="{{$item->id}}">{{$item->name}}</option>                          
                      @endforeach
                    </select>
                    {{-- <input type="text" class="form-control" name="rcountry" id="" placeholder="Country"> --}}
                </div>
                <div class="form-group col-4">
                    <label for="">City</label>
                    <select  class="form-control" name="rcity" id="dcity" placeholder="City"> </select>
                </div>              
              </div> 
            </div> 
          </div> 
        </div> 
    <!-- End Consignee -->        
<!-- Shipment Details -->
<div class="col-md-12">
  <!-- general form elements -->
  <div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Shipment Detail</h3>
    </div>
    <div class="card-body">
      <div class="row">
        <div class="form-group col-2">
            <label for="">Date Shipping</label>
            <input type="date" class="form-control" name="date_ship" id="" placeholder="Shipping Date"> 
        </div> 
        <div class="form-group col-3">
          <label for="">Packaging Type</label>
            <select class="form-control" name="pack_type" id="" >
              <option selected="" disabled="">Select Package Type</option> 
              @foreach ($package as $item)
                <option value="{{$item->id}}">{{$item->name}}</option>                          
              @endforeach
            </select>
          {{-- <input type="text" class="form-control" name="pack_type" id="" placeholder="Packaging Type">  --}}
        </div> 
        <div class="form-group col-3">
          <label for="">Shipping Mode</label>
          <select class="form-control" name="pack_type" id="" >
            <option selected="" disabled="">Select Ship mode</option> 
            @foreach ($shipmode as $item)
              <option value="{{$item->id}}">{{$item->name}}</option>                          
            @endforeach
          </select>
          {{-- <input type="text" class="form-control" name="ship_mode" id="" placeholder="Shipping Mode">  --}}
        </div> 
        <div class="form-group col-3">
          <label for="">Shipment Status</label>
          <select class="form-control" name="pack_type" id="" >
            <option selected="" disabled="">Select Status</option> 
            @foreach ($status as $item)
              <option value="{{$item->id}}">{{$item->name}}</option>                          
            @endforeach
          </select>
          {{-- <input type="text" class="form-control" name="ship_status" id="" placeholder="Shipment Status">  --}}
        </div>
      </div>
      <div class="row">
        <div class="form-group col-3">
          <label for="">Courier Company</label>
          <input type="text" class="form-control" name="courier" id="" placeholder="Courier Company"> 
        </div>
        <div class="form-group col-3">
          <label for="">Payment Mode</label>
          <input type="text" class="form-control" name="pay_mode" id="" placeholder="Payment Mode"> 
        </div>
        <div class="form-group col-3">
          <label for="">Custom Value</label>
          <input type="text" class="form-control" name="c_value" id="" placeholder="Custom Value"> 
        </div>
      </div>
    </div>
  </div>
</div>


    <div class="card-footer">
      <button type="submit" class="btn btn-primary">Save</button>
    </div>
  </form> 
      </div> 
      <!-- /.row -->  
    </div><!-- /.container-fluid -->
  </section>
 

	<section class="content">
    <div class="container-fluid">
      <div class="row">
    <div class="col-md-12">
       <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Package Details</h3>
         </div>
        <!-- <form role="form"> -->
        <div class="card-body">
          <div class="row">
            <!-- /.card-header -->
            <div id="item-x" class="card-body p-0 col-md-12" >
              <table class="table table-sm">
                <thead>
                  <tr>
                    <th style="width: 30%;" class='text-center'><b>Description</b></th>
                    <th class='text-center'><b>Quantity	</b></th>
                    <th class='text-center'><b>Weight (kg)</b></th>
                    <th class='text-center'><b>Length (cm)</b></th>
                    <th class='text-center'><b>Width (cm)</b></th>
                    <th class='text-center'><b>Height (cm)</b></th>
                    <th style="width: 10%;" class='text-center'><b>Weight vol. (kg)</b></th>
                    <th class='text-center'>Action</th>										 
                  </tr>
                </thead>
                <tbody class='items'> 
                <tr>
                  <td><input type="text" class="form-control" name="descrip[]"
                    placeholder="Description"
                    id='descr-0'>
                  </td>
                  <td><input type="text" class="form-control req amnt" name="qty[]"
                    id="qty-0"   onkeypress="return isNumber(event)"
                    onkeyup="rowTotal('0')" 
                    {{-- onkeypress="return isNumber(event)"
                    onkeyup="rowTotal('0'), billUpyog()" --}}
                    autocomplete="off" value="1"><input type="hidden" id="alert-0"
                                                        value=""
                                                        name="alert[]"></td>
                  <td><input type="text" class="form-control req amnt" name="weight[]"
                    id="wt-0"    onkeypress="return isNumber(event)" onkeyup="rowTotal('0')"
                    autocomplete="off" value="1"><input type="hidden" id="alert-0"
                                                        value=""
                                                        name="alert[]"></td>
                  <td><input type="text" class="form-control req amnt" name="length[]"
                    id="length-0"   onkeypress="return isNumber(event)"  onkeyup="rowTotal('0')"
                    autocomplete="off" value="1"><input type="hidden" id="alert-0"
                                                        value=""
                                                        name="alert[]"></td>
                  <td><input type="text" class="form-control req amnt" name="width[]"
                    id="width-0"  onkeypress="return isNumber(event)"   onkeyup="rowTotal('0')"
                    autocomplete="off" value="1"><input type="hidden" id="alert-0"
                                                        value=""
                                                        name="alert[]"></td>
                  <td><input type="text" class="form-control req amnt" name="height[]"
                    id="height-0"   onkeypress="return isNumber(event)"  onkeyup="rowTotal('0')"
                    autocomplete="off" value="1"><input type="hidden" id="alert-0"
                                                        value=""
                                                        name="alert[]"></td>   
                  <td>
                    <span class='ttlText' id="result-0">0</span>
                  </td>
                  <td class="text-center">

                  </td>
                </tr> 
            
             
                <tr class="last-item-row ">
                  <td class="add-row">
                      <button type="button" class="btn btn-primary" aria-label="Left Align"
                              id="addbox">
                          <i class="fa fa-plus-square"></i> Add boxes
                      </button>
                  </td>
                  <td colspan="7"></td>
              </tr>

                </tbody>
              </table>
            </div>
            </div>
         </div>
          
      </div>
       </div>
    </div>
   </div>
</section>
 

@endsection 

@section('js_script')
 
<script>

  
 

  $('#addbox').on('click', function () {
    var cvalue = parseInt($('#oros').val()) + 1;
    var nxt = parseInt(cvalue);
    $('#oros').val(nxt);
    
    var functionNum = "'" + cvalue + "'";
    count = $('#item-x div').length;
    //product row
    var data = '<tr><td><input type="text" class="form-control" name="descrip[]" placeholder="Enter Descriptions" id="descr-' + cvalue + '"> </td><td><input type="text" class="form-control req amnt" name="qty[]" onkeyup="rowTotal(' + functionNum + ')" id="qty-' + cvalue + ' autocomplete="off" value="0" > <td><input type="text" class="form-control req amnt" name="weight[]"   onkeyup="rowTotal(' + functionNum + ')" id="weight-' + cvalue + ' autocomplete="off" value="1"><td><input type="text" class="form-control req amnt" name="length[]"   onkeyup="rowTotal(' + functionNum + ')" id="length-' + cvalue + ' autocomplete="off" value="1"> <td class="text-center"><button type="button" data-rowid="' + cvalue + '" class="btn btn-danger removeProd" title="Remove" > <i class="fa fa-minus-square"></i> </button> </td>    </td></tr>';

    //ajax request
    
    $('tr.last-item-row').before(data);
    row = cvalue;

    $('#productname-' + cvalue).autocomplete({
        source: function (request, response) {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')  
                }
            });
            $.ajax({
                url: baseurl + 'products/search/' + billtype,
                dataType: "json",
                method: 'post',
                data: 'keyword=' + request.term + '&type=product_list&row_num=' + row + '&wid=' + $("#s_warehouses option:selected").val() + '&serial_mode=' + $("#serial_mode:checked").val(),
                success: function (data) {
                    response($.map(data, function (item) {
                        return {
                            label: item.name,
                            value: item.name,
                            data: item
                        };
                    }));
                }
            });
        },
        autoFocus: true,
        minLength: 0,
        select: function (event, ui) {
            id_arr = $(this).attr('id');
            id = id_arr.split("-");
            var t_r = ui.item.data.taxrate;
            var custom = accounting.unformat($("#taxFormat option:selected").val(), accounting.settings.number.decimal);
            if (custom > 0) {
                t_r = custom;
            }
            var discount = ui.item.data.disrate;
            var dup;
            var custom_discount = $('#custom_discount').val();
            if (custom_discount > 0) discount = deciFormat(custom_discount);
            $('.pdIn').each(function () {
                if ($(this).val() == ui.item.data.id) dup = true;
            });
            if (dup) {
                alert('Already Exists!!');
                return;
            }
            $('#amount-' + id[1]).val(1);
            $('#price-' + id[1]).val(accounting.formatNumber(ui.item.data.price));
            $('#pid-' + id[1]).val(ui.item.data.id);
            $('#vat-' + id[1]).val(accounting.formatNumber(t_r));
            $('#discount-' + id[1]).val(accounting.formatNumber(discount));
            $('#dpid-' + id[1]).val(ui.item.data.product_des);
            $('#unit-' + id[1]).val(ui.item.data.unit).attr('attr-org', ui.item.data.unit);
            $('#hsn-' + id[1]).val(ui.item.data.code);
            $('#alert-' + id[1]).val(ui.item.data.alert);
            $('#serial-' + id[1]).val(ui.item.data.serial);

            rowTotal(cvalue);
            billUpyog();
            if (typeof unit_load === "function") {
                unit_load();
                $('.unit').show();
            }
        },
        create: function (e) {
            $(this).prev('.ui-helper-hidden-accessible').remove();
        }
    });

});




$('#item-x').on('click', '.removeProd', function () {

var pidd = $(this).closest('tr').find('.pdIn').val();
var retain = $(this).closest('tr').attr('data-re');

var pqty = $(this).closest('tr').find('.amnt').val();
pqty = pidd + '-' + pqty;
if (retain) {
    $('<input>').attr({
        type: 'hidden',
        id: 'restock',
        name: 'restock[]',
        value: pqty
    }).appendTo('form');
}
$(this).closest('tr').remove();
$('#d' + $(this).closest('tr').find('.pdIn').attr('id')).closest('tr').remove();
$('.amnt').each(function (index) {
    rowTotal(index);
   // billUpyog();
});


return false;
});

var rowTotal = function (numb) {
    //most res
    var result;
    var length = $("length-" + numb).val();
    var width = $("width-" + numb).val();
    var height = $("height-" + numb).val();

    result = length * width * height / 5000;

  console.log('a');

  // $("#result-" + numb).html(accounting.formatNumber(totalValue));
}

</script>
    
@endsection
@extends('layouts.header')

@section('content')

<!-- section header-->
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Shipment Form</h1>            
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
                    <div class="flex-column flex-root col-6">
                        <span class=" badge badge-primary right"> Shipment From </span>                                 
                        <span class="brand-text"> {{$data->sender->customer_name}} </span>
                    {{-- <input type="text" class="form-control" name="shipper" value="{{$data->sender->customer_name}}" id="" placeholder="" readonly>  --}}
                        <span class=" badge badge-primary right"> Shipment From </span>            
                    </div>
                    <div class="form-group col-6">
                      <label for="">Email Adress</label>
                      <input type="text" class="form-control" name="semail" value="{{$data->shipper_email}}" placeholder="Email Address" readonly> 
                    </div>  
                    <div class="form-group col-12">
                        <label for="">Address</label>
                        <input type="text" class="form-control" name="saddress" value="{{$data->shipper_addrs}}"  placeholder="Address" readonly>
                     
                    </div>
                    <div class="form-group col-4">
                        <label for="">Contact Number</label>
                        <input type="text" class="form-control" name="snumber"  value="{{$data->shipper_contact}}" id="contact" placeholder="Contact Number" readonly> 
                       
                    </div> 
                    <div class="form-group col-3"  >
                      <label for="">Zip Code</label>
                      <input type="text" class="form-control" name="szipcode" id="zipcode" placeholder="Zip Code" readonly> 
                    </div>
                    <div class="form-group col-3" style="display:none">
                      <label for="">Contact Number</label>
                      <input type="text" class="form-control" name="" id="" placeholder="Contact Number" readonly> 
                    </div>        
                    <div class="form-group col-6">
                      <label for="">Country</label>    
                      <input type="text" class="form-control" name="scountry" value="{{$data->country->name}}"  id="country" placeholder="Country" readonly>
                    </div>
                      <div class="form-group col-4">
                          <label for="">City</label>                     
                          <input type="text" class="form-control" name="scity" value="{{$data->city->name}}" id="" placeholder="City" readonly>
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
                    <input type="text" class="form-control" name="consignee"  value="{{$data->receiver->customer_name}}" id="" placeholder="Consignee Name" readonly> 
                </div>               
                <div class="form-group col-6">
                  <label for="">Email Address</label>
                  <input type="text" class="form-control" name="remail" value="{{$data->consignee_email}}" id="cemail" placeholder="Email Address" readonly> 
                  {{-- <input type="text" class="form-control" name="rcode" id="ccustomercode" style="display"> --}}
              </div>
                <div class="form-group col-12">
                    <label for="">Address</label>
                    <input type="text" class="form-control" name="raddress" value="{{$data->consignee_addrs}}" id="caddress" placeholder="Address" readonly>
              
                </div>
                <div class="form-group col-6">
                  <label for="">Contact Number</label>
                  <input type="text" class="form-control" name="rnumber" id="ccontact" placeholder="Contact Number" readonly> 
                  @if ($errors->has('rnumber'))
                  <div class="error alert-danger ">
                    The contact number field is required.  
                    {{-- {{ $errors->first('fname') }}  --}}
                  </div>
                  @endif
              </div>
                <div class="form-group col-6">
                    <label for="">Zipcode</label>
                    <input type="text" class="form-control" name="rzipcode" id="czipcode" placeholder="Zipcode" readonly>
                </div>
                <div class="form-group col-4">
                    <label for="">Country</label>            
                    <input type="text" class="form-control" name="rcountry" value="{{$data->dest_country->name}}" id="" placeholder="Country" readonly>
                </div>
                <div class="form-group col-4">
                    <label for="">City</label>
                    <input type="text" class="form-control" name="rcity" value="{{$data->dest_city->name}}" id="" placeholder="City" readonly>                 
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
            <input type="date" class="form-control" name="date_ship" id="" value="{{$data->date_ship}}" placeholder="Shipping Date"> 
        </div> 
        <div class="form-group col-3">
          <label for="">Packaging Type</label>           
          {{-- <input type="text" class="form-control" name="pack_type" id="" placeholder="Packaging Type">  --}}
        </div> 
        <div class="form-group col-3">
          <label for="">Shipping Mode</label>
        
          {{-- <input type="text" class="form-control" name="ship_mode" id="" placeholder="Shipping Mode">  --}}
        </div> 
        <div class="form-group col-3">
          <label for="">Shipment Status</label> 
          
          {{-- <input type="text" class="form-control" name="ship_status" id="" placeholder="Shipment Status">  --}}
        </div>
      </div>
      <div class="row">
        <div class="form-group col-2">
          <label for="">Courier Company</label>
        
          {{-- <input type="text" class="form-control" name="courier" id="" placeholder="Courier Company">  --}}
        </div>
        <div class="form-group col-2">
          <label for="">Payment Mode</label>        
          {{-- <input type="text" class="form-control" name="pay_mode" id="" placeholder="Payment Mode">  --}}
        </div>
        <div class="form-group col-2">
          <label for="">Custom Value ($)</label>
          <input type="text" class="form-control" name="c_value" id="" placeholder="Custom Value"> 
        </div>
        <div class="form-group col-2">
          <label for="">Chargeable Weight (kg)</label>
          <input type="text" class="form-control" name="cweight" id="total_result"  step="0.01" placeholder="Chargeable Weight" readonly> 
        </div>     
        <div class="form-group">           
          <label for=""class="text-green">  . </label>
          <input type="text" class="form-control" value="PL" id=""  size="1" readonly="">   
        </div>   
        <div class="form-group">           
          <label for="">Tracking </label>
          <input type="text" class="form-control" name="rcode" id="ccustomercode"  size="5" readonly="">   
        </div>
        <div class="form-group">           
          <label for="">AWB</label>
          <input type="text" class="form-control" name="tracking" value="{{$data}}" size="10" readonly="">      
        </div>      
      </div>
    </div>
  </div>
</div>


 

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
                  <td><input type="text" class="form-control" name="descrip"
                    placeholder="Description"
                    id='descr-0'>
                  </td>
                  <td><input type="number" class="form-control" name="qty"  id=""               
                    autocomplete="off" value="1" min="0"></td>
                  <td><input type="number" class="form-control"  step="0.01" name="weight" id="weight"
                    onKeyUp="suma();" value="1" min="0"> </td>
                  <td><input type="number" class="form-control req amnt" name="length"
                     onKeyUp="suma();" id="length"
                    autocomplete="off" value="1" min="0"> </td>
                  <td><input type="number" class="form-control req amnt" name="width"
                      onKeyUp="suma();" id="width"
                    autocomplete="off" value="1" min="0"> </td>
                  <td><input type="number" class="form-control req amnt" name="height"
                    id="height"   onKeyUp="suma();"
                    autocomplete="off" value="1" min="0"> </td>   
                  <td>
                    <input type="number" class="form-control" name="vweight" 
                    id="vweight"  step="0.01" min="0" readonly > 
                    {{-- <span class='ttlText' id="total_result"></span> --}}
                  </td>
                  <td class="text-center">
                  </td>
                </tr>            
             
                <tr class="last-item-row ">     
                  <td colspan="9"></td>
              </tr>
                </tbody>
              </table>
            </div>
            </div>
         </div>          
      </div>
   </div>

 
   <div class="container-fluid  text-right" >
    <button type="submit" class="btn btn-primary">Generate</button>
    <a href="{{route('courier.index')}}" class="btn btn-info">Return Dashboard</a>
  </div>
</form> 
    </div> 
    <!-- /.row -->  
  </div><!-- /.container-fluid -->
</section>
@endsection 

@section('js_script')

<script type="text/javascript">
   function suma(){
    setTimeout(function() {

      var length = document.getElementById("length");
      var width = document.getElementById("width");
      var height = document.getElementById("height");
      var weight = document.getElementById("weight");

      var pound_weight_price = 5000.00;
      var input = document.getElementById("total_result");
      var vweight = document.getElementById("vweight");

      var lxwxh  = (length.value * width.value * height.value);
      var total_metric = lxwxh  / pound_weight_price; 	//	<!--Volumetric weight result-->
      var total_weight =  weight.value; 	

      total_metric1 = parseFloat(total_metric);

      var calculate_weight;
				if (total_weight > total_metric1) {
					calculate_weight = total_weight;
				} else {
					calculate_weight = total_metric1;
				}				
        total_result = parseFloat(calculate_weight);	
        console.log(total_result);

        vweight.value = total_metric1;
        input.value = total_result;
      }, 500);
    }
   

    
</script>

 
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
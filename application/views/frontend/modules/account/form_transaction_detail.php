<div class='my-bg-title'>
	<div class="container">
		<div class="row">
		  <div class="col-sm-12">

			<i class="fa fa-angle-right" aria-hidden="true"></i> Detail Pesanan

		  </div>
		</div>
	</div>
</div>

<div class="container">
    
   
    
    
	<div class="row">
		<div class="col-sm-3">
			<?php $this->load->view('frontend/modules/account/sidebar_menu'); ?>
		</div>
		<div class="col-sm-9">
			<p><?php echo anchor('account/riwayatStatusPesanan', '<i class="fa fa-arrow-circle-left" aria-hidden="true"></i> Kembali');?></p>
		
			<div class="panel panel-default">
				<input type="hidden" id="idAdd" name="idAdd" value="<?php echo $this->uri->segment(3);?>" />
				<div class="panel-body">
                                    <div class="transactionlist">
        	<div id="test"></div>
                                    </div
>                                  
                                    
                                      <input type="hidden" id="idTrans" name="idTrans" value="<?php echo $this->uri->segment(3);?>" />
                 
                   
         
				</div>
			</div>

		</div>

	</div>
</div>

<script type="text/javascript">
var link_url = '<?php echo base_url('account/editBukuAlamat') ?>';
        var namaBank = null;
        var pMethod = null;
        var billId = null;
        var idDistriship = null;
        var qty = 0;
        var totalBelanja = 0;
        var subtotal = 0;
        var fee = 0;
        //var idDistrict = null;
  /*     
        function get_method(){
        $("#payment_method").slideDown();
        $("#payment_method").prop('disabled', true).html('<option value="">--pilih--</option>');
        $.get(api_base_url+"/payment/method", function(r){
          r.forEach(function(o){
            $("#payment_method").append("<option value='"+o.value+"'>"+o.name+"</option>");
          });
          $("#payment_method").prop('disabled', false);
        }, "json" );
      }
      */
	$(document).ready(function()
	{
		var token = document.cookie.split('x-auth=')[1].split(';').shift();
		var filter =0;
		var idTrans = $('#idTrans').val();
   var api_method= api_base_url+'/transaction/list?id='+idTrans;
         	function currencyFormat (num) {
    return "Rp." + num.toFixed(2).replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1,")
}
function formatNumber (num) {
    return num.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1.")
}      
		
          $.ajax({
        type: "GET",
        url:api_method,
        headers:{"token":token}, 
        dataType: "json",
        success: function (data) {
        		console.log('asd',data.code);
        		console.log('token1',data.code.items);
        		console.log('lol',data.items[0]['name'])
        		$('#test').append(
        			'<table class="table table-striped"><thead><tr><th>Nama Barang</th><th>Invoice Number</th><th>Order Number</th><th>Payment Method</th><th>Image</th><th>Jumlah Harga</th></tr></thead><tbody><tr><td>'+data.items[0]['name']+'</td><td>'+data.invoiceNumber+'</td><td>'+data.orderNumber+'</td><td>'+data.paymentMethod+'</td><td><img class="group list-group-image" src="'+data.items[0]['imageurl']+'" alt="..." style:border="0" height="100"></td><td>Rp.'+(formatNumber(data.grandTotal))+'</td></tr></tbody></table>'
        			// '<h1>'+data.code+'</h1>',
        			// '<h1>'+data.invoiceNumber+'</h1>',
        			// '<h1>'+data.items[0]['name']+'</h1>',
        			// '<img class="group list-group-image" src="'+data.items[0]['imageurl']+'" alt="..." style:border="0" height="100">',
        			// 	''+(currencyFormat(data.grandTotal))+'',

        			// 	'<img class="group list-group-image" src="'+data.imageurl+'" alt="..." style:border="0" height="100">'
        			)
            console.log('sam',data);
           data.forEach(function(p){
       
           	transactionlist.append

      (

'<div class="well"> Tanggal Order: '+tanggal+'</br> Order ID:'+data.orderNumber+'</br> Status Pesanan: <b>'+data.transactionStatus+'</b></br> Alamat Pengiriman: '+data.items[0]['shipmentAddress']+'</div>')

               var div_data="<option value="+data.value+">"+data.name+"</option>";
               $(div_data).appendTo('#payment_method'); 
           });
            }
      });
    
          
          var apiGet= api_base_url+'/aduser/getaddress?token='+token+'&addresstype=isshipto';


	$("form").submit(function(e){
//           
        var data = {};
		e.preventDefault();
    //var data = $(this).serialize(); freightAmt
   // var token = document.cookie.split('x-auth=')[1].split(';').shift();
   
               
		var apiurl = api_base_url + '/order/checkout?token='+token;
		//var a =shipingFee();
		var total = parseInt(subtotal + fee);
		//console.log('shipping:', fee);
		//console.log('sub nya adalah:', subtotal);
		//console.log('total nya adalah:', total);
			data.grandtotal = total;
			data.paymentMethod = pMethod;//c Ato R
			data.code = namaBank;
			data.billing_address_id = billId;
			data.shipping_address_id = idAddShip;
			//data.courier_id = address_name;
			data.isoncepickup = "Y";
		//    console.log('OK:', data);
		//   code
			data.courier ="JNE";
			data.courier_amount= fee;
    

    // success handling
	var error = function(er){
	  $('#spinner_img').hide();
	  $('#submit_btn').val('Kirim').removeClass('disabled');
	  console.log('OK:', er);
	  $.alert({
		title: 'Alert!',
		content: 'koneksi tidak berhasil, silahkan coba lagi!',
	  });
	};
    var success = function(r){ 
         $('#spinner_img').hide();
  $('#submit_btn').val('Kirim').removeClass('disabled');
         $.alert({
     title: 'Alert!',
     content: 'Transaksi Baru Berhasil',
    });
//      alert(r.message);
//      console.log('OK:', r.status);
	window.location.replace(base_url+"/checkout/success");

    };
    $('#spinner_img').show();
    $('#submit_btn').val('loading...').addClass('disabled');
    $.ajax({ type:"POST", contentType: "application/json", data:JSON.stringify(data), dataType: "json", url: apiurl, success: success, error:error, timeout: 30000 });

    // do validation
  
  });

	});


	$("#payment_method").change(function()
	{
		var pay=$('#payment_method').val();
                pMethod = 'Transfer';
		if(pay=="01"){
			$("#transfer_bank").show();
		}else{
			$("#transfer_bank").hide();
		}
	});
	
	function bank(){
		 namaBank = $('input[name="bank"]:checked').val();
		//alert(namaBank);
	}
   
	function idBilling(idBill){
		billId =idBill.toString();
		//alert('test',billId.val());
		return  billId;
	}
	function shipingFee(idDistriship)
	{
		 
		$.get(api_base_url+'/freight/rates/jne?to_district_id='+idDistriship,
		function(shipingFee){
		   fee = shipingFee.freightAmt;
			 //alert('shipping Fee:',shipingFee);
			
		});	
	}
       
</script>

</script>

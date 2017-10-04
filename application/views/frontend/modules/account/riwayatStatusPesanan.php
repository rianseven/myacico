<div class='my-bg-title'>
	<div class="container">
		<div class="row">
		  <div class="col-sm-12">

			<i class="fa fa-angle-right" aria-hidden="true"></i> RIWAYAT PESANAN

		  </div>
		</div>
	</div>
</div>
<div class="container">

	<div class="row">
		<div class="col-sm-3">
			<?php $this->load->view('frontend/modules/account/sidebar_menu'); ?>
		</div>
		<div class="col-sm-8">
			<table class="table table-striped">
			<thead>
			  <tr>
				<th>Tanggal Order</th>
				<th>Total Pembayaran</th>
				<th>Metode Pembayaran</th>
				<th>Nomor Pesanan</th>
				<th>Status</th>
				<th>Detail</th>
				<th>Konfirmasi</th>
			  </tr>
			</thead>
			 <tbody class='listOrder'>

			</tbody>
		  </table>
		</div>
	</div>
</div>
<script type="text/javascript">


$(document).ready(function() {
	


 var token = document.cookie.split('x-auth=')[1].split(';').shift();
 var filter =0;

 $.get(api_base_url+'/transaction/list?token='+token,
 function(data){
 console.log('data nya adalah:', token);

	var addressname = $('.addressname');
	var listOrder = $('.listOrder');
	if(data.length == 0) return box.append('<p>Data tidak ditemukan</p>');
	if(data.length == 0) { $('#biling-empty').show();  }else{ $('#biling-ready').show(); }

	data.forEach(function(p){
	listOrder.append(

	'<tr><td>'+p.waktuTransaksi+'</td><td>'+p.grandTotal+'</td><td>'+p.paymentMethod+'</td><td>'+p.orderNumber+'</td><td>'+p.transactionStatus+'</td><td><button type="button" class="btn btn-info">Detail</button></td><td><button type="button" class="btn btn-warning">Konfirmasi</button></td></tr>'
	)
	mybutton.append(
	'<div class="my-btn-general"><a href="'+base_url+'account/formBilling/'+p.id+'" class="my-link-general">Ubah</a></div>'
	)
	});


	});
});

</script>

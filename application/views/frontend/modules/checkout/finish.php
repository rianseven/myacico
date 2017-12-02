<style>
.table>tbody>tr>td, .table>tfoot>tr>td{
    vertical-align: middle;
}
@media screen and (max-width: 600px) {
    table#cart tbody td .form-control{
		width:20%;
		display: inline !important;
	}
	.actions .btn{
		width:36%;
		margin:1.5em 0;
	}
a
	.actions .btn-info{
		float:left;
	}
	.actions .btn-danger{
		float:right;
	}

	table#cart thead { display: none; }
	table#cart tbody td { display: block; padding: .6rem; min-width:320px;}
	table#cart tbody tr td:first-child { background: #333; color: #fff; }
	table#cart tbody td:before {
		content: attr(data-th); font-weight: bold;
		display: inline-block; width: 8rem;
	}

	table#cart tfoot td{display:block; }
	table#cart tfoot td .btn{display:block;}

}
</style>


<div class="container">

  <br><p align='center'><img src="<?php echo base_url('images/general/step3.jpg'); ?>" border="0"></p>
    <div style='border-top:2px solid #e4322b; padding-top:10px; font-size:20px; width:1200px;margin-bottom:40px;'>TERIMA KASIH</div>


  <!-- <br>
	<h3>TERIMA KASIH</h3> -->

	<p>Order Anda telah berhasil diproses. Silakan lakukan pembayaran sesuai dengan nilai transaksi Anda. Untuk melakukan konfirmasi pembayaran <?php echo anchor('account/riwayatStatusPesanan', '<b>klik disini</b>');?>.</p>



	<div class="row">
	  <div class="col-sm-6">
		<div class="panel panel-default">
		  <div class="panel-heading"><b><?php echo $lang_no_order;?></b></div>
		  <div class="panel-body">
		  <form class="form-horizontal">
		  <div class="form-group">
			<label class="control-label col-sm-4" for="email"><?php echo $lang_no_order;?></label>
			<div class="col-sm-8">
			  <p class="form-control-static"><?php echo $field->orderNumber; ?></p>
			</div>
		  </div>
		  <div class="form-group">
			<label class="control-label col-sm-4" for="email"><?php echo $lang_no_invoice;?></label>
			<div class="col-sm-8">
			  <p class="form-control-static"><?php echo $field->invoiceNumber; ?></p>
			</div>
		  </div>
		  <div class="form-group">
			<label class="control-label col-sm-4" for="email"><?php echo $lang_payment_method;?></label>
			<div class="col-sm-8">
			  <p class="form-control-static"><?php echo $field->paymentMethod; ?></p>
			</div>
		  </div>
		  <div class="form-group">
			<label class="control-label col-sm-4" for="email"><?php echo $lang_transaction_status;?></label>
			<div class="col-sm-8">
			  <p class="form-control-static"><?php echo $field->paymentMethod; if($field->paymentMethod=='Bank Transfer'){
				 echo"<br><i>".$field->accountNameTo;
				 echo"<br>".$field->accountNumberTo;
				 echo"<br>".$field->bankNameTo."</i>";
				  }?></p>
			</div>
		  </div>
		  <div class="form-group">
			<label class="control-label col-sm-4" for="email"><?php echo $lang_transaction_status;?></label>
			<div class="col-sm-8">
			  <p class="form-control-static"><?php echo $field->transactionStatus; ?></p>
			</div>
		  </div>
		   <div class="form-group">
			<label class="control-label col-sm-4" for="email"><?php echo $lang_transaction_date;?></label>
			<div class="col-sm-8">
			  <p class="form-control-static"><?php
			  echo tanggal_time($field->waktuTransaksi);
			 // $tgl = explode(" ",$field->waktuTransaksi);
			 // echo tanggal($tgl[0]); echo",".;?> </p>
			</div>
		  </div>
		  </form>
		  </div>
		</div>
	  </div>
	  <div class="col-sm-6">

		<div class="panel panel-default">
		  <div class="panel-heading"><b><?php echo $lang_sender_checkout;?></b></div>
		  <div class="panel-body"><b><?php echo $field->billing_name; ?></b>,<br><?php echo $field->billing_address; ?></div>
		</div>

		<div class="panel panel-default">
		  <div class="panel-heading"><b><?php echo $lang_reciever_checkout;?></b></div>
		  <div class="panel-body"><b><?php echo $field->shipping_name; ?></b>,<br><?php echo $field->shipping_address; ?></div>
		</div>


		<div class="panel panel-default">
		  <div class="panel-heading"><b><?php echo $lang_cart_detail;?></b></div>
		  <div class="panel-body">

			<table class="table table-hover table-condensed">
				<thead>
					<tr>
						<th style="width:50%">Product</th>
						<th style="width:8%">Qty</th>
						<th style="width:22%" class="text-center">Subtotal</th>
					</tr>
				</thead>
				<tbody>
					<?php
					foreach($field->items as $key => $data):?>
					<tr>
						<td data-th="Product">
							<img src="<?php echo $data->imageurl; ?>" alt="<?php echo $data->name; ?>" class="img-responsive" width='100'/>
						</td>
						<td data-th="Qty" align='center'>
							<span class="badge"><?php echo $data->qty; ?></span>
						</td>
						<td data-th="Subtotal" class="text-center">Rp.<?php echo money($data->subtotal); ?></td>
					</tr>
					<?php
					endforeach; ?>
				</tbody>
			</table>

		  </div>
		</div>
    <div class="panel panel-default">
    <h5>

      <form class="form-horizontal">
      <div class="form-group">
      <label class="control-label col-sm-5" for="email">Ongkos Kirim:</label>
      <div class="col-sm-7">
        <p class="form-control-static">Rp.<?php echo money($field->courier_amount); ?></p>
      </div>
      </div>
     <div class="form-group">
      <label class="control-label col-sm-5" for="email">Total Pembayaran:</label>
      <div class="col-sm-7">
        <p class="form-control-static">Rp.<?php echo money($field->grandTotal); ?></p>
      </div>
      </div>
    </form>
      </h5>
	  </div>
  </div>
	</div>

</div>
<br><br>



<div class='btn-top'>
	<a href="#" id='btnTop'>
		<img src='<?php echo base_url('images/general/btn-top-white.png');?>' border='0' /></a>
</div>
<div class="footer">
	<div class="container" style='margin-bottom:20px;'>
		<center><font size='3'><b><?php echo $lang_f_moto; ?></font></b></center>

		<div style='margin-bottom:20px; margin-top:10px' align="center">
			<div class="footer-box">
				<img src='<?php echo base_url('images/general/f-icon1.png');?>' border='0' />
				<?php echo $lang_f_guarantee1; ?>
			</div>
			<div class="footer-box">
				<img src='<?php echo base_url('images/general/f-icon2.png');?>' border='0' />
				<?php echo $lang_f_guarantee2; ?>
			</div>
			<div class="footer-box">
				<img src='<?php echo base_url('images/general/f-icon3.png');?>' border='0' />
				<?php echo $lang_f_guarantee3; ?>
			</div>
			<div class="footer-box">
				<img src='<?php echo base_url('images/general/f-icon5.png');?>' border='0' />
				<?php echo $lang_f_guarantee4; ?>
			</div>
			<div class="footer-box2">
				<img src='<?php echo base_url('images/general/f-icon4.png');?>'/>
				<?php echo $lang_f_guarantee5; ?>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-3">
				<h3><span><?php echo $lang_f_info; ?></span></h3>
				<?php echo anchor('Pages/AboutUs', $lang_ttangkami, array('class'=>'my-info')); ?><br>

				<a href="http://blog.myACICO.co.id/" class="my-info">Blog myACICO.co.id</a><br/>

				<?php echo anchor('Pages/SyaratDnKetentuan',$lang_Terms, array('class'=>'my-info')); ?><br>
				<?php echo anchor('#',$lang_karier, array('class'=>'my-info')); ?><br>
				<?php echo anchor('Pages/kebijakanPrivasi',$lang_kebj, array('class'=>'my-info')); ?><br>
				<?php echo anchor('Pages/hakCipta',$lang_hakCip, array('class'=>'my-info')); ?>
			</div>
			<div class="col-xs-3">
				<h3><span><?php echo $lang_help; ?></span></h3>
				<?php echo anchor('Pages/faq','FAQ', array('class'=>'my-info')); ?><br>
				<?php echo anchor('Pages/caraBerbelanja',$lang_carabeli, array('class'=>'my-info')); ?><br>
				<?php echo anchor('Pages/Pengembalian',$lang_pengemba, array('class'=>'my-info')); ?><br>
				<?php echo anchor('Pages/Jaminan',$lang_guara, array('class'=>'my-info')); ?><br>
				<?php echo anchor('#',$lang_orde, array('class'=>'my-info')); ?><br>
				<?php echo anchor('Customer/contact',$lang_conta, array('class'=>'my-info')); ?><br>
        <?php echo anchor('Customer/afterSales',$lang_after_sales, array('class'=>'my-info')); ?>
			</div>



			<form name="myForm1" method="post">

			<div class="col-xs-3">
				<h3><span><?php echo $lang_folow; ?></span></h3>
				<div class='sos'>

					<ul>
						<li><a href="https://www.youtube.com/channel/UCT6wkP8xyhEgDZzrbuWBQRg"><i class="fa fa-youtube-square" aria-hidden="true"></i></a></li>
					  <li><a class="active" href="https://www.facebook.com/MyacicoID/?ref=aymt_homepage_panel"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
					  <li><a href="https://twitter.com/myacicoid"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
					  <li><a href="https://www.instagram.com/myacico.id/"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
					</ul>
				</div>
			</div>

      <div class="col-xs-3">
				<h3><span>Email Newsletter</span></h3>
      	<?php echo $lang_belr; ?><br>
				<div class="input-group">
					<input type="hidden" id="isSubscribe" name="isSubscribe" class="my-sub-field" name="x" value="Y">
					<input type="text" id="email1" name="email1" class="my-sub-field" name="x" placeholder="Email...">
					<span class="input-group-btn">
							<input type="button" id="submit_btn1" class="btn btn-default my-sub-button" value="<?php echo "Daftar"?>">
						<!-- <button class="btn btn-default my-sub-button" onClick="javascript:window.location.href='http://localhost/myacicoweb/myacicoweb/subscribe'">SUBSCRIBE</button> -->
					</span>
				</div>
			</div>
			</form>
		</div>
		<br>
		<div class="row">
			<div class="col-xs-5">
				<h3><span><?php echo $lang_pay; ?></span></h3>
				<div class='pay'>
					<ul>
					  <li style='margin-right:5px;margin-bottom:5px'><img src='<?php echo base_url('images/general/p-visa-small.jpg');?>' border='0'></li>
					  <li style='margin-right:5px; margin-bottom:5px'><img src='<?php echo base_url('images/general/ico_bank_02.png');?>' border='0'></li>
					 	<li style='margin-bottom:5px'><img src='<?php echo base_url('images/general/ico_bank_03.png');?>' border='0'></li>
					</ul>
					<ul>
						<li style='margin-right:5px;margin-bottom:5px'><img src='<?php echo base_url('images/general/ico_bank_04.png');?>' border='0'></li>
					  <li style='margin-right:5px;margin-bottom:5px'><img src='<?php echo base_url('images/general/ico_bank_06.png');?>' border='0'></li>
						<li style='margin-bottom:5px'><img src='<?php echo base_url('images/general/p-bcaklikpay.jpg');?>' border='0'></li>
					</ul>
				</div>
			</div>
			<div class="col-xs-4">
				<h3><span><?php echo $lang_cour ?></span></h3>
				<div class='ship'>
					<ul>
					  <li style='margin-bottom:5px;margin-right:5px;'><img src='<?php echo base_url('images/general/s-myacicocourier.jpg');?>' border='0'></li>
					  <li style='margin-bottom:5px;margin-right:5px;'><img src='<?php echo base_url('images/general/s-ninjaxpress.jpg');?>' border='0'></li>
						<li style='margin-bottom:5px'><img src='<?php echo base_url('images/general/s-jne.jpg');?>' border='0'></li>
					</ul>
				</div>
			</div>
      <div class="col-xs-3">
				<h3><span><?php echo $lang_dunlud; ?></span></h3>
        <div><img src='<?php echo base_url('images/general/app-googleplay.png');?>' border='0'></div>
				<div style='margin-top:8px'><img src='<?php echo base_url('images/general/app-store.png');?>' border='0'></div>
			</div>
		</div>

		<br><br>
		<center>
		<button data-toggle="collapse" data-target="#demo" class='my-btn-brand'><?php echo $lang_sea; ?> <span style='font-size:24px;'><i class="fa fa-angle-double-right" aria-hidden="true"></i></span></button>
		<div id="demo" class="collapse" style='margin-top:20px; text-align:justify; border-radius:5px; padding:20px; color:#111111; '>
			<?php echo $lang_footer_info;?>
		</div>
	</center>

	</div>
	<div class='copyright'>
		Copyright &copy; <?php echo date("Y"); ?> PT. MyAcico Global Indonesia. All Rights Reserved.
	</div>
</div>

</body>

<!-- s: date_picker -->
<script type="text/javascript" src="<?php echo base_url('date_picker/js/bootstrap-datetimepicker.js');?>" charset="UTF-8"></script>
<script type="text/javascript">
 $('.form_date').datetimepicker({
		language:  'id',
		weekStart: 1,
		todayBtn:  1,
		autoclose: 1,
		todayHighlight: 1,
		startView: 2,
		minView: 2,
		forceParse: 0
	});
</script>
<!-- e: date_picker -->

<script type="text/javascript">
var baseApiUrl = '<?php echo $baseApiUrl; ?>';

var apiurl = baseApiUrl + '/newsletter/save/genericsubscribe';

var data = {};
$("#btnTop").click(function() {
     $("html, body").animate({ scrollTop: 0 }, "slow");
     return false;
  });

$(document).ready(function() {
		$('#alertSubmit').show('slow').delay(5000).hide('slow');
	$('.search-panel .dropdown-menu').find('a').click(function(e) {
		e.preventDefault();
		var param = $(this).attr("href").replace("#","");
		var concept = $(this).text();
		$('.search-panel span#search_concept').text(concept);
		$('.input-group #search_param').val(param);
	});
  $('#submit_btn1').on('click', function(e){
    e.preventDefault();
		var isSubscribe =  $("#isSubscribe").val();
		var email1 = $("#email1").val();

		data.isSubscribe = isSubscribe;
    data.email = email1;
		var apiurl = baseApiUrl + '/newsletter/save/genericsubscribe';
		function validateForm() {

}

if(email1==''){
			$.alert({
				title: 'Alert!',
				content: 'Email tidak boleh kosong!',
			});
      return false;
		}
		var x = document.forms["myForm1"]["email1"].value;
		var atpos = x.indexOf("@");
		var dotpos = x.lastIndexOf(".");
		if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {
				alert("Masukan Email Yang Benar");
				return false;
		}



		// comment baru
		    var success = function(r){
      $('#spinner_img').hide();
      $('#submit_btn').val('Kirim').removeClass('disabled');
      	alert(r.message);
				 	if(r.message == "email anda belum terdaftar, silahkan registrasi terlebih dahulu"){
       			return false;
					}else
 						location.reload();
					};

    $('#spinner_img').show();
    $('#submit_btn').val('loading...').addClass('disabled');
    $.ajax({ type:"POST", contentType: "application/json", data:JSON.stringify(data), dataType: "json", url: apiurl, success:success });

  });
  });

</script>

<script>
	function langFunction($data){

		var lang = $data;
		var data = 'lang='+ lang;
		var url = "<?php echo site_url('home/switchLang'); ?>";
		var success = function(html)
		{
			 location.reload();
		}

		$.post( url, data, success);
	}
</script>

<script>
//Buat ngecek jumlah keranjang
$(document).ready(function() {

	totalCart();

});
</script>

</html>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-110142423-2"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-110142423-2');
</script>

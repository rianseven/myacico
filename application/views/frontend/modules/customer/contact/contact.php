<script>
function myMap() {
  var mapCanvas = document.getElementById("map");
  var mapOptions = {
    center: new google.maps.LatLng(51.5, -0.2), zoom: 10
  };
  var map = new google.maps.Map(mapCanvas, mapOptions);
}
</script>
<div class="container">
<iframe id="maps" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.649842298437!2d106.81277131436264!3d-6.17760599552759!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f68061654a55%3A0xaafcf85e4760d02a!2sPT.+Myacico+Global+Indonesia!5e0!3m2!1sen!2sid!4v1496997240232" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen=""></iframe>

<div class='my-bg-title'>
	<div class="container">
		<div class="row">
		  <div class="col-sm-12">

			<i class="fa fa-angle-right" aria-hidden="true"></i> HUBUNGI KAMI

		  </div>
		</div>
	</div>
</div>



	<div class="row">
		<div class="col-sm-4"> <h4 style="color:red;">PT Myacico Global Indonesia</h4><br/>
		<h5> Jl. Kesehatan No 60 O-P,<br/>
		RT 2, RW 4
		Petojo Selatan, Gambir,<br/> Pusat
		Jakarta Pusat 10160</h5>
		</div>
		<div class="col-sm-8">
			<!-- <p>Silakan hubungi kami melalui kolom dibawah ini.</p> -->
        <p> <?php echo $lang_field_ContAtas; ?>

		 <form name="myForm" method="post">
			<div class="form-group">
			<label><?php echo $lang_field_ContNama; ?></label>
			<input type="text" id="name" name="name" class="form-control mandatory" />
			</div>
			<div class="form-group">
			<label><?php echo $lang_field_ContEmail; ?></label>
			<input type="email" id="email" name="email" class="form-control mandatory" />
			</div>
			<div class="form-group">
			<label><?php echo $lang_field_ContKeperluan; ?></label>
			<select id='issue' name='issue' class="form-control mandatory">
				<option value=''>-Pilih-</option>
				<option value='Product Issue'>Product Issue</option>
				<option value='Customer Relation'>Customer Relation</option>
				<option value='Payment Issue'>Payment Issue</option>
				<option value='Returns and Exchange'>Returns and Exchange</option>
				<option value='Becoming a Partner'>Becoming a Partner</option>
				<option value='Others'>Others</option>
			</select>
			</div>
			<div class="form-group">
			<label><?php echo $lang_field_ContMessage;?></label>
			<textarea class="form-control mandatory" rows="5" id="message" name='message'></textarea>
			</div>
			<div class="form-group">
			<?php echo $image;?><br>
			<label for="pwd">Security Code:</label>
			<input type='text' size='15' class="form-control mandatory" name='secutity_code' id='secutity_code'/>
			</div>
			<p>
			<?php echo form_error('secutity_code', '<p class="field_error">', '</p>');?>
			</p>
			<input type="submit" id="submit_btn" class="btn btn-primary" value="<?php echo "Kirim"?>">
			</form>
			<br><br>
		</div>
	</div>

</div>

<script type="text/javascript">
var baseApiUrl = '<?php echo $baseApiUrl; ?>';

var apiurl_comp = baseApiUrl + '/mail/contactus';

var data = {};
$(document).ready(function() {



  $('form').submit(function(e){
    e.preventDefault();
    var name = $("#name").val();
		var email = $("#email").val();
		var issue = $("#issue").val();
    	var message = $("#message").val();

      var captcha = <?php echo  strtolower($this->session->userdata('mycaptcha'));?>;
      var secutity_code = $("#secutity_code").val();

		data.name = name;
    data.email = email;
    data.issue = issue;
      data.message = message;

      if(name ===''){
        $.alert({title:'Alert', content: ' Nama tidak boleh kosong'});
        $('#spinner_img').hide();
        $('#submit_btn').val('Kirim').removeClass('disabled');
        $('.mandatory').prop('disabled', false);
        return false;
      }
      if(email ===''){
        $.alert({title:'Alert', content: ' Email tidak boleh kosong'});
        $('#spinner_img').hide();
        $('#submit_btn').val('Kirim').removeClass('disabled');
        $('.mandatory').prop('disabled', false);
        return false;
      }
      if(issue ===''){
        $.alert({title:'Alert', content: ' Keperluan tidak boleh kosong'});
        $('#spinner_img').hide();
        $('#submit_btn').val('Kirim').removeClass('disabled');
        $('.mandatory').prop('disabled', false);
        return false;
      }

      if(message ===''){
        $.alert({title:'Alert', content: ' Pesan tidak boleh kosong'});
        $('#spinner_img').hide();
        $('#submit_btn').val('Kirim').removeClass('disabled');
        $('.mandatory').prop('disabled', false);
        return false;
      }
      if(secutity_code != captcha){
        $.alert({title:'Alert', content: ' Security Code yang Anda masukan salah !'});
        $('#spinner_img').hide();
        $('#submit_btn').val('Kirim').removeClass('disabled');
        $('.mandatory').prop('disabled', false);
        return false;
      }

		    var x = document.forms["myForm"]["email"].value;
    var atpos = x.indexOf("@");
    var dotpos = x.lastIndexOf(".");
    if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {
        alert("Email Tidak Benar");
        return false;
    }

		// comment baru

    var success = function(data)
		{

			if(data.status==1){
  
				location.href="<?php echo site_url('customer/messageSent'); ?>";
			}else{
        $.alert({title:'Alert', content: ' pesan gagal dikirim silahkan coba kembali !'});
        $('#spinner_img').hide();
        $('#submit_btn').val('Kirim').removeClass('disabled');
        $('.mandatory').prop('disabled', false);
			}

		}


    $('#spinner_img').show();
    $('#submit_btn').val('loading...').addClass('disabled');
    $.ajax({ type:"POST", contentType: "application/json", data:JSON.stringify(data), dataType: "json", url: apiurl_comp, success:success });

  });

  });


</script>

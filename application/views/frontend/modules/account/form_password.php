<div class="container">
	<div class="row">
	  <div class="col-sm-12">
		<div class="my-border-title">
			<h3 class='my-title-page'><i class="fa fa-dot-circle-o" aria-hidden="true"></i> INFORMASI AKUN</h3>
		</div>
	  </div>
	</div>

	<div class="row">
		<div class="col-sm-3">
			<?php $this->load->view('frontend/modules/account/sidebar_menu'); ?>
		</div>
		<div class="col-sm-9">

			<section class="login_content">
			  <form name="upDate" method="post">

				<div class="form-group">
				  <label>Kata Sandi Saat Ini*</label>
				  <input type="password" name="oldPassword" id="oldPassword" class="form-control mandatory"/>
				</div>
				<div class="form-group">
				  <label>Kata Sandi Baru*</label>
				  <input type="password" name="newPassword" id="newPassword" class="form-control mandatory"/>
				</div>

				<div class="form-group">
				  <label>Konfirmasi Kata Sandi Baru*</label>
				  <input type="password" id="new_password2" class="form-control mandatory"/>
				</div>

				<div class="clearfix"></div>
				<input type="submit" id="submit_btn" class="btn btn-primary" value="<?php echo $btn_pesan_personal?>">

			  </form>
			</section>
		</div>
	</div>
</div>



<script type="text/javascript">
		var baseApiUrl = '<?php echo $baseApiUrl; ?>';



		var error = function(er){
		  $('#spinner_img').hide();
		  $('#submit_btn').val('Kirim').removeClass('disabled');
		  console.log('OK:', er);
		  $.alert({
		    title: 'Alert!',
		    content: 'koneksi tidak berhasil, silahkan coba lagi!',
		  });
		};


		$(document).ready(function() {
			$("form").submit(function(e){
			    e.preventDefault();

				var data = $(this).serialize();
				var oldPassword = $("#oldPassword").val();
				var newPassword = $("#newPassword").val();
				var new_password2 = $("#new_password2").val();
				var token	= document.cookie.split('x-auth=')[1].split(';').shift();
var apiurl = baseApiUrl + '/aduser/changepassword?token='+token;
				if(oldPassword==''){
					$.alert({
						title: 'Alert!',
						content: 'password tidak boleh kosong!',
					});
				}else
				if(newPassword != new_password2){
					$.alert({
						title: 'Alert!',
						content: 'Password tidak sama!',
					});
				}else{
					$('#spinner_img').show();
					$('#submit_btn').val('loading...').addClass('disabled');
					//$.post( apiurl, data, success, "json" );
					$.ajax({ type:"POST", contentType: "application/json", data:JSON.stringify({ "oldPassword":oldPassword,"newPassword":newPassword }) , url: apiurl, success: success, error: error });
				}

			});
		});
</script>
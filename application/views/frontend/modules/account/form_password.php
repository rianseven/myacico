<div class="container">
	<div class='my-bg-title'>
			<i class="fa fa-angle-right" aria-hidden="true"></i> <?php echo $lang_datkun;?>
	</div>

	<div class="row">
		<div class="col-sm-3">
			<?php $this->load->view('frontend/modules/account/sidebar_menu'); ?>
		</div>
		<div class="col-sm-9">
			<p><?php echo anchor('account/informasiAkun', '<i class="fa fa-angle-double-left" aria-hidden="true"></i> '.$lang_avatar_back, array('class'=>'btn-back'));?></p>
			<?php
			$lang = get_cookie('lang');
			if($lang=='en'){?>
				<div class="alert alert-success alert-dismissible animated bounceInDown" id="alert" style='display:none;'>
				<span class="glyphicon glyphicon-ok"></span> Update password success.</div>
			<?php }else{ ?>
				<div class="alert alert-success alert-dismissible animated bounceInDown" id="alert" style='display:none;'>
				<span class="glyphicon glyphicon-ok"></span> Update password sukses.</div>
			<?php } ?>
			<p><?php echo $lang_reset_password1;?></p>
			<section class="login_content">
			  <form name="loginFm" method="post">

				<div class="form-group">
				  <label><?php echo $lang_password_now;?></label>
				  <input type="password" name="oldPassword" id="oldPassword" class="form-control mandatory"/>
				</div>
				<div class="form-group">
				  <label><?php echo $lang_reset_password_txt;?></label>
				  <input type="password" name="newPassword" id="newPassword" class="form-control mandatory"/>
				</div>

				<div class="form-group">
				  <label><?php echo $lang_reset_password_form2;?></label>
				  <input type="password" id="new_password2" class="form-control mandatory"/>
				</div>

				<div class="clearfix"></div>
				<input type="submit" id="submit_btn" class="btn btn-primary" value="Update">

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
		    content: '<?php echo$lang_msg_login3;?>',
		  });
		};


		$(document).ready(function() {
			$("form").submit(function(e){



				var oldPassword = $("#oldPassword").val();
				var newPassword = $("#newPassword").val();
				var new_password2 = $("#new_password2").val();
				var token	= document.cookie.split('x-auth=')[1].split(';').shift();


				if(oldPassword==''){
					$.alert({
						title: 'Alert!',
						content: '<?php echo$lang_msg_pswd1;?>',
					});
				}else if(newPassword==''){
					$.alert({
						title: 'Alert!',
						content: '<?php echo$lang_msg_pswd2;?>',
					});
				}else if(newPassword != new_password2){
					$.alert({
						title: 'Alert!',
						content: '<?php echo$lang_reset_password_msg2;?>',
					});
				}else if(newPassword.length < 7){
                                        $.alert({
                                                title: 'Alert!',
                                                content: '<?php echo $lang_reset_password_msg1;?>',
                                        });
                                }else{
					$('#spinner_img').show();
					$('#submit_btn').val('loading...').addClass('disabled');
					//$.post( apiurl, data, success, "json" );
					e.preventDefault();
var apiurl = baseApiUrl + '/aduser/changepassword?token='+token;
var data = $(this).serialize();
var success = function(r){
	$('#spinner_img').hide();
	$('#submit_btn').val('Passowrd').removeClass('disabled');
	console.log('OK:', r);
	//alert(r.message);

	// $.alert({
	// 	title: 'Alert!',
	// 	content: 'Password berhasil diubah',
	// });

	 document.cookie='x-auth='+r.newToken+'; path='+base_path;
	 $('#alert').show('slow').delay(5000).hide('slow');
};
					$.ajax({ type:"POST", contentType: "application/json", data:JSON.stringify({ "oldPassword":oldPassword,"newPassword":newPassword }) , headers:{"token":token}, url: apiurl, success: success, error: error });
				}

			});
		});
</script>

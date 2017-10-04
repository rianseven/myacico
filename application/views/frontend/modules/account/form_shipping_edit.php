<div class='my-bg-title'>
	<div class="container">
		<div class="row">
			<div class="col-sm-12">

			<i class="fa fa-angle-right" aria-hidden="true"></i> UBAH BUKU ALAMAT

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
			<p><?php echo anchor('account/bukuAlamat', '<i class="fa fa-arrow-circle-left" aria-hidden="true"></i> Kembali');?></p>
			<p>Silakan lengkapi data billing Anda dibawah ini jika anda ingin mengubah alamat Billing.</p>
			<div class="panel panel-default">
				<div class="panel-body">	
				  <form name="signup" method="post">
					<div class="form-group">
					<input type="hidden" id = "name" name="name"  value="<?php echo $user->name;?>" />
                                        <input type="hidden" id = "id" name="id" />
                                          <input type="hidden" id="isbillto" name="isbillto" value="N" />
                                        <input type="hidden" id="isshipto" name="isshipto" value="Y" />
                                        <input type="hidden" id="ispayfrom" name="ispayfrom" value="N" />
                                        <input type="hidden" id="isremitto" name="isremitto" value="N" />
					</div>
                                        <div class="form-group">
					  <label>Disimpan sebagai alamat (contoh: alamat rumah, alamat kantor dll.)*</label>
					  <input type="text" id="address_name" name="address_name" class="form-control mandatory"/>
					</div>
					<div class="form-group">
					  <label><?php echo $lang_addres; ?>*</label>
					  <input type="text" id = "address1"name="address1" class="form-control mandatory"/>
					  <input type="text" id = "address2" name="address2" class="form-control mandatory"/>
					</div>
					<div class="form-group" style="display:none" id="ditric_box">
							<label><?php echo $lang_Keca; ?>*</label>
					  <select name="district_id" id="district_id" class="form-control mandatory"></select>
					</div>
					<div class="form-group" style="display:none" id="city_box">
						<label><?php echo $lang_kota; ?>*</label>
					  <select name="city" id="city_sel" class="form-control mandatory"></select>
					</div>
					<div class="form-group">
					<label><?php echo $lang_PostCode; ?>*</label>
					  <input type="text" id="postal" name="postal" class="form-control mandatory" />
					</div>
                                      <div class="form-group">
					<label>Handphone*</label>
						<input type="text" id = "phone"name="phone" class="form-control mandatory" />
					</div>
					<div class="form-group">
					<label>Telepon</label>
						<input type="text" id = "phone2"name="phone2" class="form-control"/>
					</div>
					<div class="form-group" style="display: none;" id="region_box">
					<label><?php echo $lang_Provience; ?>*</label>
					  <select name="province" id="region_sel" class="form-control mandatory"></select>
					</div>
					<div class="form-group">
					<label><?php echo $lang_Country; ?>*</label>
					  <select name="country" id="country_sel" class="form-control mandatory" disabled >
						<option value="">--pilih--</option>
					  </select>
					</div>
					
					
					<div class="clearfix"></div>
						<input type="submit" id="submit_btn" class="btn btn-primary" value="Update"> <img src="<?php echo base_url('images/general/Spinner.gif');?>" id="spinner_img" style="display:none">
				  </form>
				</div>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
$.ajaxSetup({
  error: function(){
    alert('service not available, please try again later');
  },
  timeout: 10000/*,
  contentType: "application/json; charset=UTF-8"*/
});

function get_distric(){
  $("#ditric_box").slideDown();
  $("#district_id").prop('disabled', true).html('<option value="">--pilih--</option>');
  $.get(api_base_url+"/cdistrict/getlistdistrictbycityid/"+$("#city_sel").val(), function(r){
    r.forEach(function(o){
      $("#district_id").append("<option value='"+o.c_district_id+"'>"+o.name+"</option>");
    });
    $("#district_id").prop('disabled', false);
  }, "json" );
}

function get_city(){
  $("#city_box").slideDown();
  $("#city_sel").prop('disabled', true).html('<option value="">--pilih--</option>').unbind("change", get_distric);
  $.get( api_base_url+"/ccity/getlistccitybyidregion/"+$("#region_sel").val(), function(r){
    r.forEach(function(o){
      $("#city_sel").append("<option value='"+o.c_city_id+"'>"+o.name+"</option>");
    });
    $("#city_sel").prop('disabled', false).change(get_distric);
  }, "json" );
}

function get_region(){
  $("#region_box").slideDown();
  $("#region_sel").prop('disabled', true).html('<option value="">--pilih--</option>').unbind("change", get_city);
  $.get( api_base_url+"/cregion/getlistcregionbyidccountry/"+$("#country_sel").val(), function(r){
    r.forEach(function(o){
      $("#region_sel").append("<option value='"+o.c_region_id+"'>"+o.name+"</option>");
    });
    $("#region_sel").prop('disabled', false).change(get_city);
  }, "json" );
}
var data = {};
$(document).ready(function() {
    var token = document.cookie.split('x-auth=')[1].split(';').shift();
    $.get(api_base_url+'/aduser/getaddress?token='+token+'&addresstype=isbillto',
 function(data){
 
	var addressname = $('.addressname');
	var rumah = $('.rumah');
	var mybutton = $('.mybutton');
	if(data.length == 0) return box.append('<p>Data tidak ditemukan</p>');
	if(data.length == 0) { $('#biling-empty').show();  }else{ $('#biling-ready').show(); }
 
        $("#id").val(data[0]['id']);
        $("#address_name").val(data[0]['address_name']);
        $("#name").val(data[0]['name']);
        $("#phone").val(data[0]['phone']);
        $("#phone2").val(data[0]['phone2']);
        $("#postal").val(data[0]['postal']);
        $("#address1").val(data[0]['address1']);
        $("#address2").val(data[0]['address2']);
        console.log('data nya adalah:', data[0]['id']);
	data.forEach(function(p){
      
  rumah.append(

	'<tr><td>'+p.address_name+',  '+p.address1+' '+p.address2+' '+p.address3+' '+p.address3+' '+p.address4+' '+p.cityname+' '+p.postal+'</td></tr>'
	)
	mybutton.append(
	'<div class="my-btn-general"><a href="'+base_url+'account/formBilling/'+p.id+'" class="my-link-general">Ubah</a></div>'
	)
	});


	});
    
  $("form").submit(function(e){
    e.preventDefault();
    //var data = $(this).serialize();
    var token = document.cookie.split('x-auth=')[1].split(';').shift();
    var apiurl = api_base_url + '/aduser/updateaddress?token='+token;
//    console.log('test'+token);
    var id = $("#id").val();
    var name =  $("#name").val();
        var phone = $("#phone").val();
        var phone2 = $("#phone2").val();
        var address_name = $("#address_name").val();
        var address1 = $("#address1").val();
        var address2 = $("#address2").val();
        var address3 = $("#address3").val();
        var address4 = $("#address4").val();
        var postal = $("#postal").val();
        var district_id = $("#district_id").val();
        var isbillto = $("#isbillto").val();
        var isshipto = $("#isshipto").val();
        var ispayfrom = $("#ispayfrom").val();
        var isremitto = $("#isremitto").val();
   
    //var fl=document.signup;
//    var data = $(this).serialize();
//     return alert(data);die();
data.id = id;
    data.address_name = address_name;
    data.name = name;
    data.phone = phone;
    data.phone2 = phone2;
    data.address_name = address_name;
    data.address1 = address1;
    data.address2 = address2;
    data.address3 = "address3";
    data.address4 = "address4";
    data.postal = postal;
    data.district_id = district_id;
    data.isbillto = 'Y';
    data.isshipto = 'Y';
    data.ispayfrom = 'N';
    data.isremitto = 'N';
    // return alert(data);

    // success handling

    var success = function(r){ 
         $('#spinner_img').hide();
  $('#submit_btn').val('Kirim').removeClass('disabled');
         $.alert({
     title: 'Alert!',
     content: 'Alamat Baru Berhasil di tambahkan',
    });
//      alert(r.message);
      console.log('OK:', r.status);
//        $("#addn").val(null);
//        $("#alamat1").val(null);
//        $("#alamat2").val(null);
//        $("#alamat3").val(null);
//        $("#ditric_sel").val(null);
//        $("#city").val(null);
//        $("#province").val(null);
//        $("#country").val(null);
//        $("#zip").val(null);
//        $("#bill").val(null);
//        $("#ship").val(null);
//        $("#pay").val(null);
//        $("#remit").val(null);
        window.location.replace(base_url+"/account/bukuAlamat");

    };
    $('#spinner_img').show();
    $('#submit_btn').val('loading...').addClass('disabled');
    $.ajax({ type:"POST", contentType: "application/json", data:JSON.stringify(data), dataType: "json", url: apiurl, success: success, timeout: 30000 });

    // do validation
    var form_ok = true;
    $('.mandatory').each(function(){
      if($(this).val()==''){
        $.alert({title:'Alert', content: $(this).prev().text().slice(0,-1)+ ' is required!'});
        // onContentReady: function(){$(this).focus();}
        form_ok =false;
        return false;
      }

    });
    

    if(form_ok==false) return false;
    if(fl.password.value!=$('#password2').val())alert('password not match!!!');

    else {
      $('#spinner_img').show();
      $('#submit_btn').val('loading...').addClass('disabled');
      $.post( apiurl, data, success, "json" );
    }
  });

  $.get(api_base_url+"/ccountry/getlistccountry", function(r){
    console.log(r);
    r.forEach(function(o){
      $("#country_sel").append("<option value='"+o.c_country_id+"'>"+o.name+"</option>");
    });
    $("#country_sel").prop('disabled', false).change(get_region);
  }, "json" );
});
</script>
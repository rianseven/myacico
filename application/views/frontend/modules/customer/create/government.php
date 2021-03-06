<div class="container">
  <div class="row" style='margin-top:20px'>
    <div class="col-sm-3">

    </div>
    <div class="col-sm-6">
      <div class='border-create7'>
      <form name="signup" method="post">
        <div class="form-group">
          <label><?php echo $lang_namaDepan; ?>*</label>
          <input type="text" name="fname" class="form-control mandatory" /></input>
        </div>
        <div class="form-group">
            <label><?php echo $lang_namaBelakang1; ?>*</label>
          <input type="text" name="lname" class="form-control mandatory" />
        </div>
        <div class="form-group">
          <label>Email*</label>
          <input type="email" name="email" class="form-control mandatory" />
        </div>
        <div class="form-group">
      <label><?php echo $lang_CompanyInfo; ?>*</label>
          <input type="text" name="cname" class="form-control mandatory" />
        </div>
        <div class="form-group">
      <label><?php echo $lang_comapnytype; ?>*</label>
          <select name="bname" class="form-control mandatory" ></select>
        </div>
        <div class="form-group">
          <label>Telephone*</label>
          <input type="text" name="telp" class="form-control mandatory" />
        </div>
        <div class="form-group">
          <label>NPWP*</label>
          <input type="text" name="npwp" class="form-control mandatory"/>
        </div>
        <div class="form-group">
          <label><?php echo $lang_addres; ?>*</label>
          <input type="text" name="alamat1" class="form-control mandatory" />
          <input type="text" name="alamat2" class="form-control mandatory" />
        </div>
        <div class="form-group" style="display:none" id="ditric_box">
<label><?php echo $lang_Keca; ?>*</label>
<select name="district_id" id="district_id" class="form-control mandatory"></select>
</div>
       <div class="form-group" style="display:none" id="village_box">
<label><?php echo $lang_Keca; ?>*</label>
<select name="village_id" id="village_id" class="form-control mandatory"></select>
</div>
            <div class="form-group" style="display:none"  id="village_box">
    <label>Kelurahaan*</label>
    <select name="village_id" id="village_id" class="form-control mandatory"></select>
    </div>
        <div class="form-group" style="display:none" id="city_box">
            <label><?php echo $lang_kota; ?>*</label>
          <select name="city" id="city_sel" class="form-control mandatory"></select>
        </div>
        <div class="form-group">
        <label><?php echo $lang_PostCode; ?>*</label>
          <input type="text" name="zip" class="form-control mandatory" />
        </div>
        <div class="form-group" style="display:none" id="city_box">
<label><?php echo $lang_kota; ?>*</label>
<select name="city" id="city_sel" class="form-control mandatory"></select>
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
        <div class="form-group">
              <label><?php echo $lang_Passwpord; ?>*</label>
          <input type="password" name="password" class="form-control mandatory" />
        </div>
        <div class="form-group">
                <label><?php echo $lang_Passwpord2; ?>*</label>
          <input type="password" id="password2" class="form-control" />
        </div>

        <div class="row">
  			<div class="col-sm-6">
          <input type="submit" id="submit_btn" class="btn btn-primary" value="<?php echo $lang_BtnSend ?>">
    			<img src="<?php echo base_url('images/general/Spinner.gif');?>" id="spinner_img" style="display:none">
  			</div>
  			<div class="col-sm-6" style='text-align: right'>
  				<?php echo $field_sudahDaftar; ?> <?php echo anchor('customer/signIn', 'Log In'); ?>
  			</div>
  		  </div>

      </form>
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
$('#district_id').change(function () {
        var end = this.value;
      $('#submit_btn').removeAttr('disabled');
    });
    function get_village(){
      $("#village_box").slideDown();
      $("#village_id").prop('disabled', true).html('<option value="">--pilih--</option>');
      $.get(api_base_url+"/village/getlistvillagebyiddistrict/"+$("#district_id").val(), function(r){
        r.forEach(function(o){
          $("#village_id").append("<option value='"+o.c_district_id+"'>"+o.name+"</option>");
        });
        $("#village_id").prop('disabled', false);
      }, "json" );
    }
    function get_distric(){
      $("#ditric_box").slideDown();
      $("#district_id").prop('disabled', true).html('<option value="">--pilih--</option>');
      $.get(api_base_url+"/cdistrict/getlistdistrictbycityid/"+$("#city_sel").val(), function(r){
        r.forEach(function(o){
          $("#district_id").append("<option value='"+o.c_district_id+"'>"+o.name+"</option>");
        });
        $("#district_id").prop('disabled', false).change(get_village);;
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
$(document).ready(function() {
  $("form").submit(function(e){
    e.preventDefault();
    var apiurl = api_base_url + '/aduser/add';
    var fl=document.signup;
    var data = $(this).serialize();
    // return alert(data);

    // success handling

    var success = function(r){
      alert(r.message);
      console.log('OK:', r.status);
    };

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
    var success = function(r){
      $('#spinner_img').hide();
      $('#submit_btn').val('Kirim').removeClass('disabled');
      console.log('OK:', r);
      alert(r.message);
    };

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

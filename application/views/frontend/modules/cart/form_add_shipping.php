<style>
.box-ship{
  border: 1px solid #dddddd;
  padding:20px;
  margin:10px 0px;
  color: #4a4847;
  background: #e9e8e7;
}


#box-adrs{
  background: #e9e8e7;
  height:120px;
}

.link-ship{
  color: #4a4847;
}

.link-ship:hover{
  color: #e1dfdf;
  /*text-decoration: none;*/
}

</style>

<div class="container">
<br><p align='center'><img src="<?php echo base_url('images/general/step1.jpg'); ?>" border="0"></p>
    <div style='border-top:2px solid #e4322b; padding-top:10px; font-size:20px; width:1200px;margin-bottom:40px;'>
      <?php echo anchor('checkout/cart','KERANJANG BELANJA', array('class'=>'link-ship')); ?>/ <?php echo anchor('checkout/addressbook','BUKU ALAMAT', array('class'=>'link-ship')); ?>/ PENERIMA</div>
      Silakan pilih data penerima pada kolom <b>Pilih Penerima</b>. Jika belum ada data penerima silakan isi kolom data penerima terlebih dulu.
      <!-- pesan start -->
      <?php $flash_pesan = $this->session->flashdata('pesan')?>
      <?php if (! empty($flash_pesan)) : ?>
      <?php echo $flash_pesan; ?>
      <?php endif ?>
      <!-- pesan end -->

    <div class='box-ship'>



	<div class="row" ng-controller="cartCnt">
		<div class="col-xs-8">
			<div class="panel panel-default">
			  <div class="panel-heading">
			  <div class="row">
					<div class="col-md-12">
						<b>Data Penerima</b>
					</div>
				</div>
			  </div>

				 <div class="panel-body">
           <p>Silakan lengkapi data penerima Anda dibawah ini.</p>

						<!-- <form name="signup" method="post"> -->
						<!-- <div class="form-group">

						<input type="hidden" id="bill" name="bill" value="N" />
						<input type="hidden" id="ship" name="ship" value="Y" />
						<input type="hidden" id="pay" name="pay" value="N" />
						<input type="hidden" id="remit" name="remit" value="N" />
						<input type="hidden" id="addn" name="addn" value="kontrakan" />
						<input type="hidden" id="alamat3" name="alamat3" value="kelurahan duri kosambi" />
						</div> -->
            <div class="row">
              <div class="col-sm-12">
                <form name="test1" method="post">
                <input type="hidden" id="isbillto" name="isbillto" value="N" />
                <input type="hidden" id="isshipto" name="isshipto" value="Y" />
                <input type="hidden" id="ispayfrom" name="ispayfrom" value="N" />
                <input type="hidden" id="isremitto" name="isremitto" value="N" />
                <div class="form-group">
                  <label>Nama Penerima*</label>
                  <input type="text" id = "name" name="name" class="form-control mandatory"/>
                </div>
                <div class="form-group">
                  <label>Disimpan sebagai alamat (contoh: alamat rumah, alamat kantor dll.)*</label>
                  <input type="text" id="address_name" name="address_name" class="form-control mandatory"/>
                </div>

                <div class="form-group">
                    <label><?php echo $lang_addres; ?>*</label>
                     <textarea rows="4" cols="50" id="address1" name="address1" class="form-control mandatory" ></textarea>

                    <!--<input type="text" id = "address1"name="address1" class="form-control mandatory" />-->
                    <!--<input type="text" id = "address2" name="address2" class="form-control mandatory" />-->
                </div>


                <div class="form-group">
                  <label><?php echo $lang_Country; ?>*</label>
                  <select name="country" id="country_sel" class="form-control mandatory">
                  <option value="209" selected="selected">Indonesia</option>
                  </select>
                </div>
                <div class="form-group" id="region_box">
                  <label><?php echo $lang_Provience; ?>*</label>
                  <select name="province" id="region_sel" class="form-control mandatory">
                  <option value="" selected="selected">--Pilih--</option>
                  </select>
                </div>
                <div class="form-group" style="display:none" id="city_box">
                  <label><?php echo $lang_kota; ?>*</label>
                  <select name="city" id="city_sel" class="form-control mandatory"></select>
                </div>
                <div class="form-group" style="display:none" id="ditric_box">
                    <label><?php echo $lang_Keca; ?>*</label>
                  <select name="district_id" id="district_id" class="form-control mandatory"></select>
                </div>
                <div class="form-group" style="display:none" id="village_box">
                  <label><?php echo "kelurahan"; ?>*</label>
                  <select name="village_id" id="village_id" class="form-control mandatory"></select>
                </div>
                <div class="form-group" style="display:none" id="postal_box">
                  <label><?php echo $lang_PostCode; ?>*</label>
                  <input type="text" name="postal" id="postal" class="form-control mandatory" />
                </div>
                <div class="form-group">
                <label>Handphone*</label>
                  <input type="text" id = "phone"name="phone" class="form-control mandatory" />
                </div>
                <div class="form-group">
                <label>Telepon</label>
                  <input type="text" id = "phone2"name="phone2" class="form-control"/>
                </div>

                <div class="clearfix"></div>
                  <input type="submit" id="submit_btn" class="btn btn-primary" value="Tambah"> <img src="<?php echo base_url('images/general/Spinner.gif');?>" id="spinner_img" style="display:none">
                </form>
              </div>


            </div>
	       </div>
			</div>

		</div>
    <div class="col-xs-4">

      <?php $this->load->view('frontend/modules/cart/data_shipping.php',$this->data); ?>

    </div>
	</div>
</div>

</div>
<script>
 var negara= 209;
$.ajaxSetup({
  error: function(){
    alert('service not available, please try again later');
  },
  timeout: 10000/*,
  contentType: "application/json; charset=UTF-8"*/
});
$('#village_id').change(function () {
        var end = this.value;
      $('#submit_btn').removeAttr('disabled');
    });
function get_village(){
  $("#village_box").slideDown();
  $("#village_id").prop('disabled', true).html('<option value="">--pilih--</option>').unbind("change", get_postal);
  $.get(api_base_url+"/village/getlistvillagebyiddistrict/"+$("#district_id").val(), function(r){
    r.forEach(function(o){
      $("#village_id").append("<option value='"+o.c_village_id+"'>"+o.name+"</option>");
    });
    $("#village_id").prop('disabled', false).change(get_postal);
  }, "json" );
}
function get_distric(){
  $("#ditric_box").slideDown();
  $("#district_id").prop('disabled', true).html('<option value="">--pilih--</option>').unbind("change", get_village);
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
$('#postal_id').change(function () {
      var end = this.value;
    $('#submit_btn').removeAttr('disabled');
  });
  function get_postal(){
      $("#postal_box").slideDown();
    $("#postal").prop('disabled', true).html('<option value="">--pilih--</option>');
      $.get(api_base_url+"/village/getlistvillagebyiddistrict/"+$("#district_id").val(), function(r){
      r.forEach(function(o){
        $("#postal").append("<option value='"+o.postal+"'>"+o.postal+"</option>");
              console.log('23',o.postal);
      });
        $("#postal").prop('disabled', false);
      }, "json" );
    }
function get_region(){
  $("#region_box").slideDown();
  // var negara = $('#country_sel').val();
  // $("#country_sel").prop('disabled', false).change(get_region);
//alert(negara);
  $("#region_sel").prop('disabled', true).unbind("change", get_city);

  $.get( api_base_url+"/cregion/getlistcregionbyidccountry/"+negara, function(r){
    r.forEach(function(o){
      $("#region_sel").append("<option value='"+o.c_region_id+"'>"+o.name+"</option>");
    });
    $("#region_sel").prop('disabled', false).change(get_city);
  }, "json" );
}


var data = {};

$(document).ready(function() {
	var token = document.cookie.split('x-auth=')[1].split(';').shift();
$('#submit_btn').attr('disabled','disabled');
    $("form").submit(function(e){
    e.preventDefault();
   // var data = $(this).serialize();
    var token = document.cookie.split('x-auth=')[1].split(';').shift();
	  var apiurl = api_base_url +'/aduser/addaddress?';

        var name =  $("#name").val();
        var phone = $("#phone").val();
        var phone2 = $("#phone2").val();
        var address_name = $("#address_name").val();
        var address1 = $("#address1").val();
        var postal = $("#postal").val();
        var village_id = $("#village_id").val();
        var isbillto = $("#isbillto").val();
        var isshipto = $("#isshipto").val();
        var ispayfrom = $("#ispayfrom").val();
        var isremitto = $("#isremitto").val();

        //var fl=document.signup;
        //    var data = $(this).serialize();
        //     return alert(data);die();

        data.name = name;
        data.phone = phone;
        data.phone2 = phone2;
        data.address_name = address_name;
        data.address1 = address1;

        data.postal = postal;
        data.district_id = district_id;
        data.village_id = village_id;
        data.isbillto = 'N';
        data.isshipto = 'Y';
        data.ispayfrom = 'N';
        data.isremitto = 'N';

    //return alert(data.phone);die();
     var success = function(r){
         $('#spinner_img').hide();
         $('#submit_btn').val('Kirim').removeClass('disabled');
        //         $.alert({
        //     title: 'Alert!',
        //     content: 'Alamat Baru Berhasil di tambahkan',
        //    });
        //      alert(r.message);
        console.log('OK:', r.status);
    		// $("#name").val(null);
    		// $("#phone").val(null);
    		// $("#phone2").val(null);
    		// $("#address_name").val(null);
    		// $("#address1").val(null);
    		// $("#address3").val(null);
    		// $("#address4").val(null);
    		// $("#postal").val(null);
    		// $("#district_id").val(null);
    		// $("#isbillto").val(null);
    		// $("#isshipto").val(null);
    		// $("#ispayfrom").val(null);
    	  // $("#isremitto").val(null);
        // window.location.replace(base_url+"checkout/dataShipping");
        window.location.replace("<?php echo base_url('checkout/shipping/1');?>");
    };
    $('#spinner_img').show();
    $('#submit_btn').val('loading...').addClass('disabled');
		console.log('ini data',token);
		//die();
$.ajax({ type:"POST", contentType: "application/json", headers:{"token":token}, data:JSON.stringify(data) , url: apiurl, success: success});

		//$.ajax({ type:"POST", contentType: "application/json", data:JSON.stringify(data), dataType: "json", url: apiurl, success: success, error: error, timeout: 30000 });

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


  });
$.get(api_base_url+"/ccountry/getlistccountry", function(r){
    console.log(r);
//    $("#country_sel").prop('disabled', true).html('<option value="209" selected="selected">Indonesia</option>');
//    $("#country_sel").prop('disabled', true).html('<option value="">Indonesia</option>');
//    $("#country_sel").prop('disabled', true).on("load", get_region);
    r.forEach(function(o){
      $("#country_sel").append("<option value='"+o.c_country_id+"'>"+o.name+"</option>");
    });
    $("#country_sel").prop('disabled', true).change(get_region(this));
  }, "json" );
 /*
 $("#country_sel").change(function(){
    negara =$("#country_sel").val();
        //alert(negara);
    });
  $.get(api_base_url+"/cregion/getlistcregionbyidccountry/"+$("#country_sel").val(), function(r){
    r.forEach(function(o){
      $("#region_sel").append("<option value='"+o.c_region_id+"'>"+o.name+"</option>");
    });
    $("#region_sel").prop('disabled', false).change(get_city);
  }, "json" );
 */
});
</script>

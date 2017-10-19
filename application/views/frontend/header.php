
<!DOCTYPE html>
<html lang="en">
	<head>
	  <meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
		<title><?php echo $title_web; ?></title>

<style>
a{
	color:red;
}
</style>

		<!-- Strat Bootstrap -->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css');?>" />
		<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.min.js');?>"></script>
		<script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>
		<!-- End Bootstrap -->

		<!-- s: jquery-ui -->
		<link rel="stylesheet" href="<?php echo base_url('assets/css/jquery-ui.min.css');?>">
		<script type="text/javascript" src="<?php echo base_url('assets/js/jquery-ui.min.js');?>"></script>
		<!-- e: jquery-ui -->

		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.5/angular.min.js"></script>

		<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
		<link href="<?php echo base_url('assets/nav/css/animate.css');?>" rel="stylesheet">
		<link href="<?php echo base_url('assets/nav/css/bootsnav.css');?>" rel="stylesheet">
		<link href="<?php echo base_url('assets/nav/css/style.css');?>" rel="stylesheet">
		<script src="<?php echo base_url('assets/nav/js/bootsnav.js');?>"></script>

		<!--<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/animate.css');?>" />-->
		<link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url('images/general/favicon.ico');?>">
		<!-- Font Awesome -->
		<link rel="stylesheet" href="<?php echo base_url('assets_adminlte/font-awesome-4.7.0/css/font-awesome.min.css') ?>"/>

		<!-- CSS -->

		<!-- s: Alert -->
		<!--<link rel="stylesheet" type="text/css" href="<?php //echo base_url('assets/alert/libs/bundled.css');?>" />-->
		<!--script type="text/javascript" src="<?php //echo base_url('assets/alert/libs/bundled.js');?>"></script-->
		<script type="text/javascript" src="<?php echo base_url('assets/alert/js/jquery-confirm.js');?>"></script>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/alert/css/jquery-confirm.css');?>" />
        <!-- e: Alert -->

		<script type="text/javascript" src="<?php echo base_url('assets/js/jwt-decode.min.js');?>"></script>
		<!--<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">-->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style_frontend.css');?>" />

    </head>

<body style='font-weight: normal;' ng-app="myApp">
<!--<div class="my-header-panel3">-->
<div class='container'>

	
	<ul class='my-menu-header'>
		<li><b>Belanja murah di myacico.com! Gratis pengiriman untuk area JAKARTA</b></li>
		<li><i class="fa fa-phone" aria-hidden="true"></i> +(62) 21 - 3502099, <i class="fa fa-clock-o" aria-hidden="true"></i>
		Senen - Jumat [09:00 - 17:00]</li>
		


		<li class='my-menu-header-sub' style="float: right;">Bahasa 
			<div class="dropdown-lang" style='border:0px solid #aeaeab; border-radius:5px; background:#f1f3f6; padding:0px; right: 0; left: auto; '>
			<?php if($lang=='en'){?><img src="<?php echo base_url('images/general/lang_english.png'); ?>" border="0"><?php }else{ ?><img src="<?php echo base_url('images/general/lang_bahasa.png'); ?>" border="0"><?php } ?> <span class="caret"></span>
			<div class="dropdown-lang-content">
			<a href="#" onclick="langFunction('id')"><img src="<?php echo base_url('images/general/lang_bahasa.png'); ?>" border="0"> Indonesia </a>
			<a href="#" onclick="langFunction('en')"><img src="<?php echo base_url('images/general/lang_english.png'); ?>" border="0"> Inggris </a>
			</div>
			</div>
		</li>
		<li class='my-menu-header-sub' style="float: right;"><?php echo anchor('pages/aboutus/', 'About Us');?></li>
		<li class='my-menu-header-sub' style="float: right;"><?php echo anchor('pages/payment/', 'Payment');?></li>
		<li style="float: right;"><?php echo anchor('pages/faq/', 'FAQ');?></li>

	</ul>

</div>
		
<!--</div>-->

<div class="my-header-panel4">
	<div class='container' style='background:#ffffff url(<?php echo base_url('images/general/Bg-atas-acico.png'); ?>); height:55px'>
		
	</div>	
</div>
<div class="my-header-panel">
	<div class='container'>
	<div class="row">
		<div class="col-sm-2">
			<div class='logo'>
				<?php echo anchor('/', '<img src="'.base_url('images/general/logo-transparan.gif').'" border="0" height="55">');?>
			</div>
		</div>
		<div class="col-sm-6">
			<div class='myserach'>
				<div class="input-group">
					<div class="input-group-btn search-panel">
						<button type="button" class="btn btn-default dropdown-toggle my-search" data-toggle="dropdown">
							<span id="search_concept">All Categories</span> <span class="caret"></span>
						</button>
						<ul class="dropdown-menu cat_menu" role="menu">
						  <li><a href="#1">Computer</a></li>
						  <li><a href="#2">Gatget</a></li>
						  <li><a href="#3">Communication</a></li>
						  <li><a href="#4">Audio & Visual</a></li>
						  <li><a href="#5">Mechanical & Electrical</a></li>
						  <li><a href="#6">Hobby</a></li>
						  <li><a href="#7">Peralatan Rumah</a></li>
						  <li><a href="#8">Perlengkapan Kantor</a></li>
						</ul>
					</div>
					<input type="hidden" name="search_param" value="all" id="search_param">
					<input type="text" class="my-search-field" name="x" placeholder="Search term...">
					<span class="input-group-btn">
						<button class="btn btn-default my-search-button" type="button"><span class="glyphicon glyphicon-search"></span></button>
					</span>
				</div>

			</div>
		</div>

		<div class="col-sm-4" style="padding-top:10px;">
		<!--	<div class="row">
				<div class="col-sm-4" style='color:#111111; font-weight:bold; margin-right:10px;'>

				</div>
				<div class="col-sm-6" style='color:#111111; wight:bold; text-align:right; margin-right:10px;'>
					<img src="<?php echo base_url('images/general/info-head.png');?>" border="0">
				</div>
			</div>-->
			<div>
				<div class="row">
					<div class="col-sm-12" style='text-align:right; '>

						<div class="btn-group" style='text-align:left;'>


							<?php if(isset($user)){ ?>

							<div class="dropdown-account">
							  <button class="dropbtn-account"><i class="fa fa-user" aria-hidden="true"></i> Account<span class="caret"></span></button>
							  <div class="dropdown-account-content">
								<?php echo anchor('account', '<i class="fa fa-registered" aria-hidden="true"></i> Profile Anda');?>
								<?php echo anchor('#', '<i class="fa fa-sign-in" aria-hidden="true"></i> Logout', array('id'=>'logout'));?>
							  </div>
							</div>

							<?php }else{ ?>
							<div class="dropdown-account">
							  <button class="dropbtn-account"><i class="fa fa-user" aria-hidden="true"></i> Account <span class="caret"></span></button>
							  <div class="dropdown-account-content">
								<?php echo anchor('customer/create/', '<i class="fa fa-registered" aria-hidden="true"></i> '.$lang_daftar);?>
								<?php echo anchor('customer/signIn/', '<i class="fa fa-sign-in" aria-hidden="true"></i> '.$lang_masuk);?>
							  </div>
							</div>

							<?php } ?>

							<div class="btncontact">
								<?php echo anchor('customer/contact', '<button class="dropbtncontact"><i class="fa fa-paper-plane" aria-hidden="true"></i> Hubungi Kami</button>');?>

							</div>

							<div class="dropdown-basket" ng-controller="cartCnt">
								<?php
								$totalItems = 0;
								foreach ($this->cart->contents() as $items):
									$totalItems += $items['qty'];
								endforeach;
								?>
								<button class="dropbtn-basket"><i class="fa fa-shopping-cart" aria-hidden="true"></i> My Cart (<span class='totalCart'><?php echo $totalItems; ?></span>) <span class="caret"></span></button>
								<div class="dropdown-basket-content">

									<?php
									if($totalItems==0)
									{ ?>
									<div class='empty-item'><center>Keranjang masih kosong</center></div>
									<?php } ?>
									<div class='list-item'></div>
									<div class='btn-chekout'></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		</div>
	</div>
</div>


<div class="my-header-panel2">

	<div class="row">
		<div class="col-sm-2">
			<div class='logo'>
				<?php echo anchor('/', '<img src="'.base_url('images/general/logo-transparan.gif').'" border="0" height="55">');?>
			</div>
		</div>
		<div class="col-sm-6">
			<div class='myserach'>


						<div class="input-group">
							<div class="input-group-btn search-panel">
								<button type="button" class="btn btn-default dropdown-toggle my-search" data-toggle="dropdown">
									<span id="search_concept">All Categories</span> <span class="caret"></span>
								</button>
								<ul class="dropdown-menu cat_menu" role="menu">
								  <li><a href="#contains">Computer</a></li>
								  <li><a href="#its_equal">Gatget</a></li>
								  <li><a href="#greather_than">Communication</a></li>
								  <li><a href="#less_than">Audio & Visual</a></li>
								  <li><a href="#greather_than">Mechanical & Electrical</a></li>
								  <li><a href="#less_than">Hobby</a></li>
								  <li><a href="#greather_than">Peralatan Rumah</a></li>
								  <li><a href="#less_than">Perlengkapan Kantor</a></li>
								</ul>
							</div>
							<input type="hidden" name="search_param" value="all" id="search_param">
							<input type="text" class="my-search-field" name="x" placeholder="Search term...">
							<span class="input-group-btn">
								<button class="btn btn-default my-search-button" type="button"><span class="glyphicon glyphicon-search"></span></button>
							</span>
						</div>

			</div>
		</div>

		<div class="col-sm-4" style="height:100%; padding-top:10px;">

			<div class="row">
				<div class="col-sm-12">

					<div class="btn-group">

						<?php if(isset($user->name)){ ?>
						<div class="dropdown">
							<button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown"><i class="fa fa-user" aria-hidden="true"></i> Acount Anda
							<span class="caret"></span></button>
							<ul class="dropdown-menu">
							<li><?php echo anchor('account/', 'Profile Anda');?></li>
							<li class="divider"></li>
							<li><a href="#" id="logout">Logout</a></li>
							</ul>
						</div>

						<?php }else{ ?>
						<div class="dropdown-account">
						  <button class="dropbtn-account"><i class="fa fa-user" aria-hidden="true"></i> Account</button>
						  <div class="dropdown-account-content">
							<?php echo anchor('customer/create/', '<i class="fa fa-registered" aria-hidden="true"></i> '.$lang_daftar);?>
							<?php echo anchor('customer/signIn/', '<i class="fa fa-sign-in" aria-hidden="true"></i> '.$lang_masuk);?>
						  </div>
						</div>

						<?php } ?>

						<div class="btncontact">
							<?php echo anchor('customer/contact', '<button class="dropbtncontact"><i class="fa fa-paper-plane" aria-hidden="true"></i> Hubungi Kami</button>');?>

						</div>
						<div class="dropdown-basket">
						  <button class="dropbtn-basket"><i class="fa fa-shopping-cart" aria-hidden="true"></i> My Cart ({{mycart.length}})</button>
						  <div class="dropdown-basket-content">

								<div class="row my-cart" ng-repeat="arr in mycart">
								  <div class="col-sm-3"><img src="{{arr.image_url}}" border="0" height="50" width="50"></div>
								  <div class="col-sm-7">arr.name<br>arr.price</div>
								  <div class="col-sm-2"><button type="button" class="btn btn-link"><i class="fa fa-times" aria-hidden="true"></i></button></div>
								</div>

								<div class="row my-cart">
								  <div class="col-sm-3"><img src="<?php echo base_url('images/demo/samsung2.jpg');?>" border="0" height="50" width="50"></div>
								  <div class="col-sm-7">Samsung 8<br>Rp.1.000.000</div>
								  <div class="col-sm-2"><button type="button" class="btn btn-link"><i class="fa fa-times" aria-hidden="true"></i></button></div>
								</div>
								<div class='my-total-cart'>
								TOTAL : <b>{{total}}</b>
								</div>
								<?php echo anchor('checkout/cart', 'Checkout', array('class'=>'btn btn-success my-btn-chekout'));?>

						  </div>
						</div>

					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12" style='color:#ffffff; wight:bold;'>
					Total Shopping Experience
				</div>
			</div>
		</div>
	</div>
</div>

<script>
//Buat ngecek jumlah keranjang
/*
$(document).ready(function() {

	totalCart();

});*/

function totalCart(){
	var token = document.cookie.split('x-auth=')[1].split(';').shift();
	var qty = 0;

	if(token){

		$.ajax
		({
		url: "<?php echo site_url('cart/totalQtyToken'); ?>",
		success:function(html){
				$(".totalCart").html(html);
			}
		});

	}
}


var app = angular.module("myApp", []);

app.factory('$mycart', function() {
	var data = [];
	var saved_cart = document.cookie.split('cart=');
	if(saved_cart.length > 1){
		data = JSON.parse(saved_cart[1].split(';').shift());
		//console.log('cart on cookies found');
	}
	return {data:data};
});

app.factory('toMoney', function() {
	return function(x){
		return 'Rp. '+(x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, "."));
	}
});

app.controller('cartCnt', function($scope, $mycart, toMoney){
	$scope.mycart = $mycart.data;
	$scope.del = function(i){
		if(confirm('Sure? '))$scope.mycart.splice(i, 1);
	}
	$scope.toMoney = toMoney;
	$scope.get_total = function(){
		var total = 0;
		$scope.mycart.forEach(function(c){
			total+=(c.price*c.quantity);
		});
		document.cookie = 'cart='+JSON.stringify($scope.mycart)+'; path='+base_path;
		return toMoney(total);
	}
});

/*(function(){

  $("#cart").on("click", function() {
    $(".shopping-cart").fadeToggle( "fast");
  });

})();*/

$(function(){
	$( ".my-search-field" ).autocomplete({
		source: function (request, response) {
			$.get(api_base_url+"/product/productlist/"+request.term, function (data) {
				console.log('res',data);
				var arr = [];
				data.forEach(function(d){arr.push({label:d.name, value:d.m_product_id, label:d.name, value:d.m_product_id})})
				response(arr);
			});
		},
		select: function( event, ui ) {
			this.value = ui.item.label;
			var cat = $('#search_param').val();
			//console.log('change:',ui.item.value);
			if(cat != 'all')location.href = base_url+'product/detail/'+cat+'/'+ui.item.value;
			location.href = base_url+'product/detail/'+ui.item.value;
			return false;
		},
		focus: function( event, ui ) {
			//console.log('focus:',this);
			return false;
		},
		minLength: 2
	});
});

<?php if(isset($user->name)){ ?>

$("#logout").click(function(e){
    e.preventDefault();

	$.confirm({
		title: 'Confirm!',
		content: 'Anda yakin akan logout?',
		buttons: {
			confirm: function () {
				document.cookie='x-auth=; path='+base_path+';expires=Thu, 01 Jan 1970 00:00:01 GMT;';
				location.href='<?php echo base_url("customer/signIn");?>';
			},
			cancel: function () {
				//$.alert('Canceled!');
			}
		}
	});

});
<?php } ?>

</script>

<!---modif lalang-->
<script type="text/javascript">

$(".dropbtn-basket").mouseover(function(){

	var cookie = document.cookie.split('x-auth=');
	if(cookie.length > 1){

	/*		$('.empty-item').hide();
			listCartToken();

*/
		$.ajax
		({
			url: "<?php echo site_url('cart/loadCartToken'); ?>",
			success:function(html){
				$('.dropdown-basket-content').html(html);
			}
		});

	}else{

		$.ajax
		({
			url: "<?php echo site_url('cart/loadCart'); ?>",
			success:function(html){
				$('.dropdown-basket-content').html(html);
			}
		});

	}
});
/*
function listCartToken(){
	var token = document.cookie.split('x-auth=')[1].split(';').shift();
	var list = $('.list-item');
	var btn = $('.btn-chekout');
	var qty = 0;
	var totalBelanja = 0;
	list.html(
				''
			);
	$.get( api_base_url+"/order/cart/detail?token="+token,
	function(r){

		r.forEach(function(p){
			qty += p.qty;
			totalBelanja+=p.price;
			//alert(qty);
			list.append(
				'<div class="row my-cart" style="position:relative;"><div class="col-sm-3"><img src="'+p.imageurl+'" border="0" height="50" width="50"></div><div class="col-sm-7">'+p.name+'<br>Rp.'+p.price+' ('+p.qty+')Items<br></div><div class="col-sm-2"><a href="#" onClick="dellItemCartToken('+p.productId+',\''+p.imageurl+'\',\''+p.name+'\',\''+p.itemCartId+'\')"><i class="fa fa-trash" aria-hidden="true"></i></a></div></div>'
			);
		});
		//alert(qty);


		btn.html('');
		btn.append(
				'<div style="position:relative;"><div class="my-total-cart">TOTAL : <b>'+totalBelanja+'</b></div><a href="'+base_url+'cart" class="btn btn-success my-btn-chekout">My Cart & Checkout</a></div>'
			);


			if(totalBelanja==0){
				list.html(
					''
				);
				btn.html('<center>Keranjang masih kosong</center>');
			}

	  }, "json" );

}*/

function dellItemCart(id,rowid,img,name){

	$.confirm({
		title: name,
		content: '<img src="'+img+'">'+'<br><br>Apakah item ini akan dihapus?',
		//content: '<p>Apakah item ini akan dihapus?</p>',
		autoClose: 'cancel|10000',
		closeIcon: true,
		closeIconClass: 'fa fa-close',
		buttons: {
			confirm: function () {
				var dataString = 'rowid='+ rowid;
				//untuk cart yang di header
				$.ajax
				({	type: "POST",
					url: "<?php echo site_url('cart/removeItem'); ?>",
					data: dataString,
					success:function(data){
						$(".totalCart").html(data);
					}
				});

				//untuk cart yang di basket
				$.ajax
				({
					url: "<?php echo site_url('cart/listCart'); ?>",
					success:function(data){
						$(".listCart").html(data);
					}
				});

			},
			cancel: function () {
				//$.alert('Canceled!');
			}
		}

	});
}

function dellItemCartToken(id,img,name,idcart){

	var token = document.cookie.split('x-auth=')[1].split(';').shift();
	var apiurl = api_base_url + '/order/cart/deleteitem?idcartitem='+idcart;

	$.confirm({
		title: name,
		content: '<img src="'+img+'">'+'<br><br>Apakah item ini akan dihapus?',
		//content: '<p>Apakah item ini akan dihapus?</p>',
		autoClose: 'cancel|10000',
		closeIcon: true,
		closeIconClass: 'fa fa-close',
		buttons: {
			confirm: function () {
				//untuk cart yang di header
				$.ajax
				({	type: "POST",
					url: apiurl,
					headers:{ "token":token},
					success:function(data){
						totalCart();
					}
				});


				//untuk cart yang di basket token
				$.ajax
				({
				url: "<?php echo site_url('cart/listCartToken'); ?>",
				success:function(html){
						$(".listCart").html(html);
					}
				});

			},
			cancel: function () {
				//$.alert('Canceled!');
			}
		}

	});


	/*var success = function(r){
	$('#spinner_img').hide();
	$('#submit_btn').val('Kirim').removeClass('disabled');
		 $.alert({
		 title: 'Alert!',
		 content: 'Item berhasil dihapus',
		});
		console.log('OK:', r.status);
		window.location.replace(base_url+"/account/bukuAlamat");

	};*/
}


var base_url = '<?php echo base_url();?>';
var base_path = base_url.split(location.host).pop();

var login = 'http://acc.myacico.co.id/myacico-account/account/masuk';
// var login_base_url_api = 'acc.myacico.co.id/myacico-service';
var adduser = 'http://acc.myacico.co.id/myacico-account/account/';

//
//var api_base_url2 = <?php echo $baseApiUrl; ?>;
//var api_base_url = 'http://myacico.net:8080/myacico-service/api';
var api_base_url = "<?php echo $baseApiUrl; ?>";
</script>

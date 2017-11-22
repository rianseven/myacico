<?php
$curr = (int)$this->uri->segment(6);
?>
<script src="//cdnjs.cloudflare.com/ajax/libs/numeral.js/2.0.6/numeral.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
<link rel="stylesheet" href="<?php echo base_url('assets/css/pagination.css');?>">
<script type="text/javascript" src="<?php echo base_url('assets/js/pagination.js');?>"></script>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
.thumbnail
{
    margin-bottom: 20px;
    padding: 0px;
    -webkit-border-radius: 0px;
    -moz-border-radius: 0px;
    border-radius: 0px;
}
.thumbnail>img, .thumbnail a>img{
height: 100px;
}
.color-wishlist{
	color:#FE4365;
}
.color-wishlist-disabled{
	color:#dddddd;
}
.yu{
  color: red;
font-family: 'Roboto Condensed', sans-serif;
font-size: 16px;

}
.yu1{
  font-family: 'Roboto Condensed', sans-serif;
  font-size: 16px;
  color: green;
}
.item.list-group-item
{
    float: none;
    width: 100%;
    background-color: #fff;
    margin-bottom: 10px;
}
.item.list-group-item:nth-of-type(odd):hover,.item.list-group-item:hover
{
    background: #428bca;
}

.item.list-group-item .list-group-image
{
    margin-right: 10px;
}
.item.list-group-item .thumbnail
{
    margin-bottom: 0px;
}
.item.list-group-item .caption
{
    padding: 9px 9px 0px 9px;
}
.item.list-group-item:nth-of-type(odd)
{
    background: #eeeeee;
}

.item.list-group-item:before, .item.list-group-item:after
{
    display: table;
    content: " ";
}

.item.list-group-item img
{
    float: left;
}
.item.list-group-item:after
{
    clear: both;
}
.list-group-item-text
{
    margin: 0 0 11px;
}
.col-1 {width: 8.33%;}
.col-2 {width: 16.66%;}
.col-3 {width: 25%;}
.col-4 {width: 33.33%;}
.col-5 {width: 41.66%;}
.col-6 {width: 50%;}
.col-7 {width: 58.33%;}
.col-8 {width: 66.66%;}
.col-9 {width: 75%;}
.col-10 {width: 83.33%;}
.col-11 {width: 91.66%;}
.col-12 {width: 100%;}

@media only screen and (max-width: 768px) {
    /* For mobile phones: */
    [class*="col-"] {
        width: 100%;
    }
}
.jumbotron-billboard .img {
    margin-bottom: 0px;
    opacity: 0.5;
    color: #fff;
    background: #000 url("https://myacico.com/media/bannerslider/lel1.jpg") center center;
    width: 100%;
    height: 100%;
    background-size: cover;
    overflow: hidden;


  position:absolute;
  top:0;left:0;
  z-index:1;
}
.jumbotron-billboard2 .img {
    margin-bottom: 0px;
    opacity: 0.5;
    color: #fff;
    background: #000 url("https://s1.postimg.org/40i0xfe8sf/banner_atas.png") center center;
    width: 100%;
    height: 100%;
    background-size: cover;
    overflow: hidden;


  position:absolute;
  top:0;left:0;
  z-index:1;
}
h1.po1{
  color: White;
}
.jumbotron {position:relative;padding:50px;}
.jumbotron .container {z-index:2;
 position:relative;
  z-index:2;
}
.pagination {
    display: inline-block;
}

.pagination a {
    color: black;
    float: left;
    padding: 8px 16px;
    text-decoration: none;
}

.pagination a.active {
    background-color: #4CAF50;
    color: white;
    border-radius: 5px;
}

.pagination a:hover:not(.active) {
    background-color: #ddd;
    border-radius: 5px;
}
</style>

<?php
	$sumber = $baseApiUrl.'/product/productlist?category='.$pro;
 //$sumber = 'http://myacico.net:8080/myacico-service/api/product/productlist?category='.$pro;
 $konten = file_get_contents($sumber);

 $data = json_decode($konten, true);
$saw=$this->uri->segment(5);
if($saw==Null)
{
    $sort_id ="all";
}else{
    $sort_id = $saw;
}
//echo $data[1]["nama_lokasi"];

?>


    <?php
/*
    if ($pro == 1000003)  {
    echo "<div class='jumbotron jumbotron-billboard'>
      <div class='img'></div>
        <div class='container'>
            <div class='row'>
                <div class='col-lg-12'>
                    <h1 class='po1'>Laptop Gaming</h1>
                    <br/>
                    <p>

                    </p>

                </div>
            </div>
        </div>
    </div>";
  } else if ($pro == 1000038) {

    echo "<div class='jumbotron jumbotron-billboard'>
      <div class='img'></div>
        <div class='container'>
            <div class='row'>
                <div class='col-lg-12'>
                    <h1 class='po1'>Laptop 2 in  1</h1>
                    <br/>
                    <p>

                    </p>

                </div>
            </div>
        </div>
    </div>";
  } else if ($pro == 1000015) {
    echo "<div class='jumbotron jumbotron-billboard'>
      <div class='img'></div>
        <div class='container'>
            <div class='row'>
                <div class='col-lg-12'>
                    <h1 class='po1'>Laptop Apple</h1>
                    <br/>
                    <p>

                    </p>

                </div>
            </div>
        </div>
    </div>";

  }  else if ($pro == 1000431)  {
    echo "<div class='w3l_banner_nav_right_banner7'>

    </div>";
  } else if ($pro == 1000009) {
    echo "<div class='jumbotron jumbotron-billboard'>
      <div class='img'></div>
        <div class='container'>
            <div class='row'>
                <div class='col-lg-12'>
                    <h1 class='po1'>Laptop Bisnis</h1>
                    <br/>
                    <p>

                    </p>

                </div>
            </div>
        </div>
    </div>";
  }else if($pro == 1000231) {
    echo "<div class='jumbotron jumbotron-billboard'>
      <div class='img'></div>
        <div class='container'>
            <div class='row'>
                <div class='col-lg-12'>
                    <h1 class='po1'>Toner Printer</h1>
                    <br/>
                    <p>

                    </p>

                </div>
            </div>
        </div>
    </div>";
  } else if($pro == 1000235) {
    echo "<div class='jumbotron jumbotron-billboard'>
      <div class='img'></div>
        <div class='container'>
            <div class='row'>
                <div class='col-lg-12'>
                    <h1 class='po1'>Printer Inkjet</h1>
                    <br/>
                    <p>

                    </p>

                </div>
            </div>
        </div>
    </div>";
  } else if($pro == 1000236) {
    echo "<div class='jumbotron jumbotron-billboard'>
      <div class='img'></div>
        <div class='container'>
            <div class='row'>
                <div class='col-lg-12'>
                    <h1 class='po1'>Printer All In One</h1>
                    <br/>
                    <p>

                    </p>

                </div>
            </div>
        </div>
    </div>";
 } else if($pro == 1000237){
   echo "<div class='jumbotron jumbotron-billboard'>
     <div class='img'></div>
       <div class='container'>
           <div class='row'>
               <div class='col-lg-12'>
                   <h1 class='po1'>Printer Laser</h1>
                   <br/>
                   <p>

                   </p>

               </div>
           </div>
       </div>
   </div>";
  } else if ($pro == 1000473) {
    echo "<div class='jumbotron jumbotron-billboard'>
      <div class='img'></div>
        <div class='container'>
            <div class='row'>
                <div class='col-lg-12'>
                    <h1 class='po1'>Laptop Consumer</h1>
                    <br/>
                    <p>

                    </p>

                </div>
            </div>
        </div>
    </div>";
  }  else {

    echo "<div class='jumbotron jumbotron-billboard2'>
      <div class='img'></div>
        <div class='container'>
            <div class='row'>
                <div class='col-lg-12'>
        <br/>
                    <br/>
                    <p>

                    </p>

                </div>
            </div>
        </div>
    </div>";
    }

*/
     ?>



    <div style='border-bottom:3px solid #c40202; padding:10px 0px 10px 0px; margin-bottom:20px;'>
       <div class="col-sm-8">
         <div class="row">
           <div class="col-sm-3">
             Total items <?php echo $totalItem; ?>
          </div>
          <div class="col-sm-9">
             Tampilan <span style='font-size:15px; color:#e30c0c'><i class="fa fa-list" aria-hidden="true"></i></span> <span style='font-size:15px'><a href='#' class='list-item' data-toggle="tooltip" title="Grid View" id='viewGrid'><i class="fa fa-th-large" aria-hidden="true" id='btn_list'></i></a>
               <img src="<?php echo base_url('images/general/Spinner.gif');?>" id="spinner_img" style="display:none"></span>
           </div>
        </div>


        <!-- <strong>Category Title</strong>

        <div class="btn-group">
            <a href="#" id="list" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-th-list">
            </span> List</a> <a href="#" id="grid" class="btn btn-default btn-sm"><span
                class="glyphicon glyphicon-th"></span> Grid</a>

        </div> -->
       </div>
        <div class="col-sm-4">
          <div class="row">
          <div class="col-sm-3">
              <strong>Urutkan: </strong>
          </div>
          <div class="col-sm-9">
               <div class="row my-sort-product">
                   <select name="urutkan" class="form-control" onchange='filter(this)'>
                   <option value='5' <?php if($sort_id=='5'){echo"selected";}?>>Produk Terbaru</option>
                   <option value='1' <?php if($sort_id=='1'){echo"selected";}?>>Nama: A Ke Z</option>
                   <option value='2' <?php if($sort_id=='2'){echo"selected";}?>>Nama: Z Ke A</option>
                   <option value='3' <?php if($sort_id=='3'){echo"selected";}?>>Harga: Rendah Ke Tinggi</option>
                   <option value='4' <?php if($sort_id=='4'){echo"selected";}?>>Harga: Tinggi Ke Rendah</option>
                   </select>
                </div>
              </div>
          </div>


      </div>
        <div style="clear:both"></div>
    </div>


    <div class='row'>
      <?php
      if($totalItem==0){
        echo"<center>Maaf item yang Anda cari belum tersedia.</center>";
      }else{

      $no = $posisi+1;
      foreach($hasil as $data){
        if(isset($data['imageurl'])){
        $img_url= $data['imageurl'];
        }
        else{
        $img_url= null;
        }
      ?>

        <div class="col-xs-12" style='margin-bottom:10px;'>
          <div class='row'>
              <div class="col-xs-2">
                <a href="<?php echo base_url('product/detail/'.$data['m_product_id'].'/'.$data['alias']);?>">
                  <img class="group list-group-image" src="<?php echo $img_url; ?>" alt="<?php echo $data['name']; ?>" style="height:200px; width: auto;" onerror="this.onerror=null;this.src='<?php echo base_url('images/general/noimage.png');?>';"/>
                </a>
              </div>
              <div class="col-xs-7">
                <div class='nm-product-detail' style='text-align:left;margin-left:20px'>
                <b><a href="<?php echo base_url('product/detail/'.$data['m_product_id'].'/'.$data['alias']);?>"><?php echo $data['name']; ?></a></b>
                </div>
              </div>
              <div class="col-xs-3"><center>
                <p class="lead">
                Rp.<?php echo money($data['pricelist']); ?></p>
                <?php
                if($data['stock'] < 1){
                  echo "<div class='yu'>Stock : Tidak Tersedia</div>";
                }else{
                  echo "<div class='yu1'>Stock :  Tersedia</div>";
                }
                ?>
                <br>
                <center><input type='number' class='form-control' id='jmlItem<?php echo$data['m_product_id'];?>' style='width:70px' value='1' min='1'></center><br>


              <div class="btn-group">
                <button type="button" class="btn btn-danger"  onClick="addToCart('<?php echo$data['m_product_id'];?>','<?php echo$data['pricelist'];?>','<?php echo$img_url;?>','<?php echo$data['name'];?>','<?php echo$data['stock'];?>','<?php echo$data['weight']; ?>')"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Add To Cart</button>

                <?php
                if($data['isWishList'] =='Y')
                {
                ?>

                <button type="button" class="btn btn-warning" onClick="addWishlist('<?php echo$data['m_product_id'];?>','<?php echo$data['name'];?>','<?php echo$img_url;?>')"><i class="fa fa-heart"  style="font-size:15px;color:grey;"  aria-hidden="true"></i> Wishlist</button>
                <?php }else{
                ?>

                <button type="button" class="btn btn-success" onClick="addWishlist('<?php echo$data['m_product_id'];?>','<?php echo$data['name'];?>','<?php echo$img_url;?>')"><i class="fa fa-heart" style="color:#dffd54;" aria-hidden="true"></i> Wishlist</button>

                <?php }
                ?>

              </div></center>
            </div>
          </div>

          <div class="col-xs-12" style='border-top:1px solid #e30c0c'>
          </div>
        </div>
      <?php } } ?>
      </div>





<div style="clear:both"></div>

<div class='my-paging'>
  <?php
    if($page>1){
      $previous=$page-1;
      $first =  site_url('product/listItem/'.$pro.'/'.$alias.'/'.$sort_id.'/1');
      $prev =  site_url('product/listItem/'.$pro.'/'.$alias.'/'.$sort_id.'/'.$previous);
      echo "<a href=$first class='my-paging-btn'><< First</a> ";
      echo "<a href=$prev class='my-paging-btn'>< Previous</a> ";
    }else{
      echo"<< First < Previous ";
    }

    //angka awal
    $angka = ($page > 3 ? "...":"");
    for($i=$page-1;$i<$page;$i++){
      if($i<1)
        continue;
        $hal =  site_url('product/listItem/'.$pro.'/'.$alias.'/'.$sort_id.'/'.$i);
        $angka .="<a href=$hal class='my-paging-list'>$i</a>";

    }

    //angka tengah
    $angka.="<span class='my-paging-list-on'>$page</span>";
    for($i=$page+1;$i<($page+3);$i++){
      if($i>$jpage)
        break;
        $hal =  site_url('product/listItem/'.$pro.'/'.$alias.'/'.$sort_id.'/'.$i);
        $angka .="<a href=$hal class='my-paging-list'>$i</a>";
    }

    //angka akhir
    $hal =  site_url('product/listItem/'.$pro.'/'.$alias.'/'.$sort_id.'/'.$jpage);
    $angka .=($page+2<$jpage ? "...<a href=$hal class='my-paging-list'>$jpage</a>":"");

    //cetak semua angka
    echo "$angka";

    //next
    if($page<$jpage){
      $next = $page+1;
      $next =  site_url('product/listItem/'.$pro.'/'.$alias.'/'.$sort_id.'/'.$next);
      $last =  site_url('product/listItem/'.$pro.'/'.$alias.'/'.$sort_id.'/'.$jpage);
      echo " <a href=$next class='my-paging-btn'>Next >></a>";
      echo " <a href=$last class='my-paging-btn'>Last ></a>";
    }else{
      echo"Next >  Last >>";
    }



  ?>
</div>



<script type="text/javascript">

$(document).ready(function() {
    $('#list').click(function(){event.preventDefault();$('#products .item').addClass('list-group-item');});
    $('#grid').click(function(){event.preventDefault();$('#products .item').removeClass('list-group-item');});
		$('[data-toggle="tooltip"]').tooltip();
    $("#viewGrid").click(function(){
      $("#btn_list").hide();
      $("#spinner_img").show();
      var dataString = 'id=grid';
      $.ajax
    		({
    		type: "POST",
    		url: "<?php echo site_url('product/changeView'); ?>",
    		data: dataString,
    		success:function(data){
          window.location.reload();
    			}

    		});

    });
});


function filter(id){
 //  console.log('sam',$('#sort_id').val(id.value));
  window.location.replace("<?php echo site_url('product/listItem/'.$pro.'/'.$alias.'/'); ?>"+id.value);

}


var token = document.cookie.split('x-auth=')[1].split(';').shift();
function addWishlist(id,name,imageurl){
	var dataString = 'id='+id;

	if(token){

	$.ajax
		({
		type: "POST",
		url: "<?php echo site_url('product/addWishlist'); ?>",
		data: dataString,
		success:function(data){

				if(data==1){

					$.confirm({
						title: name,
						content: '<img src="'+imageurl+'" style="margin-bottom:10px">'+'<p>Item berhasil ditambahkan kedalam wishlist<p>',
						autoClose: 'close|3000',
						buttons: {
							close: function () {
								//$.alert('action is canceled');
							}
						},
						closeIcon: true,
						closeIconClass: 'fa fa-close'
					});
				}else{
					$.dialog({
						title: name,
						content: 'Item gagal ditambahkan!',
						autoClose: 'close|50000',
						buttons: {
							close: function () {
								//$.alert('action is canceled');
							}
						},
						closeIcon: true,
						closeIconClass: 'fa fa-close'

					});
				}
			}
		});

	}else{


        $.ajax({
                type: "POST",
		url: "<?php echo site_url('customer/signin'); ?>",
		data: dataString,
                success:function(data){
                    console.log('oooo',data);

                 window.location.replace(base_url+"customer/signin/"+id);
                }

        })
	}
}


function addToCart(m_product_id,pricelist,imageurl,name,stock,weight){

	var jmlItem = $('#jmlItem'+m_product_id).val();
	var dataString = 'm_product_id='+ m_product_id+'&pricelist='+ pricelist+'&imageurl='+ imageurl+'&name='+ name+'&stock='+stock+'&jmlItem='+jmlItem+'&weight='+weight;

	if(jmlItem<=0){
		$.dialog({
			title: 'Alert!',
			content: 'Silakan masukan jumlah item dengan benar',
			autoClose: 'close|3000',
			buttons: {
				close: function () {
					//$.alert('action is canceled');
				}
			},
			closeIcon: true,
			closeIconClass: 'fa fa-close'
		});

	}else{

		var cookie = document.cookie.split('x-auth=');
		if(cookie.length > 1){
			var token = cookie[1].split(';').shift();
			var apiurl = api_base_url +'/order/cart/additem';
			var m_product_id = m_product_id;
			var qty = jmlItem;
			var pricelist = pricelist;
			var weight = weight;

			var success = function(r){

				$.confirm({
					title: name,
					content: '<img src="'+imageurl+'" style="margin-bottom:10px">'+'<p>'+jmlItem+' Item berhasil ditambahkan<p>',
					autoClose: 'close|3000',
					buttons: {
						close: function () {
							//$.alert('action is canceled');
						}
					},
					closeIcon: true,
					closeIconClass: 'fa fa-close'
				});

				//Buat update cart, fungsi ini ada di file header.php
				totalCart();
			};

			$.ajax({ type:"POST", contentType: "application/json", data:JSON.stringify(
				{
					"productId":m_product_id,
					"qty":qty,
					"price":pricelist,
					"weightPerItem":weight
				}
			) , url: apiurl, headers: {"token":token}, success: success, error: error });

			var error = function(er){
			  console.log('OK:', er);
			  $.alert({
				title: 'Alert!',
				content: 'koneksi tidak berhasil, silahkan coba lagi!',
			  });
			};


		}else{

			$.ajax
			({
			type: "POST",
			url: "<?php echo site_url('cart/addToCart'); ?>",
			data: dataString,
			success:function(data){

					if(data=='stockkosong'){
						$.dialog({
							title: name,
							content: 'Item gagal ditambahkan, jumlah melebihi stock yang ada!',
							autoClose: 'close|3000',
							buttons: {
								close: function () {
									//$.alert('action is canceled');
								}
							},
							closeIcon: true,
							closeIconClass: 'fa fa-close'
						});
					}else
					if(data!='gagal'){

						$(".totalCart").html(data);
						$.confirm({
							title: name,
							content: '<img src="'+imageurl+'" style="margin-bottom:10px">'+'<p>'+jmlItem+' Item berhasil ditambahkan kedalam keranjang<p>',
							autoClose: 'close|3000',
							buttons: {
								close: function () {
									//$.alert('action is canceled');
								}
							},
							closeIcon: true,
							closeIconClass: 'fa fa-close'
						});
					}else{
						$.dialog({
							title: name,
							content: 'Item gagal ditambahkan!',
							autoClose: 'close|3000',
							buttons: {
								close: function () {
									//$.alert('action is canceled');
								}
							},
							closeIcon: true,
							closeIconClass: 'fa fa-close'
						});
					}
				}
			});


		}
	}
}





</script>

<!-- Start Imgslide -->
<div class="home-slide9 owl-carousel nav-style2 nav-center-center" data-items="1" data-nav="true" data-dots="false"
	data-loop="true" data-autoplay="true">
	<div class="item-slide">
		<img src="images/slides/21.jpg" alt="">
	</div>
	<div class="item-slide">
		<img src="images/slides/22.jpg" alt="">
	</div>
	<div class="item-slide">
		<img src="images/slides/23.jpg" alt="">
	</div>
</div>

<!-- End Imgslide -->

<div class="main-container no-slidebar">
	<div class="container">
		<div class="row">
			<div class="main-content col-sm-12">
				<div class="shop-top">
					<div class="shop-top-left">
						<div class="breadcrumbs">
							<h1>Sản phẩm</h1>
						</div>
					</div>
				</div>
				<ul class="product-list-grid desktop-columns-4 tablet-columns-3 mobile-columns-1 row flex-flow">

					<?php

					foreach ($listsanpham as $sanpham) {
						extract($sanpham);

						$linksp = "index.php?act=chitietsp&id=" . $id;

						echo '<li class="product-item col-xs-12 col-sm-4 col-md-3">
								<div class="product-inner">
								<div class="product-thumb has-back-image">
								<form action="index.php?act=addtocart method="post">
								<input type="hidden" name="id" value="'.$id.'">
								
								<a href="' . $linksp . '"><img src="../upload_file/' . $img . '" alt=""></a>
								<a class="back-image" href=""><img src=""
									alt=""></a>
								</div>
								<div class="product-info">
								
								<h3 class="product-name"><a href="' . $linksp . '">' . $tensp . '</a></h3>
								<span class="price">
								<ins style="color:red;">' . $giasp . ' VNĐ</ins>
									</span>
								<input type="submit" name="addtocart" value="Thêm vào giỏ hàng">
								</form>
								</div>
								
							</div>
							</li>';
					}
					?>
				</ul>


				<!-- <ul class="product-list-grid desktop-columns-4 tablet-columns-3 mobile-columns-1 row flex-flow">
					<li class="product-item col-xs-12 col-sm-4 col-md-3">
						<div class="product-inner">
							<div class="product-thumb has-back-image">
								<a href="index.php?act=chitietsp"><img src="images/products/3.jpg" alt=""></a>
								<a class="back-image" href="index.php?act=chitietsp"><img src="images/products/4.jpg"
										alt=""></a>

							</div>
							<div class="product-info">
								<h3 class="product-name"><a href="#">Quần áo nam phong cách</a></h3>
								<span class="price">
									<ins style="color:red;">85.000 VNĐ</ins>
								</span>
								<a href="index.php?act=chitietsp" class="button">Thêm vào giỏ hàng</a>
							</div>
						</div>
					</li>
				</ul> -->
			</div>
		</div>
	</div>
</div>











</div>

<?php include "view//menu/3hopcn.php"; ?>
<div class="main-container no-slidebar">
	<div class="container">
		<div class="row">
			<div class="main-content col-sm-12">
				<div class="shop-top">
					<div class="shop-top-left">
						<div class="breadcrumbs">
		                    <a href="index.php">Home</a>
		                    <span>Sản phẩm</span>
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
								<a href="'.$linksp.'"><img src="../upload_file/'.$img.'" alt=""></a>
								<a class="back-image" href=""><img src=""
									alt=""></a>
								</div>
								<div class="product-info">
								<h3 class="product-name"><a href="'.$linksp.'">'.$tensp.'</a></h3>
								<span class="price">
								<ins style="color:red;">'.$giasp.'</ins>
									</span>
								<a href="index.php?act=chitietsp" class="button">Thêm vào giỏ hàng</a>
								</div>
							</div>
							</li>';
					}
					?>
				</ul>
			</div>
		</div>
	</div>
</div>
<?php include "menu/3hopcn.php"; ?>
<?php
/* @var $this yii\web\View */
use yii\helpers\Html;

$this->title = 'About';
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <!-- Page Title -->
	<section class="content_section inwhite page_title has_bg_image bg_header1 Gabriel_parallax">
		<div class="content clearfix">
			<h1 class=""><?= Html::encode('About Us') ?></h1>
			<div class="breadcrumbs">
				<a href="#"><?= Html::encode('Home') ?></a>
				<span class="crumbs-spacer"><i class="ico-angle-right"></i></span>
				<a href="#"><?= Html::encode('Pages') ?></a>
			</div>
		</div>
	</section>
    <!-- End Page Title -->

	<!-- Features 3-->
	<section class="content_section">
		<div class="container row_spacer clearfix">
			<div class="content">
				<div class="mato_title centered upper">
					<h2><span class="line"><span class="dot"></span></span>Our Features</h2>
				</div>
			</div>
			<!-- Rows Container -->
			<div class="div-icons_con style2 icon_box_no_border upper_title clearfix">
				<div class="col-md-6">
					<div class="div-serv">
						<a href="#"><span class="icon circle"><i class="ico-desktop2"></i></span></a>
						<div class="div-serv_con">
							<h3>Premium Sliders Included</h3>
							<span class="desc">There are many variations of demo text passed sages of Lorem Ipsum available the majority.</span>
						</div>
					</div>
					<div class="div-serv">
						<a href="#"><span class="icon circle"><i class="ico-tablet3"></i></span></a>
						<div class="div-serv_con">
							<h3>100% Responsive Layout</h3>
							<span class="desc">There are many variations of demo text passed sages of Lorem Ipsum available the majority.</span>
						</div>
					</div>
					<div class="div-serv">
						<a href="#"><span class="icon circle"><i class="ico-beaker"></i></span></a>
						<div class="div-serv_con">
							<h3>Powerful Performance</h3>
							<span class="desc">There are many variations of demo text passed sages of Lorem Ipsum available the majority.</span>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<?= Html::img('@web' . '/images/looking1.jpg') ?>
				</div>
			</div>
			<!-- End Rows Container -->
		</div>
	</section>
	<!-- End Features 3 -->
</div>

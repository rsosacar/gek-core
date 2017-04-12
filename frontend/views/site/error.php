<?php
/* @var $this yii\web\View */
use yii\helpers\Html;

/* @var $name string */
/* @var $message string */
/* @var $exception Exception */
$this->title = $name;
?>
<div class="site-error">

    <!-- Page Title -->
	<section class="content_section page_title">
		<div class="content clearfix">
			<h1 class="">Page not found</h1>
			<div class="breadcrumbs">
				<a href="#">Home</a>
				<span class="crumbs-spacer"><i class="ico-angle-right"></i></span>
				<a href="#">Page not found</a>
			</div>
		</div>
	</section>
    <!-- End Page Title -->

	<!-- Section -->
	<section class="content_section">
		<div class="container row_spacer clearfix">
			<div class="content">
				<div class="mato_desc centered">
					<p><b>Ooopps.!</b> The Page you were looking for doesn't exist</p>
				</div>
				<div class="page404">
					<span>404<span class="face404"></span></span>
				</div>
				<div class="centered">
					<?= Html::a(
						'<span>
							<i class="to_left ico-home5"></i><span>Back To Home Page</span><i class="to_right ico-home5"></i>
						</span>',
						['index'], ['class' => 'btn_a medium_btn bottom_space'])
					?>
				</div>
			</div>
		</div>
	</section>
	<!-- End Section -->

</div>

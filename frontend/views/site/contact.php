<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Contact';
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-contact">
    <!-- Page Title -->
	<section class="content_section inwhite page_title has_bg_image bg_header4 Gabriel_parallax">
		<div class="content clearfix">
			<h1 class="">Contacts Us</h1>
			<div class="breadcrumbs">
				<a href="#">Home</a>
				<span class="crumbs-spacer"><i class="ico-angle-right"></i></span>
				<a href="#">Pages</a>
			</div>
		</div>
	</section>
    <!-- End Page Title -->

    <!-- Contact Us -->
	<section class="content_section">
		<div class="content row_spacer pnone">
			<div class="rows_container clearfix">
				<div class="col-md-6">
					<h2 class="title1 upper"><i class="ico-pencil5"></i>Contact Information</h2>
					<div class="contact_details_row clearfix">
						<span class="icon">
							<i class="ico-location5"></i>
						</span>
						<div class="c_con">
							<span class="c_title">Address</span>
							<span class="c_detail">
								<span class="c_name">Main Office :</span>
								<span class="c_desc">NO.28 - 23 Street Name - City, Country</span>
							</span>
							<span class="c_detail">
								<span class="c_name">Customer Center :</span>
								<span class="c_desc">NO.123 - 45 Street Name - City, Country</span>
							</span>
						</div>
					</div>

					<div class="contact_details_row clearfix">
						<span class="icon">
							<i class="ico-bubble4"></i>
						</span>
						<div class="c_con">
							<span class="c_title">Phone Numbers</span>
							<span class="c_detail">
								<span class="c_name">Main Office :</span>
								<span class="c_desc">+000 123 456 789</span>
							</span>
							<span class="c_detail">
								<span class="c_name">Customer Support :</span>
								<span class="c_desc">+000 456 123 978</span>
							</span>
							<span class="c_detail">
								<span class="c_name">Sales :</span>
								<span class="c_desc">+000 123 456 789</span>
							</span>
						</div>
					</div>

					<div class="contact_details_row clearfix">
						<span class="icon">
							<i class="ico-paperplane"></i>
						</span>
						<div class="c_con">
							<span class="c_title">Email Address</span>
							<span class="c_detail">
								<span class="c_name">Customer support :</span>
								<span class="c_desc">info@mail.com</span>
							</span>
							<span class="c_detail">
								<span class="c_name">Technical support :</span>
								<span class="c_desc">support@mail.com</span>
							</span>
						</div>
					</div>

					<div class="contact_details_row clearfix">
						<span class="icon">
							<i class="ico-pen2"></i>
						</span>
						<div class="c_con">
							<span class="c_title">Other Datails</span>
							<span class="c_detail">
								<span class="c_name">Site Name :</span>
								<span class="c_desc">www.ideal-theme.com</span>
							</span>
						</div>
					</div>
				</div><!-- Grid -->

				<div class="col-md-6">
					<h2 class="title1 upper"><i class="ico-envelope3"></i>Get On Touch</h2>
<!--					<form class="hm_contact_form" method="post">-->
                        <?php $form = ActiveForm::begin(['id' => 'contact-form', 'class' => 'hm_contact_form']); ?>
						<div class="form_row clearfix">
							<label>
								<span class="hm_field_name">Name</span>
								<span class="hm_requires_star">*</span>
							</label>
                            <?= $form->field($model, 'name')->textInput(['autofocus' => true, 'class' => 'hm_input_text'])->label(false) ?>
						</div>
						<div class="form_row clearfix">
							<label>
								<span class="hm_field_name">Email</span>
								<span class="hm_requires_star">*</span>
							</label>
                            <?= $form->field($model, 'email')->textInput(['class' => 'hm_input_text'])->label(false) ?>
						</div>
						<div class="form_row clearfix">
							<label>
								<span class="hm_field_name">Subject</span>
                                <span class="hm_requires_star">*</span>
							</label>
                            <?= $form->field($model, 'subject')->textInput(['class' => 'hm_input_text'])->label(false) ?>
						</div>
						<div class="form_row clearfix">
							<label>
								<span class="hm_field_name">Message</span>
                                <span class="hm_requires_star">*</span>
							</label>
                            <?= $form->field($model, 'body')->textarea(['class' => 'hm_textarea'])->label(false) ?>
						</div>
                        <div class="form_row clearfix">
                            <label>
								<span class="hm_field_name">Captcha</span>
							</label>
                            <?= $form->field($model, 'verifyCode')->widget(Captcha::className(), [
                                'template' => '<div class="row"><div class="col-lg-6">{input}</div><div class="col-lg-3">{image}</div></div>',
                            ])->label(false) ?>
                        </div>
						<div class="form_row clearfix">
                            <?= Html::submitButton('<i class="ico-check3"></i> Send Your Message', ['class' => 'send_button full_button', 'name' => 'contact-button']) ?>
						</div>
                    <?php ActiveForm::end(); ?>
<!--                    </form>-->
				</div><!-- Grid -->
			</div>
		</div>
	</section>
    <!-- End Contact Us -->

</div>

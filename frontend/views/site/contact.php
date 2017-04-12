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
			<h1 class=""><?= Html::encode('Contacts Us') ?></h1>
			<div class="breadcrumbs">
				<a href="#"><?= Html::encode('Home') ?></a>
				<span class="crumbs-spacer"><i class="ico-angle-right"></i></span>
				<a href="#"><?= Html::encode('Pages') ?></a>
			</div>
		</div>
	</section>
    <!-- End Page Title -->
    <!-- Contact Us -->
	<section class="content_section">
		<div class="content row_spacer pnone">
			<div class="rows_container clearfix">
				<div class="col-md-6">
					<h2 class="title1 upper"><i class="ico-pencil5"></i><?= Html::encode('Contact Information') ?></h2>
					<div class="contact_details_row clearfix">
						<span class="icon">
							<i class="ico-location5"></i>
						</span>
						<div class="c_con">
							<span class="c_title"><?= Html::encode('Address') ?></span>
							<span class="c_detail">
								<span class="c_name"><?= Html::encode('Main Office :') ?></span>
								<span class="c_desc"><?= Html::encode('NO.28 - 23 Street Name - City, Country') ?></span>
							</span>
							<span class="c_detail">
								<span class="c_name"><?= Html::encode('Customer Center :') ?></span>
								<span class="c_desc"><?= Html::encode('NO.123 - 45 Street Name - City, Country') ?></span>
							</span>
						</div>
					</div>

					<div class="contact_details_row clearfix">
						<span class="icon">
							<i class="ico-bubble4"></i>
						</span>
						<div class="c_con">
							<span class="c_title"><?= Html::encode('Phone Numbers') ?></span>
							<span class="c_detail">
								<span class="c_name"><?= Html::encode('Main Office :') ?></span>
								<span class="c_desc"><?= Html::encode('+000 123 456 789') ?></span>
							</span>
							<span class="c_detail">
								<span class="c_name"><?= Html::encode('Customer Support :') ?></span>
								<span class="c_desc"><?= Html::encode('+000 456 123 978') ?></span>
							</span>
							<span class="c_detail">
								<span class="c_name"><?= Html::encode('Sales :') ?></span>
								<span class="c_desc"><?= Html::encode('+000 123 456 789') ?></span>
							</span>
						</div>
					</div>

					<div class="contact_details_row clearfix">
						<span class="icon">
							<i class="ico-paperplane"></i>
						</span>
						<div class="c_con">
							<span class="c_title"><?= Html::encode('Email Address') ?></span>
							<span class="c_detail">
								<span class="c_name"><?= Html::encode('Customer support :') ?></span>
								<span class="c_desc"><?= Html::encode('info@mail.com') ?></span>
							</span>
							<span class="c_detail">
								<span class="c_name"><?= Html::encode('Technical support :') ?></span>
								<span class="c_desc"><?= Html::encode('support@mail.com') ?></span>
							</span>
						</div>
					</div>

					<div class="contact_details_row clearfix">
						<span class="icon">
							<i class="ico-pen2"></i>
						</span>
						<div class="c_con">
							<span class="c_title"><?= Html::encode('Other Datails') ?></span>
							<span class="c_detail">
								<span class="c_name"><?= Html::encode('Site Name :') ?></span>
								<span class="c_desc"><?= Html::encode('www.ideal-theme.com') ?></span>
							</span>
						</div>
					</div>
				</div>
                <!-- Grid -->

				<div class="col-md-6">
					<h2 class="title1 upper"><i class="ico-envelope3"></i><?= Html::encode('Get On Touch') ?></h2>
                    <?php $form = ActiveForm::begin(['id' => 'contact-form', 'class' => 'hm_contact_form']); ?>
                    <div class="form_row clearfix">
						<label>
							<span class="hm_field_name"><?= Html::encode('Name') ?></span>
							<span class="hm_requires_star"><?= Html::encode('*') ?></span>
						</label>
                        <?= $form->field($model, 'name')->textInput(['autofocus' => true, 'class' => 'hm_input_text'])->label(false) ?>
					</div>
					<div class="form_row clearfix">
						<label>
							<span class="hm_field_name"><?= Html::encode('Email') ?></span>
							<span class="hm_requires_star"><?= Html::encode('*') ?></span>
						</label>
                        <?= $form->field($model, 'email')->textInput(['class' => 'hm_input_text'])->label(false) ?>
					</div>
					<div class="form_row clearfix">
						<label>
							<span class="hm_field_name"><?= Html::encode('Subject') ?></span>
							<span class="hm_requires_star"><?= Html::encode('*') ?></span>
						</label>
                        <?= $form->field($model, 'subject')->textInput(['class' => 'hm_input_text'])->label(false) ?>
					</div>
					<div class="form_row clearfix">
						<label>
							<span class="hm_field_name"><?= Html::encode('Message') ?></span>
							<span class="hm_requires_star"><?= Html::encode('*') ?></span>
						</label>
                        <?= $form->field($model, 'body')->textarea(['class' => 'hm_textarea'])->label(false) ?>
					</div>
					<div class="form_row clearfix">
						<label>
							<span class="hm_field_name"><?= Html::encode('Captcha') ?></span>
						</label>
                        <?= $form->field($model, 'verifyCode')->widget(Captcha::className(), [
                            'template' => '<div class="row"><div class="col-lg-6 pl0">{input}</div><div class="col-lg-3">{image}</div></div>',
                        ])->label(false) ?>
					</div>
					<div class="form_row clearfix">
						<?= Html::submitButton('<i class="ico-check3 mr5"></i>' . Html::encode('Send Your Message'), ['class' => 'send_button full_button', 'name' => 'contact-button']) ?>
					</div>
                    <?php ActiveForm::end(); ?>
				</div>
                <!-- Grid -->
			</div>
		</div>
	</section>
    <!-- End Contact Us -->

</div>

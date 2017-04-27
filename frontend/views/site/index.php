<?php

/* @var $this yii\web\View */

use yii\captcha\Captcha;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = 'Geknology - wHercules';
?>
<div id="index" class="site-index">

    <header class="page-header bigHeader">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-sm-8">
                    <h1>This is another page Header</h1>
                    <p>Nullam sed tortor odio. Suspendisse tincidunt dictum nisi, nec convallis odio lacinia ac. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Vestibulum auctor enim id lectus vehicula non iaculis mauris sollicitudin.</p>
                    <a href="#" class="btn btn-lg btn-primary mb15">Click here for more information</a>
                </div>
                <div class="col-lg-3 col-sm-4 hidden-xs"> <?= Html::img(Yii::getAlias('@web') . '/images/theme-pics/home-girl.png', ['class' => 'img-responsive']) ?>
                </div>
            </div>
        </div>
    </header>

    <div class="body-content">

        <!-- services -->
        <section class="color1" id="services">
            <div class="title color2">
                <h1>Our services</h1>
                <h2 class="subTitle">We are doing a couple of things you might be interested in</h2>
            </div>
            <div class="container pb30 pt30 ">

                <div class="row">
                    <div class="col-md-6">
                        <div class="boxIconServices posLeft clearfix">
                            <i class="icon-heart iconBig iconRounded"></i>
                            <div class="boxContent">
                                <h2>Clean design</h2>
                                <p>Elegant layouts that help you organize<br/> your content in the best way</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="boxIconServices clearfix">
                            <i class="icon-plane-outline iconBig iconRounded"></i>
                            <div class="boxContent">
                                <h2>HTML5 &amp; CSS3</h2>
                                <p>Built with modern technologies<br/>like HTML5 and CSS3, SEO optimised</p>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="boxIconServices posLeft clearfix">
                            <i class="icon-resize-full-outline iconBig iconRounded"></i>
                            <div class="boxContent">
                                <h2>Responsive design</h2>
                                <p>Compatible with various desktop, tablet, and mobile devices.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="boxIconServices clearfix">
                            <i class="icon-edit iconBig iconRounded"></i>
                            <div class="boxContent">
                                <h2>Easy Customization</h2>
                                <p>Clear code and documentation, base on Bootstrap 3</p>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section>
        <!-- services -->

        <!-- parallax quote -->
        <section id="paralaxSlice1" data-stellar-background-ratio="0.5">
            <div class="maskParent">
                <div class="paralaxMask"></div>
                <div class="paralaxText container">
                    <i class="icon-megaphone "></i>
                    <blockquote class="bigTitle">Being a famous designer<br/>is like being a famous dentist<br/><small>NOREEN MORIOKA</small>
                    </blockquote>
                </div>
            </div>
        </section>
        <!-- parallax quote -->

        <section id="about" class="color0">
			<div class="title">
				<h1>About us</h1>
				<h2 class="subTitle">FAT CATZ is a versatile one page website template</h2>
			</div>
            <!-- section content -->
			<section class="pt30 pb30">
				<div class="container">
					<div class="row">
						<div class="col-sm-4">
                            <?= Html::img(Yii::getAlias('@web') . '/images/theme-pics/services.png', ['class' => 'img-responsive']) ?>
						</div>
						<div class="col-sm-4">
							<h2>Build your website, now!</h2>

							<p>This did not seem to encourage the witness at all: he kept shifting  from one foot to the other, looking uneasily at the Queen, and in  his confusion he bit a large piece out of his teacup instead of the  bread-and-butter.
							</p>

							<p>Just at this moment Alice felt a very curious sensation, which puzzled  her a good deal until she made out what it was: she was beginning to  grow larger again, and she thought at first she would get up and leave  the court; but on second thoughts she decided to remain where she was as  long as there was room for her.
							</p>
						</div>
						<div class="col-sm-4">
							<h2>FAT CATZ website template</h2>
							<p> The Hatter's remark seemed to have no sort of meaning in it, and yet it was certainly English. 'I don't quite understand you,' she said, as politely as she could. 'The Dormouse is asleep again,' said the Hatter, and he poured a little hot tea upon its nose. </p>
							<h3>I don't quite understand you</h3>
							<p> The Dormouse shook its head impatiently, and said, without opening its eyes, 'Of course, of course; just what I was going to remark myself.' 'Have you guessed the riddle yet?' the Hatter said, turning to Alice again. </p>
						</div>
					</div>
				</div>
			</section>
		</section>

        <!-- contact-->
        <section id="contactSlice" class="color0">
            <div class="title">
                <h1 class="noSubtitle">Contact us</h1>
            </div>
            <section class="pt30 pb30">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-4 pl30 pr30">
                            <h4>Address:</h4>
                            <address>
                                Himalaya Company<br/>
                                77 Mass. Ave., E14/E15<br/>
                                Cambridge, MA 02139-4307 USA <br/>
                            </address>
                            <h4>Phone:</h4>
                            <address>
                                615.987.1234<br/>
                            </address>
                        </div>
                        <div class="col-sm-8">
                            <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <?= $form->field($model, 'name') ?>
                                    </div>
                                    <div class="form-group">
                                        <?= $form->field($model, 'email') ?>
                                    </div>
                                    <div class="form-group">
                                        <?= $form->field($model, 'subject') ?>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <?= $form->field($model, 'body')->textarea(['rows' => 3]) ?>
                                    </div>
                                    <fieldset class="clearfix securityCheck">
                                        <legend>Security</legend>
                                        <div class="form-group">
                                            <?= $form->field($model, 'verifyCode')->widget(Captcha::className(), [
                                                'template' => '<div class="row"><div class="col-lg-6">{image}</div><div class="col-lg-6">{input}</div></div>',
                                            ])->label(false) ?>
                                        </div>
                                    </fieldset>
                                </div>
                                <div class="col-md-12">
                                    <div class="result"></div>
                                    <?= Html::submitButton('Submit', ['class' => 'btn btn-lg', 'name' => 'contact-button']) ?>
                                </div>
                            <?php ActiveForm::end(); ?>
                        </div>
                    </div>
                </div>
            </section>
        </section>
        <!-- contact-->
    </div>
</div>

<?php

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Asset bundle for the wAdmin files.
 */
class ThemeAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/master.css',
//        'css/colors.min.css',
//        'css/blue.css',
//        'css/coffee.css',
//        'css/colors.css',
        'css/custom.css',
//        'css/dark.css',
//        'css/green.css',
        'css/layout.css',
//        'css/light.css',
        'css/orange.css',
//        'css/pink.css',
//        'css/pygments-manni.css',
//        'css/red.css',
//        'css/sea-green.css',
//        'css/yellow.css',
        'js/animation-framework/animate.css',
//        'js/camera/css/camera.css',
//        'js/flexslider/flexslider.css',
        'js/isotope/css/style.css',
//        'js/layerslider/layerslider/css/layerslider.css',
//        'js/layerslider/layerslider/skins/borderlesslight/skin.css',
//        'js/layerslider/layerslider/skins/fullwidth/skin.css',
        'js/magnific-popup/magnific-popup.css',
//        'js/owl.carousel/owl-carousel/owl.carousel.css',
//        'js/owl.carousel/owl-carousel/owl.theme.css',
        'js/supersized/css/supersized.css',
        'js/supersized/theme/supersized.shutter.css',
        'font-icons/custom-icons/css/custom-icons.css',
        'font-icons/custom-icons/css/custom-icons-ie7.css',
    ];
    public $js = [
//        'js/camera/camera.min.js',
//        'js/easing/jquery.easing.1.3.js',
//        'js/flexslider/jquery.flexslider-min.js',
        'js/isotope/jquery.isotope.min.js',
        'js/isotope/jquery.isotope.sloppy-masonry.min.js',
//        'js/layerslider/layerslider/jQuery/jquery-transit-modified.js',
//        'js/layerslider/layerslider/js/layerslider.kreaturamedia.jquery.js',
//        'js/layerslider/layerslider/js/layerslider.transitions.js',
        'js/magnific-popup/jquery.magnific-popup.min.js',
        'js/modernizr-2.6.1.min.js',
//        'js/neko-contact-ajax-plugin/js/jquery.form.js',
        'js/neko-contact-ajax-plugin/js/jquery.validate.min.js',
//        'js/owl.carousel/owl-carousel/owl.carousel.min.js',
        'js/parallax/js/jquery.localscroll-1.2.7-min.js',
        'js/parallax/js/jquery.scrollTo-1.4.3.1-min.js',
//        'js/parallax/js/jquery.stellar.min.js',
//        'js/respond/respond.min.js',
//        'js/supersized/js/supersized.3.2.7.min.js',
//        'js/supersized/theme/supersized.shutter.min.js',
        'js/custom.js',
    ];
}

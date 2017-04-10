<?php

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Asset bundle for the Twitter bootstrap files.
 */
class ThemeAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/animate.min.css',
        'css/camera.css',
        'css/colors.css',
        'css/dark.css',
        'css/extralayers.css',
        'css/flexslider.css',
        'css/icon-fonts.css',
        'css/magnific-popup.css',
        'css/mediaelementplayer.css',
        'css/rtl.css',
        'css/scattered-slider.css',
        'css/settings.css',
        'css/shop.css',
        'css/sliders.css',
        'css/style.css',
    ];
    public $js = [
        'js/boxesFx.js',
        'js/camera.min.js',
        'js/chart.min.js',
        'js/chart-functions.js',
        'js/flexslider-min.js',
        'js/functions.js',
        'js/gmaps.js',
        'js/isotope.pkgd.min.js',
        'js/jquery.mb.YTPlayer.min.js',
        'js/jquery.mousewheel.js',
        'js/jquery.nouislider.all.min.js',
        'js/jquery.singlePageNav.min.js',
        'js/jquery.themepunch.enablelog.js',
        'js/jquery.themepunch.revolution.min.js',
        'js/jquery.themepunch.tools.min.js',
        'js/jquery.videobackground.js',
        'js/jquery-migrate-1.2.1.min.js',
        'js/mediaelement-and-player.min.js',
        'js/modernizr.js',
        'js/photostack.js',
        'js/plugins.js',
        'js/progressbar.min.js',
        'js/wobbly-min.js',
        'js/world-maps/examples.js',
        'js/world-maps/france-departments.js',
        'js/world-maps/jquery.mapael.js',
        'js/world-maps/jquery.mousewheel.min.js',
        'js/world-maps/raphael-min.js',
        'js/world-maps/usa_states.js',
        'js/world-maps/world_countries.js',
    ];
}

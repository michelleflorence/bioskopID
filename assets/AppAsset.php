<?php
/**
 * @link https://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license https://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        // 'css/site.css',
        "templatebootstrap/css/open-iconic-bootstrap.min.css",
        "templatebootstrap/css/animate.css",
        "templatebootstrap/css/owl.carousel.min.css",
        "templatebootstrap/css/owl.theme.default.min.css",
        "templatebootstrap/css/magnific-popup.css",
        "templatebootstrap/css/aos.css",
        "templatebootstrap/css/ionicons.min.css",
        "templatebootstrap/css/bootstrap-datepicker.css",
        "templatebootstrap/css/jquery.timepicker.css",
        "templatebootstrap/css/flaticon.css",
        "templatebootstrap/css/icomoon.css",
        "templatebootstrap/css/style.css",
        "templatewebsite/site.css",
    ];
    public $js = [
        "templatebootstrap/js/jquery.min.js",
        "templatebootstrap/js/jquery-migrate-3.0.1.min.js",
        "templatebootstrap/js/popper.min.js",
        "templatebootstrap/js/bootstrap.min.js",
        "templatebootstrap/js/jquery.easing.1.3.js",
        "templatebootstrap/js/jquery.waypoints.min.js",
        "templatebootstrap/js/jquery.stellar.min.js",
        "templatebootstrap/js/owl.carousel.min.js",
        "templatebootstrap/js/jquery.magnific-popup.min.js",
        "templatebootstrap/js/aos.js",
        "templatebootstrap/js/jquery.animateNumber.min.js",
        "templatebootstrap/js/bootstrap-datepicker.js",
        "templatebootstrap/js/jquery.timepicker.min.js",
        "templatebootstrap/js/scrollax.min.js",
        "templatebootstrap/js/main.js",
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap5\BootstrapAsset'
    ];
}

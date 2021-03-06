<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/styles.css',
        'css/site.css',
    ];
    public $js = [
        'http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js',
        'js/scripts.min.js',
    ];
    public $depends = [
        /*'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',*/
    ];
}

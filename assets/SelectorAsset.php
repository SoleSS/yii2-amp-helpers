<?php

namespace soless\amp\assets;

use yii\web\AssetBundle;

/**
 * @author Michael Nordheimer <nordheimerm@gmail.com>
 */
class SelectorAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [

    ];
    public $js = [
        'https://cdn.ampproject.org/v0/amp-selector-0.1.js',
    ];
    public $depends = [
        '\soless\amp\assets\AmpAsset',
    ];
    public $jsOptions = [
        'async' => 'async',
        'custom-element' => 'amp-selector',
        'position' => \yii\web\View::POS_HEAD,
    ];
}

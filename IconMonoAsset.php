<?php

namespace d3yii2\d3icon;

use yii\web\AssetBundle;

class IconMonoAsset extends AssetBundle
{
    public $sourcePath = '@vendor/npm-asset/mono-icons';
    
    public $css = [
        'iconfont/icons.css',
    ];
}

<?php

namespace d3yii2\d3icon\components;

use d3yii2\d3icon\IconAsset;
use yii\base\Component;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use Yii;

class IconFa extends Component
{
    const TYPE_SOLID = 'fa-solid';
    
    /**
     * @return string|void
     */
    public function render($name, $type = self::TYPE_SOLID, $options)
    {
        $options = ArrayHelper::merge(['class' => $type . ' fa-' . $name], $options);
        return Html::tag('i', '', $options);
    }
}
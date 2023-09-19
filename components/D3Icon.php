<?php

namespace d3yii2\d3icon\components;

use d3yii2\d3icon\IconAsset;
use yii\base\Component;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use Yii;

class D3Icon extends Component
{
    public const TYPE_SVG = 'svg';
    public const TYPE_FONTAWESOME = 'fa';

    /**
     * @return string|void
     */
    public static function render($name, $type, $options)
    {
        switch ($type) {
            case self::TYPE_SVG:
                
                $options = ArrayHelper::merge(['alt' => $name], $options);
                
                $path = Yii::$app->assetManager
                        ->getBundle(IconAsset::class)
                        ->baseUrl . DIRECTORY_SEPARATOR . 'svg' . DIRECTORY_SEPARATOR . $name;
                return Html::img($path . '.svg', $options);
            default:
                $options = ArrayHelper::merge(['class' => 'fa-solid fa-' . $name], $options);
                return Html::tag('i', '', $options);
        }
    }
}
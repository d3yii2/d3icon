<?php

namespace d3yii2\d3icon\components;

use d3yii2\d3icon\IconAsset;
use yii\base\Component;
use yii\helpers\Html;

class D3Icon extends Component
{
    public const TYPE_SVG = 'svg';
    public const TYPE_FONTAWESOME = 'fa';

    public $type = self::TYPE_SVG;
    public $icon;

    /**
     * @return string|void
     */
    public function render()
    {
        switch ($this->type) {
            case self::TYPE_SVG:
                $path = Yii::$app->assetManager
                        ->getBundle(IconAsset::class)
                        ->baseUrl . DIRECTORY_SEPARATOR . 'svg' . DIRECTORY_SEPARATOR . $this->icon;
                return Html::img($path . '.svg');
            default:
                return Html::tag('i', '', ['class' => 'fa-solid fa-' . $this->icon]);
        }
    }
}
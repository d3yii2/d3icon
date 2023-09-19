<?php

namespace d3yii2\d3icon;

use IconAsset;
use Yii;
use yii\helpers\Html;
use d3yii2\d3icon\components\D3Icon;

/**
 * Class Icon
 * @package d3yii2\d3icon
 */
class Icon
{
    /**
     * @param $name
     * @param string $type
     * @return string|void
     */
    public static function svg($name, $options = [])
    {
        return D3Icon::render($name, D3Icon::TYPE_SVG, $options);
    }

    /**
     * @param $name
     * @param string $type
     * @return string|void
     */
    public static function fa($name, $options = [])
    {
        return D3Icon::render($name, D3Icon::TYPE_FONTAWESOME, $options);
    }
}

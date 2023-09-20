<?php

namespace d3yii2\d3icon;

use d3yii2\d3icon\components\D3IconFa;
use d3yii2\d3icon\components\IconFa;
use d3yii2\d3icon\components\IconSvg;
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
        $icon = new IconSvg();
        
        return $icon->render($name, $options);
    }

    /**
     * @param $name
     * @param string $type
     * @return string|void
     */
    public static function fa($name, $type = IconFa::TYPE_SOLID, $options = [])
    {
        $icon = new IconFa();
        
        return $icon->render($name, $type, $options);
    }
}

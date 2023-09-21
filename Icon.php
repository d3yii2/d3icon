<?php

namespace d3yii2\d3icon;

use d3yii2\d3icon\components\IconFa;
use d3yii2\d3icon\components\IconSvg;
use yii\base\Exception;

/**
 * Class Icon
 * @package d3yii2\d3icon
 */
class Icon
{

    public const TYPE_SVG = 'svg';
    public const TYPE_FA = 'fa';

    /**
     * @throws Exception
     */
    public static function icon(string $type, string $name, array $options = []): ?string
    {
        if ($type === self::TYPE_SVG) {
            return self::svg($name, $options);
        }
        if ($type === self::TYPE_FA) {
            return self::fa($name, $options);
        }
        throw new Exception('Undefined icon type: ' . $type);
    }

    /**
     * @param string $name
     * @param array $options
     * @return string
     */
    public static function svg(string $name, array $options = []): string
    {
        return (new IconSvg())->render($name, $options);
    }

    /**
     * @param string $name
     * @param array $options
     * @param string $type
     * @return string
     */
    public static function fa(
        string $name,
        array $options = [],
        string $type = IconFa::TYPE_SOLID
    ): string
    {
        return (new IconFa())->render($name, $type, $options);
    }
}

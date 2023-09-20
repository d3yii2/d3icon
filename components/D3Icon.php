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

    public const SVG_ALERT_CIRCLE = 'alert-circle';
    public const SVG_ALERT_TRIANGLE_SOLID = 'alert-triangle-solid';
    public const SVG_ARCHIVE = 'archive';
    public const SVG_ARROW_NARROW_DOWN_LEFT = 'arrow-narrow-down-left';
    public const SVG_ARROW_NARROW_LEFT = 'arrow-narrow-left';
    public const SVG_ARROW_NARROW_UP = 'arrow-narrow-up';
    public const SVG_ARROW_NARROW_UP_RIGHT = 'arrow-narrow-up-right';
    public const SVG_BELL_1 = 'bell-1';
    public const SVG_CALENDAR = 'calendar';
    public const SVG_CALENDAR_CHECK_1 = 'calendar-check-1';
    public const SVG_CAMERA_PLUS = 'camera-plus';
    public const SVG_CHECK = 'check';
    public const SVG_CHECK_CIRCLE_SOLID = 'check-circle-solid';
    public const SVG_CHEVRON_DOWN = 'chevron-down';
    public const SVG_CHEVRON_LEFT = 'chevron-left';
    public const SVG_CHEVRON_RIGHT = 'chevron-right';
    public const SVG__CHEVRON_UP = 'chevron-up';
    public const SVG_CIRCLE = 'circle';
    public const SVG_CLIPBOARD_CHECK = 'clipboard-check';
    public const SVG_COINS_3 = 'coins-3';
    public const SVG_COPY_1 = 'copy-1';
    public const SVG_DATAFLOW_3 = 'dataflow-3';
    public const SVG_DATAFLOW_4 = 'dataflow-4';
    public const SVG_DOTS_VERTICAL = 'dots-vertical';
    public const SVG_DOWNLOAD_1 = 'download-1';
    public const SVG_DOWNLOAD_CLOUD_1_SOLID = 'download-cloud-1-solid';
    public const SVG_EDIT_5_ = 'edit-5';
    public const SVG_EYE = 'eye';
    public const SVG_EYE_OFF = 'eye-off';
    public const SVG_FILE_2 = 'file-2';
    public const SVG_FILTER_FUNNEL_2 = 'filter-funnel-2';
    public const SVG_HELP_CIRCLE = 'help-circle';
    public const SVG_HOME = 'home-1';
    public const SVG_INFO_CIRCLE_SOLID = 'info-circle-solid';
    public const SVG_KEY_1 = 'key-1';
    public const SVG_LANGUAGE = 'language';
    public const SVG_LOCK_2 = 'lock-2';
    public const SVG_LOG_OUT_4 = 'log-out-4';
    public const SVG_MENU = 'menu';
    public const SVG_MENU_3 = 'menu-3';
    public const SVG_MINUS = 'minus';
    public const SVG_MINUS_SQUARE_SOLID = 'minus-square-solid';
    public const SVG_PHONE_SOLID = 'phone-solid';
    public const SVG_PIE_CHART_1 = 'pie-chart-1';
    public const SVG_PLUS = 'plus';
    public const SVG_PLUS_SQUARE = 'plus-square';
    public const SVG_SEARCH_SM = 'search-sm';
    public const SVG_SETTINGS_2 = 'settings-2';
    public const SVG_SHARE_4 = 'share-4';
    public const SVG_STAR_1 = 'star-1';
    public const SVG_STAR_1_SOLID = 'star-1-solid';
    public const SVG_TRASH = 'trash-4';
    public const SVG_USER_PLUS_2 = 'user-plus-2';
    public const SVG_USERS_1 = 'users-1';
    public const SVG_USERS_LEFT = 'users-left';
    public const SVG_X_CIRCLE_SOLID = 'x-circle-solid';
    public const SVG_X_CLOSE = 'x-close';
    
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
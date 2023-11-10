<?php

namespace d3yii2\d3icon\components;

use d3yii2\d3icon\IconAsset;
use yii\base\Component;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use Yii;

class IconSvg extends Component
{
    public const ALERT_CIRCLE = 'alert-circle';
    public const ALERT_TRIANGLE_SOLID = 'alert-triangle-solid';
    public const ARCHIVE = 'archive';
    public const ARROW_NARROW_DOWN_LEFT = 'arrow-narrow-down-left';
    public const ARROW_NARROW_LEFT = 'arrow-narrow-left';
    public const ARROW_NARROW_UP = 'arrow-narrow-up';
    public const ARROW_NARROW_UP_RIGHT = 'arrow-narrow-up-right';
    public const BELL_1 = 'bell-1';
    public const CALENDAR = 'calendar';
    public const CALENDAR_CHECK_1 = 'calendar-check-1';
    public const CAMERA_PLUS = 'camera-plus';
    public const CHECK = 'check';
    public const CHECK_CIRCLE_SOLID = 'check-circle-solid';
    public const CHEVRON_DOWN = 'chevron-down';
    public const CHEVRON_LEFT = 'chevron-left';
    public const CHEVRON_RIGHT = 'chevron-right';
    public const _CHEVRON_UP = 'chevron-up';
    public const CIRCLE = 'circle';
    public const CLIPBOARD_CHECK = 'clipboard-check';
    public const COINS_3 = 'coins-3';
    public const COPY_1 = 'copy-1';
    public const DATAFLOW_3 = 'dataflow-3';
    public const DATAFLOW_4 = 'dataflow-4';
    public const DOTS_VERTICAL = 'dots-vertical';
    public const DOWNLOAD_1 = 'download-1';
    public const DOWNLOAD_CLOUD_1_SOLID = 'download-cloud-1-solid';
    public const EDIT_5_ = 'edit-5';
    public const EYE = 'eye';
    public const EYE_OFF = 'eye-off';
    public const FILE_2 = 'file-2';
    public const FILTER_FUNNEL_2 = 'filter-funnel-2';
    public const HELP_CIRCLE = 'help-circle';
    public const HOME = 'home-1';
    public const INFO_CIRCLE_SOLID = 'info-circle-solid';
    public const KEY_1 = 'key-1';
    public const LANGUAGE = 'language';
    public const LOCK_2 = 'lock-2';
    public const LOG_OUT_4 = 'log-out-4';
    public const MENU = 'menu';
    public const MENU_3 = 'menu-3';
    public const MINUS = 'minus';
    public const MINUS_SQUARE_SOLID = 'minus-square-solid';
    public const PHONE_SOLID = 'phone-solid';
    public const PIE_CHART_1 = 'pie-chart-1';
    public const PLUS = 'plus';
    public const PLUS_SQUARE = 'plus-square';
    public const SEARCH_SM = 'search-sm';
    public const SETTINGS_2 = 'settings-2';
    public const SHARE_4 = 'share-4';
    public const STAR_1 = 'star-1';
    public const STAR_1_SOLID = 'star-1-solid';
    public const TRASH = 'trash-4';
    public const USER = 'user';
    public const USER_PLUS_2 = 'user-plus-2';
    public const USERS_1 = 'users-1';
    public const USERS_LEFT = 'users-left';
    public const X_CIRCLE_SOLID = 'x-circle-solid';
    public const X_CLOSE = 'x-close';

    /**
     * @return string|void
     */
    public function render($name, $options)
    {
        $options = ArrayHelper::merge(['alt' => $name], $options);

        $path = Yii::$app->assetManager
                ->getBundle(IconAsset::class)
                ->baseUrl . DIRECTORY_SEPARATOR . 'svg' . DIRECTORY_SEPARATOR . $name;
        return Html::img($path . '.svg', $options);
    }
}

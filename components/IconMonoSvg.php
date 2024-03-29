<?php

namespace d3yii2\d3icon\components;

use d3yii2\d3icon\IconMonoAsset;
use yii\base\Component;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use Yii;

class IconMonoSvg extends Component
{
    public const ADD = "add";
    public const ARCHIVE = "archive";
    public const ARROW_DOWN = "arrow-down";
    public const ARROW_LEFT_DOWN = "arrow-left-down";
    public const ARROW_LEFT_UP = "arrow-left-up";
    public const ARROW_LEFT = "arrow-left";
    public const ARROW_RIGHT_DOWN = "arrow-right-down";
    public const ARROW_RIGHT_UP = "arrow-right-up";
    public const ARROW_RIGHT = "arrow-right";
    public const ARROW_UP = "arrow-up";
    public const ATTACHMENT = "attachment";
    public const BACKSPACE = "backspace";
    public const BAN = "ban";
    public const BAR_CHART_ALT = "bar-chart-alt";
    public const BAR_CHART = "bar-chart";
    public const BOARD = "board";
    public const BOLD = "bold";
    public const BOOK = "book";
    public const BOOKMARK = "bookmark";
    public const CALENDAR = "calendar";
    public const CALL = "call";
    public const CAMERA = "camera";
    public const CARET_DOWN = "caret-down";
    public const CARET_LEFT = "caret-left";
    public const CARET_RIGHT = "caret-right";
    public const CARET_UP = "caret-up";
    public const CHECK = "check";
    public const CHEVRON_DOUBLE_DOWN = "chevron-double-down";
    public const CHEVRON_DOUBLE_LEFT = "chevron-double-left";
    public const CHEVRON_DOUBLE_RIGHT = "chevron-double-right";
    public const CHEVRON_DOUBLE_UP = "chevron-double-up";
    public const CHEVRON_DOWN = "chevron-down";
    public const CHEVRON_LEFT = "chevron-left";
    public const CHEVRON_RIGHT = "chevron-right";
    public const CHEVRON_UP = "chevron-up";
    public const CIRCLE_ADD = "circle-add";
    public const CIRCLE_ARROW_DOWN = "circle-arrow-down";
    public const CIRCLE_ARROW_LEFT = "circle-arrow-left";
    public const CIRCLE_ARROW_RIGHT = "circle-arrow-right";
    public const CIRCLE_ARROW_UP = "circle-arrow-up";
    public const CIRCLE_CHECK = "circle-check";
    public const CIRCLE_ERROR = "circle-error";
    public const CIRCLE_HELP = "circle-help";
    public const CIRCLE_INFORMATION = "circle-information";
    public const CIRCLE_REMOVE = "circle-remove";
    public const CIRCLE_WARNING = "circle-warning";
    public const CIRCLE = "circle";
    public const CLIPBOARD_CHECK = "clipboard-check";
    public const CLIPBOARD_LIST = "clipboard-list";
    public const CLIPBOARD = "clipboard";
    public const CLOCK = "clock";
    public const CLOSE = "close";
    public const CLOUD_DOWNLOAD = "cloud-download";
    public const CLOUD_UPLOAD = "cloud-upload";
    public const CLOUD = "cloud";
    public const CLOUDY = "cloudy";
    public const COMMENT = "comment";
    public const COMPASS = "compass";
    public const COMPUTER = "computer";
    public const COPY = "copy";
    public const CREDIT_CARD = "credit-card";
    public const DATABASE = "database";
    public const DELETE_ALT = "delete-alt";
    public const DELETE = "delete";
    public const DOCUMENT_ADD = "document-add";
    public const DOCUMENT_CHECK = "document-check";
    public const DOCUMENT_DOWNLOAD = "document-download";
    public const DOCUMENT_EMPTY = "document-empty";
    public const DOCUMENT_REMOVE = "document-remove";
    public const DOCUMENT = "document";
    public const DOWNLOAD = "download";
    public const DRAG = "drag";
    public const DROP = "drop";
    public const EDIT_ALT = "edit-alt";
    public const EDIT = "edit";
    public const EMAIL = "email";
    public const ENTER = "enter";
    public const EXPAND = "expand";
    public const EXPORT = "export";
    public const EXTERNAL_LINK = "external-link";
    public const EYE_OFF = "eye-off";
    public const EYE = "eye";
    public const FAVORITE = "favorite";
    public const FILTER_1 = "filter-1";
    public const FILTER_ALT = "filter-alt";
    public const FILTER = "filter";
    public const FLAG = "flag";
    public const FOG = "fog";
    public const FOLDER_ADD = "folder-add";
    public const FOLDER_CHECK = "folder-check";
    public const FOLDER_DOWNLOAD = "folder-download";
    public const FOLDER_REMOVE = "folder-remove";
    public const FOLDER = "folder";
    public const GRID = "grid";
    public const HEART = "heart";
    public const HOME = "home";
    public const IMAGE = "image";
    public const INBOX = "inbox";
    public const ITALIC = "italic";
    public const LAPTOP = "laptop";
    public const LAYERS = "layers";
    public const LAYOUT = "layout";
    public const LINK_ALT = "link-alt";
    public const LINK = "link";
    public const LIST = "list";
    public const LOCATION = "location";
    public const LOCK = "lock";
    public const LOG_IN = "log-in";
    public const LOG_OUT = "log-out";
    public const MAP = "map";
    public const MEGAPHONE = "megaphone";
    public const MENU = "menu";
    public const MESSAGE_ALT = "message-alt";
    public const MESSAGE = "message";
    public const MINIMIZE = "minimize";
    public const MOBILE = "mobile";
    public const MOON = "moon";
    public const NEXT = "next";
    public const NOTIFICATION_OFF = "notification-off";
    public const NOTIFICATION = "notification";
    public const OPTIONS_HORIZONTAL = "options-horizontal";
    public const OPTIONS_VERTICAL = "options-vertical";
    public const PAUSE = "pause";
    public const PEN = "pen";
    public const PERCENTAGE = "percentage";
    public const PIN = "pin";
    public const PLAY = "play";
    public const PREVIOUS = "previous";
    public const PRINT = "print";
    public const RAIN = "rain";
    public const REFRESH = "refresh";
    public const REMOVE = "remove";
    public const reorder_alt = "reorder-alt";
    public const REORDER = "reorder";
    public const REPEAT = "repeat";
    public const SAVE = "save";
    public const SEARCH = "search";
    public const SELECT = "select";
    public const SEND = "send";
    public const SETTINGS = "settings";
    public const SHARE = "share";
    public const SHOPPING_CART_ADD = "shopping-cart-add";
    public const SHOPPING_CART = "shopping-cart";
    public const SHUFFLE = "shuffle";
    public const SNOW = "snow";
    public const SNOWFLAKE = "snowflake";
    public const SORT = "sort";
    public const SPEAKERS = "speakers";
    public const STOP = "stop";
    public const STORM = "storm";
    public const STRIKETHROUGH = "strikethrough";
    public const SUN = "sun";
    public const SUNRISE_1 = "sunrise-1";
    public const SUNRISE = "sunrise";
    public const SUNSET = "sunset";
    public const SWITCH = "switch";
    public const TABLE = "table";
    public const TABLET = "tablet";
    public const TAG = "tag";
    public const TEMPERATURE = "temperature";
    public const TEXT = "text";
    public const THREE_ROWS = "three-rows";
    public const TWO_COLUMNS = "two-columns";
    public const TWO_ROWS = "two-rows";
    public const UNDERLINE = "underline";
    public const UNDO = "undo";
    public const UNLOCK = "unlock";
    public const USER_ADD = "user-add";
    public const USER_CHECK = "user-check";
    public const USER_REMOVE = "user-remove";
    public const USER = "user";
    public const USERS = "users";
    public const VOLUME_OFF = "volume-off";
    public const VOLUME_UP = "volume-up";
    public const WARNING = "warning";
    public const WEBCAM = "webcam";
    public const WIND = "wind";
    public const WINDOW = "window";
    public const ZOOM_IN = "zoom-in";
    public const ZOOM_OUT = "zoom-out";
    
    private static $isLoaded;
    
    /**
     * @return string|void
     */
    public static function render($name, $options = [])
    {
        if (!self::$isLoaded) {
            IconMonoAsset::register(Yii::$app->getView());
        }
        
        Html::addCssClass($options, 'mi-' . $name);
        
        Html::addCssClass($options, 'mx-1');

        self::$isLoaded = true;
        
        return Html::tag('i', '', $options);
    }
}

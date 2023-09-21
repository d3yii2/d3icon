D3Icons
========
icons

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist d3yii2/d3icons "*"
```

or add

```
"d3yii2/d3labels": "*"
```

to the require section of your `composer.json` file.


Usage
-----

by type
```php 
echo Icon::icon(d3yii2\d3icon\Icon::TYPE_SVG,d3yii2\d3icon\components\IconSvg::ALERT_CIRCLE);
```

direct method
```php 
echo d3yii2\d3icon\Icon::svg(d3yii2\d3icon\components\IconSvg::EYE);
echo Icon::fa('pencil)
```


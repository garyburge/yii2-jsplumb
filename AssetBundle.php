<?php
/**
 * AssetBundle.php
 * @author Gary Burge http://garyburge.com
 */

namespace garyburge\jsplumb;

/**
 * Class AssetBundle
 * @package rmrevin\yii\fontawesome
 */
class AssetBundle extends \yii\web\AssetBundle
{
    /**
     * @inherit
     */
    public $sourcePath = '@vendor/garyburge/yii2-jsplumb';

    /**
     * @inherit
     */
    public $js = [
        'dom.jsPlumb.min.js',
        'jquery.jsPlumb.min.js'
    ];
}

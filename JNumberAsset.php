<?php
/**
 * @author Harry Tang <harry@modernkernel.com>
 * @link https://modernkernel.com
 * @copyright Copyright (c) 2016 Modern Kernel
 */


namespace modernkernel\jnumber;


use yii\web\AssetBundle;

/**
 * Class JNumberAsset
 * @package modernkernel\jnumber
 */
class JNumberAsset extends AssetBundle
{
    public $sourcePath = '@bower/jquery-number';
    public $js = [
        'jquery.number.min.js',
    ];
    public $depends = [
        'yii\web\JqueryAsset',
    ];
}
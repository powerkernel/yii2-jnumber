<?php
/**
 * @author Harry Tang <harry@powerkernel.com>
 * @link https://powerkernel.com
 * @copyright Copyright (c) 2017 Power Kernel
 */


namespace powerkernel\jnumber;


use yii\web\AssetBundle;

/**
 * Class JNumberAsset
 * @package powerkernel\jnumber
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
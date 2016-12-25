<?php
/**
 * @author Harry Tang <harry@modernkernel.com>
 * @link https://modernkernel.com
 * @copyright Copyright (c) 2016 Modern Kernel
 */


namespace modernkernel\jnumber;


use yii\helpers\Html;
use yii\widgets\InputWidget;

/**
 * Class JNumberInput
 * @package modernkernel\jnumber
 */
class JNumberInput extends InputWidget
{

    public $scale = 2;
    public $options = ['class' => 'form-control'];

    /**
     * @inheritdoc
     */
    public function run()
    {
        if ($this->hasModel()) {
            echo Html::activeTextInput($this->model, $this->attribute, $this->options);
        } else {
            echo Html::textInput($this->name, $this->value, $this->options);
        }
        $this->registerClientScript();
    }

    /**
     * register asset and js
     */
    protected function registerClientScript()
    {
        $view = $this->getView();
        JNumberAsset::register($view);
        $id = $this->options['id'];
        $script = '$("#' . $id . '").number(true,' . $this->scale . ');';
        $view->registerJs($script);
    }
}
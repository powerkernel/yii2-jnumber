<?php
/**
 * @author Harry Tang <harry@powerkernel.com>
 * @link https://powerkernel.com
 * @copyright Copyright (c) 2017 Power Kernel
 */


namespace powerkernel\jnumber;


use yii\helpers\Html;
use yii\widgets\InputWidget;

/**
 * Class JNumberInput
 * @package powerkernel\jnumber
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
<?php

namespace oii\user\backend;

/**
 * User module definition class
 */
class Module extends \yii\base\Module {
    /**
     * @inheritdoc
     */
    public $controllerNamespace = 'oii\user\backend\controllers';
    
    /**
     * @inheritdoc
     */
    public  function init() {
        parent::init();
    }
}

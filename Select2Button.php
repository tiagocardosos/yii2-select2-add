<?php
namespace tiagocardosos\select2Button;

use yii\base\Widget;
use yii\helpers\Json;

class Select2Button extends Widget{

	//attributes select2
    public $model			= '';
    public $data			= '';
    public $initValueText	= '';
    public $options			= [];
    public $pluginOptions	= [];
    
    //attribute form
    public $modelForm		= '';
    public $actionForm		= '';

    /**
     * @inheritdoc
     */
    public function run()
    {    	
    	$this->registerAssets();
    }
    
    
    /**
     * Registers the needed assets
     */
    public function registerAssets()
    {
    	$view = $this->getView();
    	Select2ButtonAsset::register($view);
    }    
}
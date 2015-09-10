<?php

namespace tiagocardosos\select2Button;

use yii\web\AssetBundle;

class Select2ButtonAsset extends AssetBundle{
	
    public $sourcePath = '@bower';
    public $js = [
    ];
    public $depends = [
    	'yii\web\JqueryAsset',
    ];    
    public $jsOptions = [
        'position' => \yii\web\View::POS_HEAD,
    ];	
	
}
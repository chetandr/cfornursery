<?php
/**
 * Description of JQuerySlideTopMenu
 *
 * @author oleksiy
 */
class CoinSlider extends CWidget {

    private $cssFile = 'coin-slider-styles.css';
    private $jsFile = 'coin-slider.js';
    
    private $cssIE7hack = '<!--[if lte IE 7]>
html .jqueryslidemenu{height: 1%;} 
/*Holly Hack for IE7 and below*/
<![endif]-->
';

    public $items = array();
    public $id = '';

    public function init()
    {
        if(empty($this->id)){
            $this->id = 'ltjqsm'.rand(1, 1000);
        }
        $this->cssFile=Yii::app()->getAssetManager()->publish(dirname(__FILE__).DIRECTORY_SEPARATOR.$this->cssFile);
        $this->jsFile=Yii::app()->getAssetManager()->publish(dirname(__FILE__).DIRECTORY_SEPARATOR.$this->jsFile);
        $this->registerClientScript();
        parent::init();
    }
	
	protected function registerClientScript()
    {
        $cs=Yii::app()->clientScript;
        
        $cs->registerCoreScript('jquery');
        $cs->registerCssFile($this->cssFile);
        // not sure if it is needed
        //$cs->registerCss('jqueryslidemenu.ie7fix', $this->cssIE7hack);
        $cs->registerScriptFile($this->jsFile);     
    }
}
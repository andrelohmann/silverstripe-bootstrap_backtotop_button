<?php

class BackToTopControllerExtension extends Extension {
	function onAfterInit(){
            
            $url = explode('/',$this->owner->request->getURL());
            
            // Set Requirements for all custom Controllers
            if(!in_array($url[0], array('admin', 'dev', 'interactive'))){
				Requirements::css('bootstrap_backtotop_button/css/backtotop.css');
				Requirements::javascript('bootstrap_backtotop_button/javascript/backtotop.js');
			}
	}
}
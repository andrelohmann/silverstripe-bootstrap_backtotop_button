<?php

class BackToTopControllerExtension extends Extension {
	function onAfterInit(){
		Requirements::css('bootstrap_backtotop_button/css/backtotop.css');
		Requirements::javascript('bootstrap_backtotop_button/javascript/backtotop.js');
	}
}
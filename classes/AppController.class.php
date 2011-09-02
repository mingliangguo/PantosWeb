<?php

class AppController extends Lvc_PageController
{
	protected $layout = 'default';
	
	protected function beforeAction()
	{
		$this->setLayoutVar('pageTitle', 'Pantos World');
		$this->requireCss('reset.css');
    // $this->requireCss('master.css');
		$this->requireCss('bootstrap-1.1.1.css');
	}
	
	public function requireCss($cssFile)
	{
		$this->layoutVars['requiredCss'][$cssFile] = true;
	}
	
	public function requireJs($jsFile)
	{
		$this->layoutVars['requiredJs'][$jsFile] = true;
	}
	
}

?>

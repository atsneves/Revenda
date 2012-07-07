<?php
/**
 * class IndexController
 *  Controller principal do modulo
 * 
 * @author	Anderson Neves <www.agneves.com.br
 * @since	07/07/2012
 */
class IndexController extends Zend_Controller_Action
{
	public function init(){
	}
	
	public function indexAction()
	{
		$this->view->pagina = "/index/index";
		
		
		$this->view->menu = '<li><a href="index/index" id="direita">HOME</a></li>';
	}
}

?>	
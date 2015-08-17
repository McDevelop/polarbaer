<?php
namespace Polabaer\Music\Controller;

/*                                                                        *
 * This script belongs to the TYPO3 Flow package "Polabaer.Music".        *
 *                                                                        *
 *                                                                        */

use TYPO3\Flow\Annotations as Flow;

class HomeController extends \TYPO3\Flow\Mvc\Controller\ActionController {

	/**
	 * @return void
	 */
	public function showAction() {
          
            
            $this->view->assign('NewsActive', TRUE);
            $this->view->assign('SucheActive', FALSE);
            $this->view->assign('NetzwerkActive', FALSE);
            $this->view->assign('ProfilActive', FALSE);
	}        

}
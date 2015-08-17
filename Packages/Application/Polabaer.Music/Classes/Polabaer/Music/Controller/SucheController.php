<?php
namespace Polabaer\Music\Controller;

/*                                                                        *
 * This script belongs to the TYPO3 Flow package "Polabaer.Music".        *
 *                                                                        *
 *                                                                        */

use TYPO3\Flow\Annotations as Flow;



class SucheController extends \TYPO3\Flow\Mvc\Controller\ActionController {

    /**
    * @var Polabaer\Music\Domain\Repository\ProfilRepository
    * @Flow\Inject
    */
    protected $profilRepository;
    
	/**
	 * @return void
	 */
	public function showAction() {
            
            $profile = $this->profilRepository->findAll();
            
            $this->view->assign('profile', $profile);
            $this->view->assign('NewsActive', FALSE);
            $this->view->assign('SucheActive', TRUE);
            $this->view->assign('NetzwerkActive', FALSE);
            $this->view->assign('ProfilActive', FALSE);
	}
        
       

}
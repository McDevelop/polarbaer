<?php
namespace Polabaer\Music\Controller;

/*                                                                        *
 * This script belongs to the TYPO3 Flow package "Polabaer.Music".        *
 *                                                                        *
 *                                                                        */

use TYPO3\Flow\Annotations as Flow;


class ProfilController extends \TYPO3\Flow\Mvc\Controller\ActionController {

    /**
    * @var Polabaer\Music\Domain\Repository\ProfilRepository
    * @Flow\Inject
    */
    protected $profilRepository;
    
    /**
    * @var \TYPO3\Flow\Security\Context
    * @Flow\Inject
    */
    protected $securityContext;
    
    /**
     * @return void
     */
    public function showAction() {
        
        $eigenesProfil = FALSE;
        
        if (array_key_exists('profil', $_GET)) {
            $profil = $this->profilRepository->findOneByName(htmlspecialchars($_GET["profil"]));
            
            
            // Falls per Parameter eigenes Profil aufgerufen wird
            $account = $this->securityContext->getAccount();
            if(isset($account)) {
                $name = $account->getAccountIdentifier();
                if($name === htmlspecialchars($_GET["profil"]))
                    $eigenesProfil = TRUE;
            }
                
            
                
        } else {            
            $account = $this->securityContext->getAccount();
            if(isset($account)) {
                $name = $account->getAccountIdentifier();
                
                $profil = $this->profilRepository->findOneByName($name);
                $eigenesProfil = TRUE;
            } else {
                var_dump("alter meld dich erstmal an!");
                // Hier darauf hinweisen sich einzuloggen
            }
        }

        if(isset($profil))
            $this->view->assign('profil', $profil);

        
        

        $this->view->assign('eigenesProfil', $eigenesProfil);
        $this->view->assign('NewsActive', FALSE);
        $this->view->assign('SucheActive', FALSE);
        $this->view->assign('NetzwerkActive', FALSE);
        $this->view->assign('ProfilActive', TRUE);
    }
    
    /**
     * @return void
     */
    public function showEinstellungenAction() {
        
        
        
        
        $this->view->assign('NewsActive', FALSE);
        $this->view->assign('SucheActive', FALSE);
        $this->view->assign('NetzwerkActive', FALSE);
        $this->view->assign('ProfilActive', TRUE); 
    }
    
    /**
     * @return void
     */
    public function editAction() {
        
        
        $account = $this->securityContext->getAccount();
        $name = $account->getAccountIdentifier();
                
        $profil = $this->profilRepository->findOneByName($name);
        // Profil editieren
        
        $this->view->assign('profil', $profil);
        $this->view->assign('NewsActive', FALSE);
        $this->view->assign('SucheActive', FALSE);
        $this->view->assign('NetzwerkActive', FALSE);
        $this->view->assign('ProfilActive', TRUE);
    }
    
    /**
     * update vom Profil
     * @var \Polabaer\Music\Domain\Model\Profil $profil
     * @return void
     */
    public function updateAction(\Polabaer\Music\Domain\Model\Profil $profil) {
        
              
        // Profil updaten        
        $this->profilRepository->update($profil);
        
       $this->redirect("show"); 
    }
}
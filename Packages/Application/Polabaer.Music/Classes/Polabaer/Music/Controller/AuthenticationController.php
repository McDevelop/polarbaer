<?php
namespace Polabaer\Music\Controller;


use TYPO3\Flow\Annotations as Flow;
use TYPO3\Flow\Mvc\ActionRequest;
use TYPO3\Flow\Security\Authentication\Controller\AbstractAuthenticationController;

class AuthenticationController extends AbstractAuthenticationController {

    
        /**
        * @var \TYPO3\Flow\Security\AccountFactory
        * @Flow\Inject
        */
        protected $accountFactory;
        
        /**
        * @var \TYPO3\Flow\Security\AccountRepository
        * @Flow\Inject
        */
        protected $accountRepository;
        
        /**
         * @var \TYPO3\Party\Domain\Repository\PartyRepository
         * @Flow\Inject
         */
        protected $partyRepository;


        /**
         * Displays a login form
         *
         * @return void
         */
        public function showAction() {
            //$authenticationTokens = $this->securityContext->getAuthenticationTokensOfType('TYPO3\Flow\Security\Authentication\Token\UsernamePassword');
            
            $test = $this->securityContext->hasRole("Fan");
            var_dump($test);
        }
        
        /**
        * @return void
        */
        public function registerAction() {
           // do nothing more than display the register form
        }
        
        
        /**
        * save the registration
        * @param string $name
        * @param string $pass
        * @param string $pass2
        * @param string $role
        */
       public function createAction($name, $pass, $pass2,$role) {
           
           if(!isset($role))
                $role = 'Fan';

           if($name == '' || strlen($name) < 3) {
               $this->addFlashMessage('Username too short or empty');
               $this->redirect('register', 'Authentication');
           } else if($pass == '' || $pass != $pass2) {
               $this->addFlashMessage('Password too short or does not match');
               $this->redirect('register', 'Authentication');
           } else {

                // Erstelle auch gleich ein Profil dazu.
                $newProfil = new \Polabaer\Music\Domain\Model\Profil();
                $newProfil->setName($name);
		$this->partyRepository->add($newProfil);
               
               
                // create a account with password an add it to the accountRepository
                $account = $this->accountFactory->createAccountWithPassword($name, $pass, array($role));
                                                     

		$account->setParty($newProfil);
		$this->accountRepository->add($account);
           
               // add a message and redirect to the login form
               $this->addFlashMessage('Account created. Please login.');
               $this->redirect('show');
           }

           // redirect to the login form
           $this->redirect('show', 'Authentication');
       }
        
        

        /**
         * Will be triggered upon successful authentication
         *
         * @param ActionRequest $originalRequest The request that was intercepted by the security framework, NULL if there was none
         * @return string
         */
        protected function onAuthenticationSuccess(ActionRequest $originalRequest = NULL) {
                if ($originalRequest !== NULL) {
                        $this->redirectToRequest($originalRequest);
                }
                
                $this->addFlashMessage("Erfolgreich Eingeloggt");
                $this->redirect('show');
        }

        /**
         * Logs all active tokens out and redirects the user to the login form
         *
         * @return void
         */
        public function logoutAction() {
                parent::logoutAction();
                $this->addFlashMessage('Logout successful');
                $this->redirect('show');
        }
}
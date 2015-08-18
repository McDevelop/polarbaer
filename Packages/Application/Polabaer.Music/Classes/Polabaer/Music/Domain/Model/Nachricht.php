<?php
namespace Polabaer\Music\Domain\Model;

/*                                                                        *
 * This script belongs to the TYPO3 Flow package "Polabaer.Music".        *
 *                                                                        *
 *                                                                        */

use TYPO3\Flow\Annotations as Flow;
use Doctrine\ORM\Mapping as ORM;
/**
 * @Flow\Entity
 */
class Nachricht  {
    
    /**
     * @var string
     */
    protected $nachricht;
    
    /**
     * @var \Doctrine\Common\Collections\Collection<\Polabaer\Music\Domain\Model\Profil>
     * @ORM\ManyToMany(inversedBy="nachrichten")
     */
    protected $profil;
    

    /**
     * @return string
     */
    public function getNachricht() {
            return $this->nachricht;
    }

    /**
     * @param string $nachricht
     * @return void
     */
    public function setNachricht($nachricht) {
            $this->nachricht = $nachricht;
    }
    
    
    
    
}
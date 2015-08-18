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
class Profil  extends \TYPO3\Party\Domain\Model\AbstractParty {
    
    
	/**
         * Name
	 * @var string
         * @Flow\Validate(type="NotEmpty")
	 */
	protected $name;
        
        /**
         * Profilbild
	 * @var string
         * 
	 */
	protected $profilBild;
        
        /**
         * Ort
         * @var string 
         * @Flow\Validate(type="NotEmpty")
         */
        protected $ort;
        
        /**
         * Plz
         * @var int
         */
        protected $zip;
        
        /**
         * Plz
         * @var int
         * @Flow\Validate(type="NotEmpty")
         * @Flow\Validate(type="Integer")
         */
        protected $age;
        
        /**
         * Bands in denen das Profil gespielt hat
         * @var string
         */
        protected $bandNames;
        
        /**
         * Allgemeines uebers Profil
         * @var string
         */
        protected $ueberMich;
        
        /**
         * Information über die Suche des Profils
         * @var string
         */
        protected $suchInfoText;
        
        /**
         * Information über spielende Instrumente als Plaintext nicht als Objekt
         * @var string
         */
        protected $instrumentText;
        
        /**
         * Nachrichten
         * @var \Doctrine\Common\Collections\Collection<\Polabaer\Music\Domain\Model\Nachricht>
         * @ORM\ManyToMany(mappedBy="profil")
         */
        protected $nachrichten;

        /**
	 * @return string
	 */
	public function getName() {
		return $this->name;
	}

	/**
	 * @param string $name
	 * @return void
	 */
	public function setName($name) {
		$this->name = $name;
	}
        
        /**
	 * @return string
	 */
	public function getProfilBild() {
		return $this->profilBild;
	}

	/**
	 * @param string $profilBild
	 * @return void
	 */
	public function setProfilBild($profilBild) {
		$this->profilBild = $profilBild;
	}
        
        /**
	 * @return string
	 */
	public function getOrt() {
		return $this->ort;
	}

	/**
	 * @param string $ort
	 * @return void
	 */
	public function setOrt($ort) {
		$this->ort = $ort;
	}
        
        /**
	 * @return int
	 */
	public function getZip() {
		return $this->zip;
	}

	/**
	 * @param int $zip
	 * @return void
	 */
	public function setZip($zip) {
		$this->zip = $zip;
	}
        
       /**
	 * @return int
	 */
	public function getAge() {
		return $this->age;
	}

	/**
	 * @param int $age
	 * @return void
	 */
	public function setAge($age) {
		$this->age = $age;
	}
        
        /**
	 * @return string
	 */
	public function getBandNames() {
		return $this->bandNames;
	}

	/**
	 * @param string $bandNames
	 * @return void
	 */
	public function setBandNames($bandNames) {
		$this->bandNames = $bandNames;
	}
        
        /**
	 * @return string
	 */
	public function getUeberMich() {
		return $this->ueberMich;
	}

	/**
	 * @param string $ueberMich
	 * @return void
	 */
	public function setUeberMich($ueberMich) {
		$this->ueberMich = $ueberMich;
	}
        
        /**
	 * @return string
	 */
	public function getSuchInfoText() {
		return $this->suchInfoText;
	}

	/**
	 * @param string $suchInfoText
	 * @return void
	 */
	public function setSuchInfoText($suchInfoText) {
		$this->suchInfoText = $suchInfoText;
	}
        
        /**
	 * @return string
	 */
	public function getInstrumentText() {
		return $this->instrumentText;
	}

	/**
	 * @param string $instrumentText
	 * @return void
	 */
	public function setInstrumentText($instrumentText) {
		$this->instrumentText = $instrumentText;
	}
        
        
	
}
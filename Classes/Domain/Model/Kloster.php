<?php
namespace Subugoe\Germaniasacra\Domain\Model;

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2013 Ingo Pfennigstorf <pfennigstorf@sub.uni-goettingen.de>
 *  
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

/**
 *
 *
 * @package germaniasacra
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 */
class Kloster extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity {

	/**
	 * kloster
	 *
	 * @var \string
	 */
	protected $kloster;

	/**
	 * klosterId
	 *
	 * @var \integer
	 */
	protected $klosterId;

	/**
	 * patrozinium
	 *
	 * @var \string
	 */
	protected $patrozinium;

	/**
	 * bemerkung
	 *
	 * @var \string
	 */
	protected $bemerkung;

	/**
	 * bandSeite
	 *
	 * @var \string
	 */
	protected $bandSeite;

	/**
	 * textGsBand
	 *
	 * @var \string
	 */
	protected $textGsBand;

	/**
	 * band
	 *
	 * @var \Subugoe\Germaniasacra\Domain\Model\Band
	 */
	protected $band;

	/**
	 * url
	 *
	 * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Subugoe\Germaniasacra\Domain\Model\Url>
	 */
	protected $url;

	/**
	 * standort
	 *
	 * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Subugoe\Germaniasacra\Domain\Model\KlosterStandort>
	 */
	protected $standort;

	/**
	 * bearbeitungsstatus
	 *
	 * @var \Subugoe\Germaniasacra\Domain\Model\Bearbeitungsstatus
	 */
	protected $bearbeitungsstatus;

	/**
	 * personallistenstatus
	 *
	 * @var \Subugoe\Germaniasacra\Domain\Model\Personallistenstatus
	 */
	protected $personallistenstatus;

	/**
	 * orden
	 *
	 * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Subugoe\Germaniasacra\Domain\Model\KlosterOrden>
	 */
	protected $orden;

	/**
	 * literatur
	 *
	 * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Subugoe\Germaniasacra\Domain\Model\Literatur>
	 */
	protected $literatur;

	/**
	 * __construct
	 *
	 * @return Kloster
	 */
	public function __construct() {
		//Do not remove the next line: It would break the functionality
		$this->initStorageObjects();
	}

	/**
	 * Initializes all ObjectStorage properties.
	 *
	 * @return void
	 */
	protected function initStorageObjects() {
		/**
		 * Do not modify this method!
		 * It will be rewritten on each save in the extension builder
		 * You may modify the constructor of this class instead
		 */
		$this->url = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		
		$this->standort = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		
		$this->orden = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		
		$this->literatur = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
	}

	/**
	 * Returns the kloster
	 *
	 * @return \string $kloster
	 */
	public function getKloster() {
		return $this->kloster;
	}

	/**
	 * Sets the kloster
	 *
	 * @param \string $kloster
	 * @return void
	 */
	public function setKloster($kloster) {
		$this->kloster = $kloster;
	}

	/**
	 * Returns the klosterId
	 *
	 * @return \integer $klosterId
	 */
	public function getKlosterId() {
		return $this->klosterId;
	}

	/**
	 * Sets the klosterId
	 *
	 * @param \integer $klosterId
	 * @return void
	 */
	public function setKlosterId($klosterId) {
		$this->klosterId = $klosterId;
	}

	/**
	 * Returns the patrozinium
	 *
	 * @return \string $patrozinium
	 */
	public function getPatrozinium() {
		return $this->patrozinium;
	}

	/**
	 * Sets the patrozinium
	 *
	 * @param \string $patrozinium
	 * @return void
	 */
	public function setPatrozinium($patrozinium) {
		$this->patrozinium = $patrozinium;
	}

	/**
	 * Returns the bemerkung
	 *
	 * @return \string $bemerkung
	 */
	public function getBemerkung() {
		return $this->bemerkung;
	}

	/**
	 * Sets the bemerkung
	 *
	 * @param \string $bemerkung
	 * @return void
	 */
	public function setBemerkung($bemerkung) {
		$this->bemerkung = $bemerkung;
	}

	/**
	 * Returns the bandSeite
	 *
	 * @return \string $bandSeite
	 */
	public function getBandSeite() {
		return $this->bandSeite;
	}

	/**
	 * Sets the bandSeite
	 *
	 * @param \string $bandSeite
	 * @return void
	 */
	public function setBandSeite($bandSeite) {
		$this->bandSeite = $bandSeite;
	}

	/**
	 * Returns the textGsBand
	 *
	 * @return \string $textGsBand
	 */
	public function getTextGsBand() {
		return $this->textGsBand;
	}

	/**
	 * Sets the textGsBand
	 *
	 * @param \string $textGsBand
	 * @return void
	 */
	public function setTextGsBand($textGsBand) {
		$this->textGsBand = $textGsBand;
	}

	/**
	 * Returns the band
	 *
	 * @return \Subugoe\Germaniasacra\Domain\Model\Band $band
	 */
	public function getBand() {
		return $this->band;
	}

	/**
	 * Sets the band
	 *
	 * @param \Subugoe\Germaniasacra\Domain\Model\Band $band
	 * @return void
	 */
	public function setBand(\Subugoe\Germaniasacra\Domain\Model\Band $band) {
		$this->band = $band;
	}

	/**
	 * Adds a Url
	 *
	 * @param \Subugoe\Germaniasacra\Domain\Model\Url $url
	 * @return void
	 */
	public function addUrl(\Subugoe\Germaniasacra\Domain\Model\Url $url) {
		$this->url->attach($url);
	}

	/**
	 * Removes a Url
	 *
	 * @param \Subugoe\Germaniasacra\Domain\Model\Url $urlToRemove The Url to be removed
	 * @return void
	 */
	public function removeUrl(\Subugoe\Germaniasacra\Domain\Model\Url $urlToRemove) {
		$this->url->detach($urlToRemove);
	}

	/**
	 * Returns the url
	 *
	 * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Subugoe\Germaniasacra\Domain\Model\Url> $url
	 */
	public function getUrl() {
		return $this->url;
	}

	/**
	 * Sets the url
	 *
	 * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Subugoe\Germaniasacra\Domain\Model\Url> $url
	 * @return void
	 */
	public function setUrl(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $url) {
		$this->url = $url;
	}

	/**
	 * Adds a KlosterStandort
	 *
	 * @param \Subugoe\Germaniasacra\Domain\Model\KlosterStandort $standort
	 * @return void
	 */
	public function addStandort(\Subugoe\Germaniasacra\Domain\Model\KlosterStandort $standort) {
		$this->standort->attach($standort);
	}

	/**
	 * Removes a KlosterStandort
	 *
	 * @param \Subugoe\Germaniasacra\Domain\Model\KlosterStandort $standortToRemove The KlosterStandort to be removed
	 * @return void
	 */
	public function removeStandort(\Subugoe\Germaniasacra\Domain\Model\KlosterStandort $standortToRemove) {
		$this->standort->detach($standortToRemove);
	}

	/**
	 * Returns the standort
	 *
	 * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Subugoe\Germaniasacra\Domain\Model\KlosterStandort> $standort
	 */
	public function getStandort() {
		return $this->standort;
	}

	/**
	 * Sets the standort
	 *
	 * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Subugoe\Germaniasacra\Domain\Model\KlosterStandort> $standort
	 * @return void
	 */
	public function setStandort(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $standort) {
		$this->standort = $standort;
	}

	/**
	 * Returns the bearbeitungsstatus
	 *
	 * @return \Subugoe\Germaniasacra\Domain\Model\Bearbeitungsstatus $bearbeitungsstatus
	 */
	public function getBearbeitungsstatus() {
		return $this->bearbeitungsstatus;
	}

	/**
	 * Sets the bearbeitungsstatus
	 *
	 * @param \Subugoe\Germaniasacra\Domain\Model\Bearbeitungsstatus $bearbeitungsstatus
	 * @return void
	 */
	public function setBearbeitungsstatus(\Subugoe\Germaniasacra\Domain\Model\Bearbeitungsstatus $bearbeitungsstatus) {
		$this->bearbeitungsstatus = $bearbeitungsstatus;
	}

	/**
	 * Returns the personallistenstatus
	 *
	 * @return \Subugoe\Germaniasacra\Domain\Model\Personallistenstatus $personallistenstatus
	 */
	public function getPersonallistenstatus() {
		return $this->personallistenstatus;
	}

	/**
	 * Sets the personallistenstatus
	 *
	 * @param \Subugoe\Germaniasacra\Domain\Model\Personallistenstatus $personallistenstatus
	 * @return void
	 */
	public function setPersonallistenstatus(\Subugoe\Germaniasacra\Domain\Model\Personallistenstatus $personallistenstatus) {
		$this->personallistenstatus = $personallistenstatus;
	}

	/**
	 * Adds a KlosterOrden
	 *
	 * @param \Subugoe\Germaniasacra\Domain\Model\KlosterOrden $orden
	 * @return void
	 */
	public function addOrden(\Subugoe\Germaniasacra\Domain\Model\KlosterOrden $orden) {
		$this->orden->attach($orden);
	}

	/**
	 * Removes a KlosterOrden
	 *
	 * @param \Subugoe\Germaniasacra\Domain\Model\KlosterOrden $ordenToRemove The KlosterOrden to be removed
	 * @return void
	 */
	public function removeOrden(\Subugoe\Germaniasacra\Domain\Model\KlosterOrden $ordenToRemove) {
		$this->orden->detach($ordenToRemove);
	}

	/**
	 * Returns the orden
	 *
	 * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Subugoe\Germaniasacra\Domain\Model\KlosterOrden> $orden
	 */
	public function getOrden() {
		return $this->orden;
	}

	/**
	 * Sets the orden
	 *
	 * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Subugoe\Germaniasacra\Domain\Model\KlosterOrden> $orden
	 * @return void
	 */
	public function setOrden(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $orden) {
		$this->orden = $orden;
	}

	/**
	 * Adds a Literatur
	 *
	 * @param \Subugoe\Germaniasacra\Domain\Model\Literatur $literatur
	 * @return void
	 */
	public function addLiteratur(\Subugoe\Germaniasacra\Domain\Model\Literatur $literatur) {
		$this->literatur->attach($literatur);
	}

	/**
	 * Removes a Literatur
	 *
	 * @param \Subugoe\Germaniasacra\Domain\Model\Literatur $literaturToRemove The Literatur to be removed
	 * @return void
	 */
	public function removeLiteratur(\Subugoe\Germaniasacra\Domain\Model\Literatur $literaturToRemove) {
		$this->literatur->detach($literaturToRemove);
	}

	/**
	 * Returns the literatur
	 *
	 * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Subugoe\Germaniasacra\Domain\Model\Literatur> $literatur
	 */
	public function getLiteratur() {
		return $this->literatur;
	}

	/**
	 * Sets the literatur
	 *
	 * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Subugoe\Germaniasacra\Domain\Model\Literatur> $literatur
	 * @return void
	 */
	public function setLiteratur(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $literatur) {
		$this->literatur = $literatur;
	}

}
?>
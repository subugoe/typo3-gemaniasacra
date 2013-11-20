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
class Ort extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity {

	/**
	 * ort
	 *
	 * @var \string
	 */
	protected $ort;

	/**
	 * gemeinde
	 *
	 * @var \string
	 */
	protected $gemeinde;

	/**
	 * kreis
	 *
	 * @var \string
	 */
	protected $kreis;

	/**
	 * wuestung
	 *
	 * @var boolean
	 */
	protected $wuestung = FALSE;

	/**
	 * breite
	 *
	 * @var \float
	 */
	protected $breite;

	/**
	 * laenge
	 *
	 * @var \float
	 */
	protected $laenge;

	/**
	 * land
	 *
	 * @var \Subugoe\Germaniasacra\Domain\Model\Land
	 */
	protected $land;

	/**
	 * bistum
	 *
	 * @var \Subugoe\Germaniasacra\Domain\Model\Bistum
	 */
	protected $bistum;

	/**
	 * url
	 *
	 * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Subugoe\Germaniasacra\Domain\Model\Url>
	 */
	protected $url;

	/**
	 * __construct
	 *
	 * @return Ort
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
	}

	/**
	 * Returns the ort
	 *
	 * @return \string $ort
	 */
	public function getOrt() {
		return $this->ort;
	}

	/**
	 * Sets the ort
	 *
	 * @param \string $ort
	 * @return void
	 */
	public function setOrt($ort) {
		$this->ort = $ort;
	}

	/**
	 * Returns the gemeinde
	 *
	 * @return \string $gemeinde
	 */
	public function getGemeinde() {
		return $this->gemeinde;
	}

	/**
	 * Sets the gemeinde
	 *
	 * @param \string $gemeinde
	 * @return void
	 */
	public function setGemeinde($gemeinde) {
		$this->gemeinde = $gemeinde;
	}

	/**
	 * Returns the kreis
	 *
	 * @return \string $kreis
	 */
	public function getKreis() {
		return $this->kreis;
	}

	/**
	 * Sets the kreis
	 *
	 * @param \string $kreis
	 * @return void
	 */
	public function setKreis($kreis) {
		$this->kreis = $kreis;
	}

	/**
	 * Returns the wuestung
	 *
	 * @return boolean $wuestung
	 */
	public function getWuestung() {
		return $this->wuestung;
	}

	/**
	 * Sets the wuestung
	 *
	 * @param boolean $wuestung
	 * @return void
	 */
	public function setWuestung($wuestung) {
		$this->wuestung = $wuestung;
	}

	/**
	 * Returns the boolean state of wuestung
	 *
	 * @return boolean
	 */
	public function isWuestung() {
		return $this->getWuestung();
	}

	/**
	 * Returns the breite
	 *
	 * @return \float $breite
	 */
	public function getBreite() {
		return $this->breite;
	}

	/**
	 * Sets the breite
	 *
	 * @param \float $breite
	 * @return void
	 */
	public function setBreite($breite) {
		$this->breite = $breite;
	}

	/**
	 * Returns the laenge
	 *
	 * @return \float $laenge
	 */
	public function getLaenge() {
		return $this->laenge;
	}

	/**
	 * Sets the laenge
	 *
	 * @param \float $laenge
	 * @return void
	 */
	public function setLaenge($laenge) {
		$this->laenge = $laenge;
	}

	/**
	 * Returns the land
	 *
	 * @return \Subugoe\Germaniasacra\Domain\Model\Land $land
	 */
	public function getLand() {
		return $this->land;
	}

	/**
	 * Sets the land
	 *
	 * @param \Subugoe\Germaniasacra\Domain\Model\Land $land
	 * @return void
	 */
	public function setLand(\Subugoe\Germaniasacra\Domain\Model\Land $land) {
		$this->land = $land;
	}

	/**
	 * Returns the bistum
	 *
	 * @return \Subugoe\Germaniasacra\Domain\Model\Bistum $bistum
	 */
	public function getBistum() {
		return $this->bistum;
	}

	/**
	 * Sets the bistum
	 *
	 * @param \Subugoe\Germaniasacra\Domain\Model\Bistum $bistum
	 * @return void
	 */
	public function setBistum(\Subugoe\Germaniasacra\Domain\Model\Bistum $bistum) {
		$this->bistum = $bistum;
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

}
?>
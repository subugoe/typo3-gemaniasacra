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
class KlosterStandort extends \TYPO3\CMS\Extbase\DomainObject\AbstractValueObject {

	/**
	 * gruender
	 *
	 * @var \string
	 */
	protected $gruender;

	/**
	 * bemerkung
	 *
	 * @var \string
	 */
	protected $bemerkung;

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
	 * bemerkungStandort
	 *
	 * @var \string
	 */
	protected $bemerkungStandort;

	/**
	 * tempLiteraturAlt
	 *
	 * @var \string
	 */
	protected $tempLiteraturAlt;

	/**
	 * ort
	 *
	 * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Subugoe\Germaniasacra\Domain\Model\Ort>
	 */
	protected $ort;

	/**
	 * zeitraum
	 *
	 * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Subugoe\Germaniasacra\Domain\Model\Zeitraum>
	 */
	protected $zeitraum;

	/**
	 * __construct
	 *
	 * @return KlosterStandort
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
		$this->ort = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		
		$this->zeitraum = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
	}

	/**
	 * Returns the gruender
	 *
	 * @return \string $gruender
	 */
	public function getGruender() {
		return $this->gruender;
	}

	/**
	 * Sets the gruender
	 *
	 * @param \string $gruender
	 * @return void
	 */
	public function setGruender($gruender) {
		$this->gruender = $gruender;
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
	 * Returns the bemerkungStandort
	 *
	 * @return \string $bemerkungStandort
	 */
	public function getBemerkungStandort() {
		return $this->bemerkungStandort;
	}

	/**
	 * Sets the bemerkungStandort
	 *
	 * @param \string $bemerkungStandort
	 * @return void
	 */
	public function setBemerkungStandort($bemerkungStandort) {
		$this->bemerkungStandort = $bemerkungStandort;
	}

	/**
	 * Returns the tempLiteraturAlt
	 *
	 * @return \string $tempLiteraturAlt
	 */
	public function getTempLiteraturAlt() {
		return $this->tempLiteraturAlt;
	}

	/**
	 * Sets the tempLiteraturAlt
	 *
	 * @param \string $tempLiteraturAlt
	 * @return void
	 */
	public function setTempLiteraturAlt($tempLiteraturAlt) {
		$this->tempLiteraturAlt = $tempLiteraturAlt;
	}

	/**
	 * Adds a Ort
	 *
	 * @param \Subugoe\Germaniasacra\Domain\Model\Ort $ort
	 * @return void
	 */
	public function addOrt(\Subugoe\Germaniasacra\Domain\Model\Ort $ort) {
		$this->ort->attach($ort);
	}

	/**
	 * Removes a Ort
	 *
	 * @param \Subugoe\Germaniasacra\Domain\Model\Ort $ortToRemove The Ort to be removed
	 * @return void
	 */
	public function removeOrt(\Subugoe\Germaniasacra\Domain\Model\Ort $ortToRemove) {
		$this->ort->detach($ortToRemove);
	}

	/**
	 * Returns the ort
	 *
	 * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Subugoe\Germaniasacra\Domain\Model\Ort> $ort
	 */
	public function getOrt() {
		return $this->ort;
	}

	/**
	 * Sets the ort
	 *
	 * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Subugoe\Germaniasacra\Domain\Model\Ort> $ort
	 * @return void
	 */
	public function setOrt(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $ort) {
		$this->ort = $ort;
	}

	/**
	 * Adds a Zeitraum
	 *
	 * @param \Subugoe\Germaniasacra\Domain\Model\Zeitraum $zeitraum
	 * @return void
	 */
	public function addZeitraum(\Subugoe\Germaniasacra\Domain\Model\Zeitraum $zeitraum) {
		$this->zeitraum->attach($zeitraum);
	}

	/**
	 * Removes a Zeitraum
	 *
	 * @param \Subugoe\Germaniasacra\Domain\Model\Zeitraum $zeitraumToRemove The Zeitraum to be removed
	 * @return void
	 */
	public function removeZeitraum(\Subugoe\Germaniasacra\Domain\Model\Zeitraum $zeitraumToRemove) {
		$this->zeitraum->detach($zeitraumToRemove);
	}

	/**
	 * Returns the zeitraum
	 *
	 * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Subugoe\Germaniasacra\Domain\Model\Zeitraum> $zeitraum
	 */
	public function getZeitraum() {
		return $this->zeitraum;
	}

	/**
	 * Sets the zeitraum
	 *
	 * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Subugoe\Germaniasacra\Domain\Model\Zeitraum> $zeitraum
	 * @return void
	 */
	public function setZeitraum(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $zeitraum) {
		$this->zeitraum = $zeitraum;
	}

}
?>
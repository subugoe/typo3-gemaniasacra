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
class KlosterOrden extends \TYPO3\CMS\Extbase\DomainObject\AbstractValueObject {

	/**
	 * bemerkung
	 *
	 * @var \string
	 */
	protected $bemerkung;

	/**
	 * klosterstatus
	 *
	 * @var \string
	 */
	protected $klosterstatus;

	/**
	 * orden
	 *
	 * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Subugoe\Germaniasacra\Domain\Model\Orden>
	 */
	protected $orden;

	/**
	 * zeitraum
	 *
	 * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Subugoe\Germaniasacra\Domain\Model\Zeitraum>
	 */
	protected $zeitraum;

	/**
	 * __construct
	 *
	 * @return KlosterOrden
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
		$this->orden = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		
		$this->zeitraum = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
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
	 * Returns the klosterstatus
	 *
	 * @return \string $klosterstatus
	 */
	public function getKlosterstatus() {
		return $this->klosterstatus;
	}

	/**
	 * Sets the klosterstatus
	 *
	 * @param \string $klosterstatus
	 * @return void
	 */
	public function setKlosterstatus($klosterstatus) {
		$this->klosterstatus = $klosterstatus;
	}

	/**
	 * Adds a Orden
	 *
	 * @param \Subugoe\Germaniasacra\Domain\Model\Orden $orden
	 * @return void
	 */
	public function addOrden(\Subugoe\Germaniasacra\Domain\Model\Orden $orden) {
		$this->orden->attach($orden);
	}

	/**
	 * Removes a Orden
	 *
	 * @param \Subugoe\Germaniasacra\Domain\Model\Orden $ordenToRemove The Orden to be removed
	 * @return void
	 */
	public function removeOrden(\Subugoe\Germaniasacra\Domain\Model\Orden $ordenToRemove) {
		$this->orden->detach($ordenToRemove);
	}

	/**
	 * Returns the orden
	 *
	 * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Subugoe\Germaniasacra\Domain\Model\Orden> $orden
	 */
	public function getOrden() {
		return $this->orden;
	}

	/**
	 * Sets the orden
	 *
	 * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Subugoe\Germaniasacra\Domain\Model\Orden> $orden
	 * @return void
	 */
	public function setOrden(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $orden) {
		$this->orden = $orden;
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
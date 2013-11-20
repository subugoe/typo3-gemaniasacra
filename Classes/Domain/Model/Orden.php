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
class Orden extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity {

	/**
	 * orden
	 *
	 * @var \string
	 */
	protected $orden;

	/**
	 * ordo
	 *
	 * @var \string
	 */
	protected $ordo;

	/**
	 * symbol
	 *
	 * @var \string
	 */
	protected $symbol;

	/**
	 * graphik
	 *
	 * @var \string
	 */
	protected $graphik;

	/**
	 * ordenstyp
	 *
	 * @var \integer
	 */
	protected $ordenstyp;

	/**
	 * url
	 *
	 * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Subugoe\Germaniasacra\Domain\Model\Url>
	 */
	protected $url;

	/**
	 * __construct
	 *
	 * @return Orden
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
	 * Returns the orden
	 *
	 * @return \string $orden
	 */
	public function getOrden() {
		return $this->orden;
	}

	/**
	 * Sets the orden
	 *
	 * @param \string $orden
	 * @return void
	 */
	public function setOrden($orden) {
		$this->orden = $orden;
	}

	/**
	 * Returns the ordo
	 *
	 * @return \string $ordo
	 */
	public function getOrdo() {
		return $this->ordo;
	}

	/**
	 * Sets the ordo
	 *
	 * @param \string $ordo
	 * @return void
	 */
	public function setOrdo($ordo) {
		$this->ordo = $ordo;
	}

	/**
	 * Returns the symbol
	 *
	 * @return \string $symbol
	 */
	public function getSymbol() {
		return $this->symbol;
	}

	/**
	 * Sets the symbol
	 *
	 * @param \string $symbol
	 * @return void
	 */
	public function setSymbol($symbol) {
		$this->symbol = $symbol;
	}

	/**
	 * Returns the graphik
	 *
	 * @return \string $graphik
	 */
	public function getGraphik() {
		return $this->graphik;
	}

	/**
	 * Sets the graphik
	 *
	 * @param \string $graphik
	 * @return void
	 */
	public function setGraphik($graphik) {
		$this->graphik = $graphik;
	}

	/**
	 * Returns the ordenstyp
	 *
	 * @return \integer $ordenstyp
	 */
	public function getOrdenstyp() {
		return $this->ordenstyp;
	}

	/**
	 * Sets the ordenstyp
	 *
	 * @param \integer $ordenstyp
	 * @return void
	 */
	public function setOrdenstyp($ordenstyp) {
		$this->ordenstyp = $ordenstyp;
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
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
class Bistum extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity {

	/**
	 * bistum
	 *
	 * @var \string
	 */
	protected $bistum;

	/**
	 * kirchenprovinz
	 *
	 * @var \string
	 */
	protected $kirchenprovinz;

	/**
	 * bemerkung
	 *
	 * @var \string
	 */
	protected $bemerkung;

	/**
	 * istErzbistum
	 *
	 * @var boolean
	 */
	protected $istErzbistum = FALSE;

	/**
	 * shapefile
	 *
	 * @var \string
	 */
	protected $shapefile;

	/**
	 * url
	 *
	 * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Subugoe\Germaniasacra\Domain\Model\Url>
	 */
	protected $url;

	/**
	 * ort
	 *
	 * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Subugoe\Germaniasacra\Domain\Model\Ort>
	 */
	protected $ort;

	/**
	 * __construct
	 *
	 * @return Bistum
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
		
		$this->ort = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
	}

	/**
	 * Returns the bistum
	 *
	 * @return \string $bistum
	 */
	public function getBistum() {
		return $this->bistum;
	}

	/**
	 * Sets the bistum
	 *
	 * @param \string $bistum
	 * @return void
	 */
	public function setBistum($bistum) {
		$this->bistum = $bistum;
	}

	/**
	 * Returns the kirchenprovinz
	 *
	 * @return \string $kirchenprovinz
	 */
	public function getKirchenprovinz() {
		return $this->kirchenprovinz;
	}

	/**
	 * Sets the kirchenprovinz
	 *
	 * @param \string $kirchenprovinz
	 * @return void
	 */
	public function setKirchenprovinz($kirchenprovinz) {
		$this->kirchenprovinz = $kirchenprovinz;
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
	 * Returns the istErzbistum
	 *
	 * @return boolean $istErzbistum
	 */
	public function getIstErzbistum() {
		return $this->istErzbistum;
	}

	/**
	 * Sets the istErzbistum
	 *
	 * @param boolean $istErzbistum
	 * @return void
	 */
	public function setIstErzbistum($istErzbistum) {
		$this->istErzbistum = $istErzbistum;
	}

	/**
	 * Returns the boolean state of istErzbistum
	 *
	 * @return boolean
	 */
	public function isIstErzbistum() {
		return $this->getIstErzbistum();
	}

	/**
	 * Returns the shapefile
	 *
	 * @return \string $shapefile
	 */
	public function getShapefile() {
		return $this->shapefile;
	}

	/**
	 * Sets the shapefile
	 *
	 * @param \string $shapefile
	 * @return void
	 */
	public function setShapefile($shapefile) {
		$this->shapefile = $shapefile;
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

}
?>
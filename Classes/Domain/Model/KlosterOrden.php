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
class KlosterOrden extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity {

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
	 * kloster
	 *
	 * @var \Subugoe\Germaniasacra\Domain\Model\Kloster
	 */
	protected $kloster;

	/**
	 * orden
	 *
	 * @var \Subugoe\Germaniasacra\Domain\Model\Orden
	 */
	protected $orden;

	/**
	 * zeitraum
	 *
	 * @var \Subugoe\Germaniasacra\Domain\Model\Zeitraum
	 */
	protected $zeitraum;

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
	 * Returns the kloster
	 *
	 * @return \Subugoe\Germaniasacra\Domain\Model\Kloster $kloster
	 */
	public function getKloster() {
		return $this->kloster;
	}

	/**
	 * Sets the kloster
	 *
	 * @param \Subugoe\Germaniasacra\Domain\Model\Kloster $kloster
	 * @return void
	 */
	public function setKloster(\Subugoe\Germaniasacra\Domain\Model\Kloster $kloster) {
		$this->kloster = $kloster;
	}

	/**
	 * Returns the orden
	 *
	 * @return \Subugoe\Germaniasacra\Domain\Model\Orden $orden
	 */
	public function getOrden() {
		return $this->orden;
	}

	/**
	 * Sets the orden
	 *
	 * @param \Subugoe\Germaniasacra\Domain\Model\Orden $orden
	 * @return void
	 */
	public function setOrden(\Subugoe\Germaniasacra\Domain\Model\Orden $orden) {
		$this->orden = $orden;
	}

	/**
	 * Returns the zeitraum
	 *
	 * @return \Subugoe\Germaniasacra\Domain\Model\Zeitraum $zeitraum
	 */
	public function getZeitraum() {
		return $this->zeitraum;
	}

	/**
	 * Sets the zeitraum
	 *
	 * @param \Subugoe\Germaniasacra\Domain\Model\Zeitraum $zeitraum
	 * @return void
	 */
	public function setZeitraum(\Subugoe\Germaniasacra\Domain\Model\Zeitraum $zeitraum) {
		$this->zeitraum = $zeitraum;
	}

}
?>
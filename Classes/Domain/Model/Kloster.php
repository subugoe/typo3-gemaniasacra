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
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 */
class Kloster extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity {

	/**
	 * klosterId
	 *
	 * @var \integer
	 */
	protected $klosterId;

	/**
	 * kloster
	 *
	 * @var \string
	 */
	protected $kloster;

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

}
?>
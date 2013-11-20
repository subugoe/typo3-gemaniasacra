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
class Zeitraum extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity {

	/**
	 * vonVon
	 *
	 * @var \integer
	 */
	protected $vonVon;

	/**
	 * vonBis
	 *
	 * @var \integer
	 */
	protected $vonBis;

	/**
	 * vonVerbal
	 *
	 * @var \string
	 */
	protected $vonVerbal;

	/**
	 * bisVon
	 *
	 * @var \integer
	 */
	protected $bisVon;

	/**
	 * bisBis
	 *
	 * @var \integer
	 */
	protected $bisBis;

	/**
	 * bisVerbal
	 *
	 * @var \string
	 */
	protected $bisVerbal;

	/**
	 * Returns the vonVon
	 *
	 * @return \integer $vonVon
	 */
	public function getVonVon() {
		return $this->vonVon;
	}

	/**
	 * Sets the vonVon
	 *
	 * @param \integer $vonVon
	 * @return void
	 */
	public function setVonVon($vonVon) {
		$this->vonVon = $vonVon;
	}

	/**
	 * Returns the vonBis
	 *
	 * @return \integer $vonBis
	 */
	public function getVonBis() {
		return $this->vonBis;
	}

	/**
	 * Sets the vonBis
	 *
	 * @param \integer $vonBis
	 * @return void
	 */
	public function setVonBis($vonBis) {
		$this->vonBis = $vonBis;
	}

	/**
	 * Returns the vonVerbal
	 *
	 * @return \string $vonVerbal
	 */
	public function getVonVerbal() {
		return $this->vonVerbal;
	}

	/**
	 * Sets the vonVerbal
	 *
	 * @param \string $vonVerbal
	 * @return void
	 */
	public function setVonVerbal($vonVerbal) {
		$this->vonVerbal = $vonVerbal;
	}

	/**
	 * Returns the bisVon
	 *
	 * @return \integer $bisVon
	 */
	public function getBisVon() {
		return $this->bisVon;
	}

	/**
	 * Sets the bisVon
	 *
	 * @param \integer $bisVon
	 * @return void
	 */
	public function setBisVon($bisVon) {
		$this->bisVon = $bisVon;
	}

	/**
	 * Returns the bisBis
	 *
	 * @return \integer $bisBis
	 */
	public function getBisBis() {
		return $this->bisBis;
	}

	/**
	 * Sets the bisBis
	 *
	 * @param \integer $bisBis
	 * @return void
	 */
	public function setBisBis($bisBis) {
		$this->bisBis = $bisBis;
	}

	/**
	 * Returns the bisVerbal
	 *
	 * @return \string $bisVerbal
	 */
	public function getBisVerbal() {
		return $this->bisVerbal;
	}

	/**
	 * Sets the bisVerbal
	 *
	 * @param \string $bisVerbal
	 * @return void
	 */
	public function setBisVerbal($bisVerbal) {
		$this->bisVerbal = $bisVerbal;
	}

}
?>
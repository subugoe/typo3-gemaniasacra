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
class Band extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity {

	/**
	 * nummer
	 *
	 * @var \string
	 */
	protected $nummer;

	/**
	 * sortierung
	 *
	 * @var \integer
	 */
	protected $sortierung;

	/**
	 * titel
	 *
	 * @var \string
	 */
	protected $titel;

	/**
	 * kurztitel
	 *
	 * @var \string
	 */
	protected $kurztitel;

	/**
	 * bistum
	 *
	 * @var \Subugoe\Germaniasacra\Domain\Model\Bistum
	 */
	protected $bistum;

	/**
	 * Returns the nummer
	 *
	 * @return \string $nummer
	 */
	public function getNummer() {
		return $this->nummer;
	}

	/**
	 * Sets the nummer
	 *
	 * @param \string $nummer
	 * @return void
	 */
	public function setNummer($nummer) {
		$this->nummer = $nummer;
	}

	/**
	 * Returns the sortierung
	 *
	 * @return \integer $sortierung
	 */
	public function getSortierung() {
		return $this->sortierung;
	}

	/**
	 * Sets the sortierung
	 *
	 * @param \integer $sortierung
	 * @return void
	 */
	public function setSortierung($sortierung) {
		$this->sortierung = $sortierung;
	}

	/**
	 * Returns the titel
	 *
	 * @return \string $titel
	 */
	public function getTitel() {
		return $this->titel;
	}

	/**
	 * Sets the titel
	 *
	 * @param \string $titel
	 * @return void
	 */
	public function setTitel($titel) {
		$this->titel = $titel;
	}

	/**
	 * Returns the kurztitel
	 *
	 * @return \string $kurztitel
	 */
	public function getKurztitel() {
		return $this->kurztitel;
	}

	/**
	 * Sets the kurztitel
	 *
	 * @param \string $kurztitel
	 * @return void
	 */
	public function setKurztitel($kurztitel) {
		$this->kurztitel = $kurztitel;
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

}
?>
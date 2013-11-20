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
class Land extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity {

	/**
	 * land
	 *
	 * @var \string
	 */
	protected $land;

	/**
	 * istInDeutschland
	 *
	 * @var boolean
	 */
	protected $istInDeutschland = FALSE;

	/**
	 * Returns the land
	 *
	 * @return \string $land
	 */
	public function getLand() {
		return $this->land;
	}

	/**
	 * Sets the land
	 *
	 * @param \string $land
	 * @return void
	 */
	public function setLand($land) {
		$this->land = $land;
	}

	/**
	 * Returns the istInDeutschland
	 *
	 * @return boolean $istInDeutschland
	 */
	public function getIstInDeutschland() {
		return $this->istInDeutschland;
	}

	/**
	 * Sets the istInDeutschland
	 *
	 * @param boolean $istInDeutschland
	 * @return void
	 */
	public function setIstInDeutschland($istInDeutschland) {
		$this->istInDeutschland = $istInDeutschland;
	}

	/**
	 * Returns the boolean state of istInDeutschland
	 *
	 * @return boolean
	 */
	public function isIstInDeutschland() {
		return $this->getIstInDeutschland();
	}

}
?>
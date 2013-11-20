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
class Url extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity {

	/**
	 * url
	 *
	 * @var \string
	 */
	protected $url;

	/**
	 * bemerkung
	 *
	 * @var \string
	 */
	protected $bemerkung;

	/**
	 * typ
	 *
	 * @var \integer
	 */
	protected $typ;

	/**
	 * Returns the url
	 *
	 * @return \string $url
	 */
	public function getUrl() {
		return $this->url;
	}

	/**
	 * Sets the url
	 *
	 * @param \string $url
	 * @return void
	 */
	public function setUrl($url) {
		$this->url = $url;
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
	 * Returns the typ
	 *
	 * @return \integer $typ
	 */
	public function getTyp() {
		return $this->typ;
	}

	/**
	 * Sets the typ
	 *
	 * @param \integer $typ
	 * @return void
	 */
	public function setTyp($typ) {
		$this->typ = $typ;
	}

}
?>
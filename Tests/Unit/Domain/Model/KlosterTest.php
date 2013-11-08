<?php

namespace Subugoe\Germaniasacra\Tests;
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
 *  the Free Software Foundation; either version 2 of the License, or
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
 * Test case for class \Subugoe\Germaniasacra\Domain\Model\Kloster.
 *
 * @version $Id$
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 * @author Ingo Pfennigstorf <pfennigstorf@sub.uni-goettingen.de>
 */
class KlosterTest extends \TYPO3\CMS\Extbase\Tests\Unit\BaseTestCase {
	/**
	 * @var \Subugoe\Germaniasacra\Domain\Model\Kloster
	 */
	protected $fixture;

	public function setUp() {
		$this->fixture = new \Subugoe\Germaniasacra\Domain\Model\Kloster();
	}

	public function tearDown() {
		unset($this->fixture);
	}

	/**
	 * @test
	 */
	public function getKlosterIdReturnsInitialValueForInteger() {
		$this->assertSame(
			0,
			$this->fixture->getKlosterId()
		);
	}

	/**
	 * @test
	 */
	public function setKlosterIdForIntegerSetsKlosterId() {
		$this->fixture->setKlosterId(12);

		$this->assertSame(
			12,
			$this->fixture->getKlosterId()
		);
	}
	/**
	 * @test
	 */
	public function getKlosterReturnsInitialValueForString() {
		$this->assertSame(
			NULL,
			$this->fixture->getKloster()
		);
	}

	/**
	 * @test
	 */
	public function setKlosterForStringSetsKloster() {
		$this->fixture->setKloster('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getKloster()
		);
	}
	/**
	 * @test
	 */
	public function getPatroziniumReturnsInitialValueForString() {
		$this->assertSame(
			NULL,
			$this->fixture->getPatrozinium()
		);
	}

	/**
	 * @test
	 */
	public function setPatroziniumForStringSetsPatrozinium() {
		$this->fixture->setPatrozinium('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getPatrozinium()
		);
	}
	/**
	 * @test
	 */
	public function getBemerkungReturnsInitialValueForString() {
		$this->assertSame(
			NULL,
			$this->fixture->getBemerkung()
		);
	}

	/**
	 * @test
	 */
	public function setBemerkungForStringSetsBemerkung() {
		$this->fixture->setBemerkung('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getBemerkung()
		);
	}
	/**
	 * @test
	 */
	public function getBandSeiteReturnsInitialValueForString() {
		$this->assertSame(
			NULL,
			$this->fixture->getBandSeite()
		);
	}

	/**
	 * @test
	 */
	public function setBandSeiteForStringSetsBandSeite() {
		$this->fixture->setBandSeite('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getBandSeite()
		);
	}
	/**
	 * @test
	 */
	public function getTextGsBandReturnsInitialValueForString() {
		$this->assertSame(
			NULL,
			$this->fixture->getTextGsBand()
		);
	}

	/**
	 * @test
	 */
	public function setTextGsBandForStringSetsTextGsBand() {
		$this->fixture->setTextGsBand('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getTextGsBand()
		);
	}
	/**
	 * @test
	 */
	public function getBandReturnsInitialValueForBand() {	}

	/**
	 * @test
	 */
	public function setBandForBandSetsBand() {	}
	/**
	 * @test
	 */
	public function getBearbeitungsstatusReturnsInitialValueForBearbeitungsstatus() {	}

	/**
	 * @test
	 */
	public function setBearbeitungsstatusForBearbeitungsstatusSetsBearbeitungsstatus() {	}
	/**
	 * @test
	 */
	public function getPersonallistenstatusReturnsInitialValueForPersonallistenstatus() {	}

	/**
	 * @test
	 */
	public function setPersonallistenstatusForPersonallistenstatusSetsPersonallistenstatus() {	}
}
?>
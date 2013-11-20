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
 * @package TYPO3
 * @subpackage Germania Sacra
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
	public function getKlosterReturnsInitialValueForString() { }

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
	public function getPatroziniumReturnsInitialValueForString() { }

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
	public function getBemerkungReturnsInitialValueForString() { }

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
	public function getBandSeiteReturnsInitialValueForString() { }

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
	public function getTextGsBandReturnsInitialValueForString() { }

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
	public function getBearbeitungsstatusReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getBearbeitungsstatus()
		);
	}

	/**
	 * @test
	 */
	public function setBearbeitungsstatusForIntegerSetsBearbeitungsstatus() { 
		$this->fixture->setBearbeitungsstatus(12);

		$this->assertSame(
			12,
			$this->fixture->getBearbeitungsstatus()
		);
	}
	
	/**
	 * @test
	 */
	public function getPersonallistenstatusReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getPersonallistenstatus()
		);
	}

	/**
	 * @test
	 */
	public function setPersonallistenstatusForIntegerSetsPersonallistenstatus() { 
		$this->fixture->setPersonallistenstatus(12);

		$this->assertSame(
			12,
			$this->fixture->getPersonallistenstatus()
		);
	}
	
	/**
	 * @test
	 */
	public function getBandReturnsInitialValueForBand() { }

	/**
	 * @test
	 */
	public function setBandForBandSetsBand() { }
	
	/**
	 * @test
	 */
	public function getUrlReturnsInitialValueForUrl() { 
		$newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\Generic\ObjectStorage();
		$this->assertEquals(
			$newObjectStorage,
			$this->fixture->getUrl()
		);
	}

	/**
	 * @test
	 */
	public function setUrlForObjectStorageContainingUrlSetsUrl() { 
		$url = new \Subugoe\Germaniasacra\Domain\Model\Url();
		$objectStorageHoldingExactlyOneUrl = new \TYPO3\CMS\Extbase\Persistence\Generic\ObjectStorage();
		$objectStorageHoldingExactlyOneUrl->attach($url);
		$this->fixture->setUrl($objectStorageHoldingExactlyOneUrl);

		$this->assertSame(
			$objectStorageHoldingExactlyOneUrl,
			$this->fixture->getUrl()
		);
	}
	
	/**
	 * @test
	 */
	public function addUrlToObjectStorageHoldingUrl() {
		$url = new \Subugoe\Germaniasacra\Domain\Model\Url();
		$objectStorageHoldingExactlyOneUrl = new \TYPO3\CMS\Extbase\Persistence\Generic\ObjectStorage();
		$objectStorageHoldingExactlyOneUrl->attach($url);
		$this->fixture->addUrl($url);

		$this->assertEquals(
			$objectStorageHoldingExactlyOneUrl,
			$this->fixture->getUrl()
		);
	}

	/**
	 * @test
	 */
	public function removeUrlFromObjectStorageHoldingUrl() {
		$url = new \Subugoe\Germaniasacra\Domain\Model\Url();
		$localObjectStorage = new \TYPO3\CMS\Extbase\Persistence\Generic\ObjectStorage();
		$localObjectStorage->attach($url);
		$localObjectStorage->detach($url);
		$this->fixture->addUrl($url);
		$this->fixture->removeUrl($url);

		$this->assertEquals(
			$localObjectStorage,
			$this->fixture->getUrl()
		);
	}
	
}
?>
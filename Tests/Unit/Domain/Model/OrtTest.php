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
 * Test case for class \Subugoe\Germaniasacra\Domain\Model\Ort.
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
class OrtTest extends \TYPO3\CMS\Extbase\Tests\Unit\BaseTestCase {
	/**
	 * @var \Subugoe\Germaniasacra\Domain\Model\Ort
	 */
	protected $fixture;

	public function setUp() {
		$this->fixture = new \Subugoe\Germaniasacra\Domain\Model\Ort();
	}

	public function tearDown() {
		unset($this->fixture);
	}

	/**
	 * @test
	 */
	public function getOrtReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setOrtForStringSetsOrt() { 
		$this->fixture->setOrt('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getOrt()
		);
	}
	
	/**
	 * @test
	 */
	public function getGemeindeReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setGemeindeForStringSetsGemeinde() { 
		$this->fixture->setGemeinde('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getGemeinde()
		);
	}
	
	/**
	 * @test
	 */
	public function getKreisReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setKreisForStringSetsKreis() { 
		$this->fixture->setKreis('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getKreis()
		);
	}
	
	/**
	 * @test
	 */
	public function getWuestungReturnsInitialValueForOolean() { }

	/**
	 * @test
	 */
	public function setWuestungForOoleanSetsWuestung() { }
	
	/**
	 * @test
	 */
	public function getBreiteReturnsInitialValueForFloat() { 
		$this->assertSame(
			0.0,
			$this->fixture->getBreite()
		);
	}

	/**
	 * @test
	 */
	public function setBreiteForFloatSetsBreite() { 
		$this->fixture->setBreite(3.14159265);

		$this->assertSame(
			3.14159265,
			$this->fixture->getBreite()
		);
	}
	
	/**
	 * @test
	 */
	public function getLaengeReturnsInitialValueForFloat() { 
		$this->assertSame(
			0.0,
			$this->fixture->getLaenge()
		);
	}

	/**
	 * @test
	 */
	public function setLaengeForFloatSetsLaenge() { 
		$this->fixture->setLaenge(3.14159265);

		$this->assertSame(
			3.14159265,
			$this->fixture->getLaenge()
		);
	}
	
	/**
	 * @test
	 */
	public function getLandReturnsInitialValueForLand() { }

	/**
	 * @test
	 */
	public function setLandForLandSetsLand() { }
	
	/**
	 * @test
	 */
	public function getBistumReturnsInitialValueForBistum() { }

	/**
	 * @test
	 */
	public function setBistumForBistumSetsBistum() { }
	
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
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
 * Test case for class \Subugoe\Germaniasacra\Domain\Model\Bistum.
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
class BistumTest extends \TYPO3\CMS\Extbase\Tests\Unit\BaseTestCase {
	/**
	 * @var \Subugoe\Germaniasacra\Domain\Model\Bistum
	 */
	protected $fixture;

	public function setUp() {
		$this->fixture = new \Subugoe\Germaniasacra\Domain\Model\Bistum();
	}

	public function tearDown() {
		unset($this->fixture);
	}

	/**
	 * @test
	 */
	public function getBistumReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setBistumForStringSetsBistum() { 
		$this->fixture->setBistum('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getBistum()
		);
	}
	
	/**
	 * @test
	 */
	public function getKirchenprovinzReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setKirchenprovinzForStringSetsKirchenprovinz() { 
		$this->fixture->setKirchenprovinz('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getKirchenprovinz()
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
	public function getIstErzbistumReturnsInitialValueForOolean() { }

	/**
	 * @test
	 */
	public function setIstErzbistumForOoleanSetsIstErzbistum() { }
	
	/**
	 * @test
	 */
	public function getShapefileReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setShapefileForStringSetsShapefile() { 
		$this->fixture->setShapefile('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getShapefile()
		);
	}
	
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
	
	/**
	 * @test
	 */
	public function getOrtReturnsInitialValueForOrt() { 
		$newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\Generic\ObjectStorage();
		$this->assertEquals(
			$newObjectStorage,
			$this->fixture->getOrt()
		);
	}

	/**
	 * @test
	 */
	public function setOrtForObjectStorageContainingOrtSetsOrt() { 
		$ort = new \Subugoe\Germaniasacra\Domain\Model\Ort();
		$objectStorageHoldingExactlyOneOrt = new \TYPO3\CMS\Extbase\Persistence\Generic\ObjectStorage();
		$objectStorageHoldingExactlyOneOrt->attach($ort);
		$this->fixture->setOrt($objectStorageHoldingExactlyOneOrt);

		$this->assertSame(
			$objectStorageHoldingExactlyOneOrt,
			$this->fixture->getOrt()
		);
	}
	
	/**
	 * @test
	 */
	public function addOrtToObjectStorageHoldingOrt() {
		$ort = new \Subugoe\Germaniasacra\Domain\Model\Ort();
		$objectStorageHoldingExactlyOneOrt = new \TYPO3\CMS\Extbase\Persistence\Generic\ObjectStorage();
		$objectStorageHoldingExactlyOneOrt->attach($ort);
		$this->fixture->addOrt($ort);

		$this->assertEquals(
			$objectStorageHoldingExactlyOneOrt,
			$this->fixture->getOrt()
		);
	}

	/**
	 * @test
	 */
	public function removeOrtFromObjectStorageHoldingOrt() {
		$ort = new \Subugoe\Germaniasacra\Domain\Model\Ort();
		$localObjectStorage = new \TYPO3\CMS\Extbase\Persistence\Generic\ObjectStorage();
		$localObjectStorage->attach($ort);
		$localObjectStorage->detach($ort);
		$this->fixture->addOrt($ort);
		$this->fixture->removeOrt($ort);

		$this->assertEquals(
			$localObjectStorage,
			$this->fixture->getOrt()
		);
	}
	
}
?>
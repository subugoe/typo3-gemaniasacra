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
 * Test case for class \Subugoe\Germaniasacra\Domain\Model\KlosterOrden.
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
class KlosterOrdenTest extends \TYPO3\CMS\Extbase\Tests\Unit\BaseTestCase {
	/**
	 * @var \Subugoe\Germaniasacra\Domain\Model\KlosterOrden
	 */
	protected $fixture;

	public function setUp() {
		$this->fixture = new \Subugoe\Germaniasacra\Domain\Model\KlosterOrden();
	}

	public function tearDown() {
		unset($this->fixture);
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
	public function getKlosterstatusReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setKlosterstatusForStringSetsKlosterstatus() { 
		$this->fixture->setKlosterstatus('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getKlosterstatus()
		);
	}
	
	/**
	 * @test
	 */
	public function getOrdenReturnsInitialValueForOrden() { 
		$newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\Generic\ObjectStorage();
		$this->assertEquals(
			$newObjectStorage,
			$this->fixture->getOrden()
		);
	}

	/**
	 * @test
	 */
	public function setOrdenForObjectStorageContainingOrdenSetsOrden() { 
		$orden = new \Subugoe\Germaniasacra\Domain\Model\Orden();
		$objectStorageHoldingExactlyOneOrden = new \TYPO3\CMS\Extbase\Persistence\Generic\ObjectStorage();
		$objectStorageHoldingExactlyOneOrden->attach($orden);
		$this->fixture->setOrden($objectStorageHoldingExactlyOneOrden);

		$this->assertSame(
			$objectStorageHoldingExactlyOneOrden,
			$this->fixture->getOrden()
		);
	}
	
	/**
	 * @test
	 */
	public function addOrdenToObjectStorageHoldingOrden() {
		$orden = new \Subugoe\Germaniasacra\Domain\Model\Orden();
		$objectStorageHoldingExactlyOneOrden = new \TYPO3\CMS\Extbase\Persistence\Generic\ObjectStorage();
		$objectStorageHoldingExactlyOneOrden->attach($orden);
		$this->fixture->addOrden($orden);

		$this->assertEquals(
			$objectStorageHoldingExactlyOneOrden,
			$this->fixture->getOrden()
		);
	}

	/**
	 * @test
	 */
	public function removeOrdenFromObjectStorageHoldingOrden() {
		$orden = new \Subugoe\Germaniasacra\Domain\Model\Orden();
		$localObjectStorage = new \TYPO3\CMS\Extbase\Persistence\Generic\ObjectStorage();
		$localObjectStorage->attach($orden);
		$localObjectStorage->detach($orden);
		$this->fixture->addOrden($orden);
		$this->fixture->removeOrden($orden);

		$this->assertEquals(
			$localObjectStorage,
			$this->fixture->getOrden()
		);
	}
	
	/**
	 * @test
	 */
	public function getZeitraumReturnsInitialValueForZeitraum() { 
		$newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\Generic\ObjectStorage();
		$this->assertEquals(
			$newObjectStorage,
			$this->fixture->getZeitraum()
		);
	}

	/**
	 * @test
	 */
	public function setZeitraumForObjectStorageContainingZeitraumSetsZeitraum() { 
		$zeitraum = new \Subugoe\Germaniasacra\Domain\Model\Zeitraum();
		$objectStorageHoldingExactlyOneZeitraum = new \TYPO3\CMS\Extbase\Persistence\Generic\ObjectStorage();
		$objectStorageHoldingExactlyOneZeitraum->attach($zeitraum);
		$this->fixture->setZeitraum($objectStorageHoldingExactlyOneZeitraum);

		$this->assertSame(
			$objectStorageHoldingExactlyOneZeitraum,
			$this->fixture->getZeitraum()
		);
	}
	
	/**
	 * @test
	 */
	public function addZeitraumToObjectStorageHoldingZeitraum() {
		$zeitraum = new \Subugoe\Germaniasacra\Domain\Model\Zeitraum();
		$objectStorageHoldingExactlyOneZeitraum = new \TYPO3\CMS\Extbase\Persistence\Generic\ObjectStorage();
		$objectStorageHoldingExactlyOneZeitraum->attach($zeitraum);
		$this->fixture->addZeitraum($zeitraum);

		$this->assertEquals(
			$objectStorageHoldingExactlyOneZeitraum,
			$this->fixture->getZeitraum()
		);
	}

	/**
	 * @test
	 */
	public function removeZeitraumFromObjectStorageHoldingZeitraum() {
		$zeitraum = new \Subugoe\Germaniasacra\Domain\Model\Zeitraum();
		$localObjectStorage = new \TYPO3\CMS\Extbase\Persistence\Generic\ObjectStorage();
		$localObjectStorage->attach($zeitraum);
		$localObjectStorage->detach($zeitraum);
		$this->fixture->addZeitraum($zeitraum);
		$this->fixture->removeZeitraum($zeitraum);

		$this->assertEquals(
			$localObjectStorage,
			$this->fixture->getZeitraum()
		);
	}
	
}
?>
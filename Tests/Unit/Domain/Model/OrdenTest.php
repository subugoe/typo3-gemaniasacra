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
 * Test case for class \Subugoe\Germaniasacra\Domain\Model\Orden.
 *
 * @version $Id$
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 * @author Ingo Pfennigstorf <pfennigstorf@sub.uni-goettingen.de>
 */
class OrdenTest extends \TYPO3\CMS\Extbase\Tests\Unit\BaseTestCase {
	/**
	 * @var \Subugoe\Germaniasacra\Domain\Model\Orden
	 */
	protected $fixture;

	public function setUp() {
		$this->fixture = new \Subugoe\Germaniasacra\Domain\Model\Orden();
	}

	public function tearDown() {
		unset($this->fixture);
	}

	/**
	 * @test
	 */
	public function getOrdenReturnsInitialValueForString() {
		$this->assertSame(
			NULL,
			$this->fixture->getOrden()
		);
	}

	/**
	 * @test
	 */
	public function setOrdenForStringSetsOrden() {
		$this->fixture->setOrden('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getOrden()
		);
	}
	/**
	 * @test
	 */
	public function getOrdoReturnsInitialValueForString() {
		$this->assertSame(
			NULL,
			$this->fixture->getOrdo()
		);
	}

	/**
	 * @test
	 */
	public function setOrdoForStringSetsOrdo() {
		$this->fixture->setOrdo('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getOrdo()
		);
	}
	/**
	 * @test
	 */
	public function getSymbolReturnsInitialValueForString() {
		$this->assertSame(
			NULL,
			$this->fixture->getSymbol()
		);
	}

	/**
	 * @test
	 */
	public function setSymbolForStringSetsSymbol() {
		$this->fixture->setSymbol('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getSymbol()
		);
	}
	/**
	 * @test
	 */
	public function getGraphikReturnsInitialValueForString() {
		$this->assertSame(
			NULL,
			$this->fixture->getGraphik()
		);
	}

	/**
	 * @test
	 */
	public function setGraphikForStringSetsGraphik() {
		$this->fixture->setGraphik('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getGraphik()
		);
	}
	/**
	 * @test
	 */
	public function getOrdenstypReturnsInitialValueForOrdenstyp() {	}

	/**
	 * @test
	 */
	public function setOrdenstypForOrdenstypSetsOrdenstyp() {	}
}
?>
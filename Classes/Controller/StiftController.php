<?php
namespace Ipf\Germaniasacra\Controller;

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2013 
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
class StiftController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController {

	/**
	 * action list
	 *
	 * @return void
	 */
	public function listAction() {
		$stifts = $this->stiftRepository->findAll();
		$this->view->assign('stifts', $stifts);
	}

	/**
	 * action show
	 *
	 * @param \Ipf\Germaniasacra\Domain\Model\Stift $stift
	 * @return void
	 */
	public function showAction(\Ipf\Germaniasacra\Domain\Model\Stift $stift) {
		$this->view->assign('stift', $stift);
	}

	/**
	 * action new
	 *
	 * @param \Ipf\Germaniasacra\Domain\Model\Stift $newStift
	 * @dontvalidate $newStift
	 * @return void
	 */
	public function newAction(\Ipf\Germaniasacra\Domain\Model\Stift $newStift = NULL) {
		$this->view->assign('newStift', $newStift);
	}

	/**
	 * action create
	 *
	 * @param \Ipf\Germaniasacra\Domain\Model\Stift $newStift
	 * @return void
	 */
	public function createAction(\Ipf\Germaniasacra\Domain\Model\Stift $newStift) {
		$this->stiftRepository->add($newStift);
		$this->flashMessageContainer->add('Your new Stift was created.');
		$this->redirect('list');
	}

	/**
	 * action edit
	 *
	 * @param \Ipf\Germaniasacra\Domain\Model\Stift $stift
	 * @return void
	 */
	public function editAction(\Ipf\Germaniasacra\Domain\Model\Stift $stift) {
		$this->view->assign('stift', $stift);
	}

	/**
	 * action update
	 *
	 * @param \Ipf\Germaniasacra\Domain\Model\Stift $stift
	 * @return void
	 */
	public function updateAction(\Ipf\Germaniasacra\Domain\Model\Stift $stift) {
		$this->stiftRepository->update($stift);
		$this->flashMessageContainer->add('Your Stift was updated.');
		$this->redirect('list');
	}

	/**
	 * action delete
	 *
	 * @param \Ipf\Germaniasacra\Domain\Model\Stift $stift
	 * @return void
	 */
	public function deleteAction(\Ipf\Germaniasacra\Domain\Model\Stift $stift) {
		$this->stiftRepository->remove($stift);
		$this->flashMessageContainer->add('Your Stift was removed.');
		$this->redirect('list');
	}

}
?>
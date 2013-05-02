<?php

/**
* ownCloud - News
*
* @author Alessandro Cosentino
* @author Bernhard Posselt
* @copyright 2012 Alessandro Cosentino cosenal@gmail.com
* @copyright 2012 Bernhard Posselt nukeawhale@gmail.com
*
* This library is free software; you can redistribute it and/or
* modify it under the terms of the GNU AFFERO GENERAL PUBLIC LICENSE
* License as published by the Free Software Foundation; either
* version 3 of the License, or any later version.
*
* This library is distributed in the hope that it will be useful,
* but WITHOUT ANY WARRANTY; without even the implied warranty of
* MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
* GNU AFFERO GENERAL PUBLIC LICENSE for more details.
*
* You should have received a copy of the GNU Affero General Public
* License along with this library.  If not, see <http://www.gnu.org/licenses/>.
*
*/

namespace OCA\News\External;

use \OCA\AppFramework\Core\API;
use \OCA\AppFramework\Http\Request;

use \OCA\News\BusinessLayer\FolderBusinessLayer;
use \OCA\News\BusinessLayer\BusinessLayerException;


class FolderAPI {

	private $folderBusinessLayer;
	private $api;
	private $request;

	public function __construct(API $api, 
	                            Request $request,
	                            FolderBusinessLayer $folderBusinessLayer){
		$this->api = $api;
		$this->folderBusinessLayer = $folderBusinessLayer;
	}


	public function getAll() {


	}


	public function get() {

	}


	public function create() {

	}


	public function delete() {

	}


	public function update() {

	}

}
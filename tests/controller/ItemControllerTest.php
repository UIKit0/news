<?php

/**
* ownCloud - News
*
* @author Alessandro Copyright
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

namespace OCA\News\Controller;

use \OCA\AppFramework\Http\Request;
use \OCA\AppFramework\Http\JSONResponse;
use \OCA\AppFramework\Utility\ControllerTestUtility;
use \OCA\AppFramework\Db\DoesNotExistException;
use \OCA\AppFramework\Db\MultipleObjectsReturnedException;

use \OCA\News\Db\Item;


require_once(__DIR__ . "/../classloader.php");


class ItemControllerTest extends ControllerTestUtility {

	private $api;
	private $bl;
	private $request;
	private $controller;


	/**
	 * Gets run before each test
	 */
	public function setUp(){
		$this->api = $this->getAPIMock();
		$this->bl = $this->getMockBuilder('\OCA\News\Bl\ItemBl')
			->disableOriginalConstructor()
			->getMock();
		$this->request = new Request();
		$this->controller = new ItemController($this->api, $this->request,
				$this->bl);
	}

	private function assertItemControllerAnnotations($methodName){
		$annotations = array('IsAdminExemption', 'IsSubAdminExemption', 'Ajax');
		$this->assertAnnotations($this->controller, $methodName, $annotations);
	}

	public function testItemsAnnotations(){
		$this->assertItemControllerAnnotations('items');
	}


	public function testStarredAnnotations(){
		$this->assertItemControllerAnnotations('starred');
	}


	public function testStarAnnotations(){
		$this->assertItemControllerAnnotations('star');
	}


	public function testUnstarAnnotations(){
		$this->assertItemControllerAnnotations('unstar');
	}


	public function testReadAnnotations(){
		$this->assertItemControllerAnnotations('read');
	}


	public function testUnreadAnnotations(){
		$this->assertItemControllerAnnotations('unread');
	}


}
<?php 
class UtilsTest extends PHPUnit_Framework_TestCase {

	public function setUp() {
		require_once '../toto/a.php';
	}

	public function testToto() {
		$result =  a_a::toto('');
		$expected = true;
		$this->assertEquals($expected, $result);
	}

}

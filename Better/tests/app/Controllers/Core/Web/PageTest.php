<?php

class PageTest extends PHPUnit_Framework_TestCase
{
	public function testRenderReturnHelloWorld()
	{
		$pages = new \Controllers\Core\Web\Pages();

		$expected = "Hello World";

		$this->assertEquals($expected, $pages->render() );
	}

}
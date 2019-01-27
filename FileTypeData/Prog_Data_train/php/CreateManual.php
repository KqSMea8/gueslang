<?php

class Splunk_CreateManual extends AbstractAction
{
	public function setUp()
	{
		parent::setUp();
		
		$this->_users = array
		(
			'admin'		  => TRUE,
			'anonymous'	  => FALSE,
			'logged_in'	  => FALSE,
			'splunk_preview' => FALSE,
			'storm_preview'  => FALSE,
			'employee'	   => FALSE,
			'splunk_docteam' => TRUE,
			'storm_docteam'  => FALSE,
			'docteam'		=> FALSE
		);
	}
	
	protected function _allowed($user)
	{
		// Create
		$this->open("/Documentation:Splunk:Manuals");
		$this->assertTrue($this->isElementPresent("link=Edit"), $user);
		$this->click("link=Edit");
		$this->waitForPageToLoad("10000");
		$this->assertEquals("Editing Documentation:Splunk:Manuals - PonyDocs", $this->getTitle(), $user);
		$this->type("wpTextbox1", "{{#manual:Installation|Splunk Installation Manual}}\n{{#manual:User|Splunk User Manual}}\n{{#manual:War|How to take over the world!}}");
		$this->click("wpSave");
		$this->waitForPageToLoad("10000");
		$this->assertEquals("Documentation:Splunk:Manuals - PonyDocs", $this->getTitle(), $user);
		$this->assertTrue($this->isElementPresent("link=How to take over the world!"), $user);
		
		// Delete
		$this->click("link=Edit");
		$this->waitForPageToLoad("10000");
		$this->assertEquals("Editing Documentation:Splunk:Manuals - PonyDocs", $this->getTitle(), $user);
		$this->type("wpTextbox1", "{{#manual:Installation|Splunk Installation Manual}}\n{{#manual:User|Splunk User Manual}}");
		$this->click("wpSave");
		$this->waitForPageToLoad("10000");
		$this->assertEquals("Documentation:Splunk:Manuals - PonyDocs", $this->getTitle(), $user);
		$this->assertFalse($this->isElementPresent("link=How to take over the world!"), $user);
	}
	
	protected function _notAllowed($user)
	{
		$this->open("/Documentation:Splunk:Manuals");
		$this->assertFalse($this->isElementPresent("link=Edit"), $user);
	}
}
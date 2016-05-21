<?php 

$I = new AcceptanceTester($scenario);
$I->wantTo('create a Test ');
$I->amOnUrl('http://127.0.0.1/daily/index.html');


function test_choose ($I)
	{		
		$I->amOnPage('daily/index.html');
		$I->click('Guest');
		$I->wait(2);
		$I->amOnPage('daily/gender.php');
		$I->click('Male');
	}
	test_choose($I);
	test_done($I);
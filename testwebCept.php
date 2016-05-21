<?php 

$I = new AcceptanceTester($scenario);
//$I->wantTo('perform actions and see result');
$I->wantTo('create a Test ');
$I->amOnUrl('http://127.0.0.1/daily/index.html');
//$I->seeCurrentUrlEquals('127.0.0.1/index.html');
//$I->seeCurrentUrlEquals('/index');
//$I->amOnUrl('http://127.0.0.1/Daily/index.html');


function test_choose ($I)
	{		
		$I->amOnPage('daily/index.html');
		$I->click('Guest');
		$I->wait(2);
		$I->amOnPage('daily/gender.php');
		$I->click('Male');
		$I->wait(2);
		$I->amOnPage ('daily/guest.php');
		$I->click('Daily Life');
		$I->wait(2);
		$I->amOnPage('daily/daily.php');
		}
function test_done ($I)
	{
		$I->click('Begin');
		$I->wait(2);
		$I->amOnPage ('daily/daily_quiz.php');
//		$I->seeOptionIsSelected('form[name=daily_quiz] input[name=question1]', 'a');
		$js = "jQuery('input[name=question1]').val('a').trigger('change');";
		$I->executeJS($js);
		$js = "jQuery('input[name=question2]').val('c').trigger('change');";
		$I->executeJS($js);
		$js = "jQuery('input[name=question3]').val('a').trigger('change');";
		$I->executeJS($js);
		$js = "jQuery('input[name=question4]').val('c').trigger('change');";
		$I->executeJS($js);
//		$I->seeOptionIsSelected('form[name=daily_quiz] input[name=question1]', 'b');
		$I->click('SUBMIT !');
		$I->wait(10);	
	}
	// in test:
	test_choose($I);
	test_done($I);
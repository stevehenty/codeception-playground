<?php

$I = new AcceptanceTester( $scenario );

$I->wantTo( 'Test that WordPress works.' );

$I->amOnUrl( 'https://wordpress.org' );

$I->fillField('search', 'henty');
$I->click('Submit');
$I->seeCurrentURLEquals('/search/henty');
$I->click('WordPress › Profiles » Steve Henty');
$I->seeCurrentURLEquals('/stevehenty/');
$I->see('WordCamp Speaker');
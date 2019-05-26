<?php

$I = new AcceptanceTester( $scenario );

$I->wantTo( 'Test that Twitter works.' );

$I->amOnUrl( 'https://twitter.com/WordPress' );

$I->see( 'Updates and other fun stuff related to https://WordPress.org');

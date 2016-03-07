<?php
$I = new WebGuy($scenario);
$I->wantTo('ensure that about works');
$I->amOnPage('/site/page?view=about');
$I->see('About', 'h1');

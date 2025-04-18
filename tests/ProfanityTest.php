<?php

use Xavizera\Profanity\Profanity;

test('it can check for profanity', function () {
    $profanity = new Profanity(['en']);

    expect($profanity->check('This text contains badword'))
        ->toBeTrue();
});

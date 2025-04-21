<?php

use Xavizera\Profanity\Profanity;

test('it can check for profanity', function () {
    $profanity = new Profanity('en');

    expect($profanity->check('This text contains badword'))
        ->toBeTrue();
});

test('it can censor profanity words on strings', function () {
    $profanity = new Profanity();

    expect($profanity->censor('This text contains badword'))
        ->toBe('This text contains ****');
});

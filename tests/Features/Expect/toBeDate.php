<?php

use PHPUnit\Framework\ExpectationFailedException;

test('pass', function () {
    expect('2024-06-01')->toBeDate();
    expect('123.14')->not->toBeDate();
});

test('passes when value is a DateTime instance', function () {
    expect(new DateTime('2024-06-01'))->toBeDate();
});

test('fails when value is not a date string or DateTime instance', function () {
    expect('not-a-date')->toBeDate();
})->throws(ExpectationFailedException::class);

test('fails when value is an integer', function () {
    expect(12345)->toBeDate();
})->throws(ExpectationFailedException::class);

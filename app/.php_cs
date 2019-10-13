<?php

$finder = PhpCsFixer\Finder::create()
    ->exclude('tests/Fixtures')
    ->exclude('var')
    ->in(__DIR__)
    ->append([__DIR__.'/php-cs-fixer'])
;

$config = PhpCsFixer\Config::create()
    ->setRiskyAllowed(true)
    ->setRules([
        '@PHP56Migration' => true,
        '@PHPUnit60Migration:risky' => true,
        '@PhpCsFixer' => true,
        '@PhpCsFixer:risky' => true,
        'list_syntax' => ['syntax' => 'long'],
    ])
    ->setFinder($finder)
;

return $config;

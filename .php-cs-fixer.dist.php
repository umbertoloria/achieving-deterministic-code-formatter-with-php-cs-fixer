<?php

return (new PhpCsFixer\Config())
    ->setRules([
        '@PhpCsFixer' => true,
        'concat_space' => ['spacing' => 'one'],
    ])
//    ->setRiskyAllowed(true)
    ->setFinder(
        PhpCsFixer\Finder::create()
            ->exclude('vendor')
            ->in([__DIR__ . '/src/'])
    );

<?php

declare(strict_types=1);

return (new PhpCsFixer\Config())
    ->setRules([
        '@PhpCsFixer' => true,
        'concat_space' => ['spacing' => 'one'],
        'cast_spaces' => ['space' => 'none'],
        'function_declaration' => ['closure_function_spacing' => 'one'],
        'no_closing_tag' => true,
        // risky rules
        'declare_strict_types' => true,
    ])
    ->setRiskyAllowed(true)
    ->setFinder(
        PhpCsFixer\Finder::create()
            ->exclude('vendor')
            ->in([__DIR__ . '/src/'])
    )
;

<?php

declare(strict_types=1);

use PhpCsFixer\Fixer\FunctionNotation\NativeFunctionInvocationFixer;
use PhpCsFixer\Fixer\Import\FullyQualifiedStrictTypesFixer;
use PhpCsFixer\Fixer\Import\GlobalNamespaceImportFixer;
use PhpCsFixer\Fixer\Import\NoLeadingImportSlashFixer;
use PhpCsFixer\Fixer\Import\SingleImportPerStatementFixer;
use PhpCsFixer\Fixer\Operator\BinaryOperatorSpacesFixer;
use PhpCsFixer\Fixer\Operator\NotOperatorWithSuccessorSpaceFixer;
use PhpCsFixer\Fixer\Whitespace\MethodChainingIndentationFixer;
use Symplify\EasyCodingStandard\Config\ECSConfig;
use Symplify\EasyCodingStandard\ValueObject\Set\SetList;

return ECSConfig::configure()
    ->withParallel()
    ->withPaths([
        __DIR__ . '/packages',
        __DIR__ . '/tests',
    ])
    /**
     * Import
     * @see https://cs.symfony.com/doc/rules/index.html#import
     */
    ->withRules([
        FullyQualifiedStrictTypesFixer::class,
        NoLeadingImportSlashFixer::class,
        SingleImportPerStatementFixer::class,
    ])
    ->withConfiguredRule(GlobalNamespaceImportFixer::class, [
        'import_classes' => true,
    ])
    ->withConfiguredRule(BinaryOperatorSpacesFixer::class, [
        'operators' => [
            '=>' => 'align_single_space',
        ],
    ])
    ->withSets([
        SetList::PSR_12,
        SetList::ARRAY,
        SetList::SPACES,
        SetList::NAMESPACES,
        SetList::DOCBLOCK,
        SetList::COMMENTS,
        SetList::STRICT,
    ])
    ->withSkip([
        DeclareStrictTypesFixer::class,
        NotOperatorWithSuccessorSpaceFixer::class,
        RemoveUselessDefaultCommentFixer::class,
        MethodChainingIndentationFixer::class,
    ])
;

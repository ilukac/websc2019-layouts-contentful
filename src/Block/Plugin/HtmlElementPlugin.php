<?php

declare(strict_types=1);

namespace App\Block\Plugin;

use Netgen\Layouts\Block\BlockDefinition\Handler\Plugin;
use Netgen\Layouts\Parameters\ParameterBuilderInterface;
use Netgen\Layouts\Parameters\ParameterType\ChoiceType;
use Netgen\Layouts\Contentful\Block\BlockDefinition\Handler\EntryFieldHandler;

final class HtmlElementPlugin extends Plugin
{
    public static function getExtendedHandlers(): array
    {
        return [EntryFieldHandler::class];
    }
    public function buildParameters(ParameterBuilderInterface $builder): void
    {
        $builder->add(
            'element',
            ChoiceType::class,
            [
                'options' => [
                    'div' => 'div',
                    'span' => 'span',
                    'paragraph' => 'p',
                    'h1' => 'h1',
                    'h2' => 'h2',
                    'h3' => 'h3',
                ],
                'multiple' => false,
                'label' => 'Use HTML element',
            ]
        );
    }
}

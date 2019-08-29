<?php

declare(strict_types=1);

namespace App\Layout\Resolver\Form\ConditionType\Mapper;

use Netgen\Layouts\Form\KeyValuesType;
use Netgen\Layouts\Layout\Resolver\Form\ConditionType\Mapper;
use Symfony\Component\Form\Extension\Core\Type\TextType;

final class IpAddressRange extends Mapper
{
    public function getFormType(): string
    {
        return TextType::class;
    }
}

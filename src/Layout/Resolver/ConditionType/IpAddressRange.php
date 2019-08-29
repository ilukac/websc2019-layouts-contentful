<?php

declare(strict_types=1);

namespace App\Layout\Resolver\ConditionType;

use Netgen\Layouts\Layout\Resolver\ConditionTypeInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Validator\Constraints;

final class IpAddressRange implements ConditionTypeInterface
{
    public static function getType(): string
    {
        return 'ip_address_range';
    }

    public function getConstraints(): array
    {
        return [
            new Constraints\NotBlank(),
            new Constraints\Type(['type' => 'string'])
        ];
    }

    public function matches(Request $request, $value): bool
    {
        $rangeArr = explode(";,",$value);
        $requestIP = $request->getClientIp();

        foreach($rangeArr as $range) {
            if (preg_match($range, $requestIP)) {
                return true;
            }
        }
        return false;
    }
}

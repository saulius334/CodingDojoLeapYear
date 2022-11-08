<?php

declare(strict_types=1);

namespace CodingDojoLeapYear\Services;

final class CalculateLeapYear
{
    public function calculate($input): bool
    {
        if ($input % 400 === 0 || ($input % 4 === 0 && $input % 100 !== 0)) {
            return true;
        } else {
            return false;
        }
    }
}
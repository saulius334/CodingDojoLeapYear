<?php

declare(strict_types=1);

namespace CodingDojoLeapYear\Client;

use CodingDojoLeapYear\Services\CalculateLeapYear;

final class Client
{
    public function isThisALeapYear($input) {
        $calculator = new CalculateLeapYear();
        $calculator->calculate($input) ? print_r("Yep, this a leap year") : print_r("No leap year for u");
    }
}
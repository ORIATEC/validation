<?php declare(strict_types=1);

namespace ORIATEC\Components\Validation\Rules;

use ORIATEC\Components\Validation\Rule;

/**
 * Class ProhibitedRule
 *
 * Based on Laravel validators prohibited
 *
 * @package    ORIATEC\Components\Validation\Rules
 * @subpackage ORIATEC\Components\Validation\Rules\ProhibitedRule
 */
class Prohibited extends Rule
{
    protected string $message = 'rule.prohibited';

    public function check($value): bool
    {
        return false;
    }
}

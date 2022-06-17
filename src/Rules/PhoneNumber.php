<?php declare(strict_types=1);

namespace ORIATEC\Components\Validation\Rules;

use ORIATEC\Components\Validation\Rule;
use function preg_match;

/**
 * Class PhoneNumber
 *
 * @package    ORIATEC\Components\Validation\Rules
 * @subpackage ORIATEC\Components\Validation\Rules\PhoneNumber
 */
class PhoneNumber extends Rule
{
    protected string $message = 'rule.phone_number';

    public function check($value): bool
    {
        return 1 === preg_match('/^\+?[1-9]\d{1,14}$/', (string)$value);
    }
}

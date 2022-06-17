<?php declare(strict_types=1);

namespace ORIATEC\Components\Validation\Rules;

use ORIATEC\Components\Validation\Rule;

/**
 * Class Numeric
 *
 * @package    ORIATEC\Components\Validation\Rules
 * @subpackage ORIATEC\Components\Validation\Rules\Numeric
 */
class Numeric extends Rule
{
    protected string $message = 'rule.numeric';

    public function check($value): bool
    {
        return is_numeric($value);
    }
}

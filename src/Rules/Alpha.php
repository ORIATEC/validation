<?php declare(strict_types=1);

namespace ORIATEC\Components\Validation\Rules;

use ORIATEC\Components\Validation\Rule;

/**
 * Class Alpha
 *
 * @package    ORIATEC\Components\Validation\Rules
 * @subpackage ORIATEC\Components\Validation\Rules\Alpha
 */
class Alpha extends Rule
{
    protected string $message = 'rule.alpha';

    public function check($value): bool
    {
        return is_string($value) && preg_match('/^[\pL\pM]+$/u', $value);
    }
}

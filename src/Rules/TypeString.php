<?php declare(strict_types=1);

namespace ORIATEC\Components\Validation\Rules;

use ORIATEC\Components\Validation\Rule;

/**
 * Class TypeStringRule
 *
 * @package    ORIATEC\Components\Validation\Rules
 * @subpackage ORIATEC\Components\Validation\Rules\TypeStringRule
 */
class TypeString extends Rule
{
    protected string $message = 'rule.string';

    public function check($value): bool
    {
        return is_string($value);
    }
}

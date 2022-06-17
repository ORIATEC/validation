<?php declare(strict_types=1);

namespace ORIATEC\Components\Validation\Rules;

use ORIATEC\Components\Validation\Rule;

/**
 * Class TypeInteger
 *
 * @package    ORIATEC\Components\Validation\Rules
 * @subpackage ORIATEC\Components\Validation\Rules\TypeInteger
 */
class TypeInteger extends Rule
{
    protected string $message = 'rule.integer';

    public function check($value): bool
    {
        return filter_var($value, FILTER_VALIDATE_INT) !== false;
    }
}

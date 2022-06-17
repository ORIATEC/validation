<?php declare(strict_types=1);

namespace ORIATEC\Components\Validation\Rules;

use ORIATEC\Components\Validation\Rule;

/**
 * Class TypeArray
 *
 * @package    ORIATEC\Components\Validation\Rules
 * @subpackage ORIATEC\Components\Validation\Rules\TypeArray
 */
class TypeArray extends Rule
{
    protected string $message = 'rule.array';

    public function check($value): bool
    {
        return is_array($value);
    }
}

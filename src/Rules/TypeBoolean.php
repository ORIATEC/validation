<?php declare(strict_types=1);

namespace ORIATEC\Components\Validation\Rules;

use ORIATEC\Components\Validation\Rule;
use function in_array;

/**
 * Class TypeBoolean
 *
 * @package    ORIATEC\Components\Validation\Rules
 * @subpackage ORIATEC\Components\Validation\Rules\TypeBoolean
 */
class TypeBoolean extends Rule
{
    protected string $message = 'rule.boolean';

    public function check($value): bool
    {
        return in_array($value, [true, false, "true", "false", 1, 0, "0", "1", "y", "n"], true);
    }
}

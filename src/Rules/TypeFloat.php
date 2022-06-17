<?php declare(strict_types=1);

namespace ORIATEC\Components\Validation\Rules;

use ORIATEC\Components\Validation\Rule;
use function gettype;

/**
 * Class TypeFloatRule
 *
 * @package    ORIATEC\Components\Validation\Rules
 * @subpackage ORIATEC\Components\Validation\Rules\TypeFloatRule
 */
class TypeFloat extends Rule
{
    protected string $message = 'rule.float';

    public function check($value): bool
    {
        // https://www.php.net/manual/en/function.is-float.php#117304
        if (!is_scalar($value)) {
            return false;
        }

        if ('double' === gettype($value)) {
            return true;
        } else {
            return preg_match('/^\\d+\\.\\d+$/', (string)$value) === 1;
        }
    }
}

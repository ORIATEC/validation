<?php declare(strict_types=1);

namespace ORIATEC\Components\Validation\Rules;

use ORIATEC\Components\Validation\Rule;

/**
 * Class Lowercase
 *
 * @package    ORIATEC\Components\Validation\Rules
 * @subpackage ORIATEC\Components\Validation\Rules\Lowercase
 */
class Lowercase extends Rule
{
    protected string $message = 'rule.lowercase';

    public function check($value): bool
    {
        return mb_strtolower($value, mb_detect_encoding($value)) === $value;
    }
}

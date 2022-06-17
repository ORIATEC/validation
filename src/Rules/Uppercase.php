<?php declare(strict_types=1);

namespace ORIATEC\Components\Validation\Rules;

use ORIATEC\Components\Validation\Rule;

/**
 * Class Uppercase
 *
 * @package    ORIATEC\Components\Validation\Rules
 * @subpackage ORIATEC\Components\Validation\Rules\Uppercase
 */
class Uppercase extends Rule
{
    protected string $message = 'rule.uppercase';

    public function check($value): bool
    {
        return mb_strtoupper($value, mb_detect_encoding($value)) === $value;
    }
}

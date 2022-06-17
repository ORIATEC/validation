<?php declare(strict_types=1);

namespace ORIATEC\Components\Validation\Rules;

use ORIATEC\Components\Validation\Rule;

/**
 * Class AlphaSpaces
 *
 * @package    ORIATEC\Components\Validation\Rules
 * @subpackage ORIATEC\Components\Validation\Rules\AlphaSpaces
 */
class AlphaSpaces extends Rule
{
    protected string $message = 'rule.alpha_spaces';

    public function check($value): bool
    {
        if (!is_string($value)) {
            return false;
        }

        return preg_match('/^[\pL\pM\s]+$/u', $value) > 0;
    }
}

<?php declare(strict_types=1);

namespace ORIATEC\Components\Validation\Rules;

/**
 * Class Sometimes
 *
 * @package    ORIATEC\Components\Validation\Rules
 * @subpackage ORIATEC\Components\Validation\Rules\Sometimes
 */
class Sometimes extends Required
{
    public function check($value): bool
    {
        return true;
    }
}

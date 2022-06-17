<?php declare(strict_types=1);

namespace ORIATEC\Components\Validation\Rules;

use ORIATEC\Components\Validation\Rule;

/**
 * Class Json
 *
 * @package    ORIATEC\Components\Validation\Rules
 * @subpackage ORIATEC\Components\Validation\Rules\Json
 */
class Json extends Rule
{
    protected string $message = 'rule.json';

    public function check($value): bool
    {
        if (!is_string($value) || empty($value)) {
            return false;
        }

        json_decode($value);

        if (json_last_error() !== JSON_ERROR_NONE) {
            return false;
        }

        return true;
    }
}

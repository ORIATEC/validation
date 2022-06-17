<?php declare(strict_types=1);

namespace ORIATEC\Components\Validation\Rules;

use ORIATEC\Components\Validation\Rule;

/**
 * Class Ip
 *
 * @package    ORIATEC\Components\Validation\Rules
 * @subpackage ORIATEC\Components\Validation\Rules\Ip
 */
class Ip extends Rule
{
    protected string $message = 'rule.ip';

    public function check($value): bool
    {
        return filter_var($value, FILTER_VALIDATE_IP) !== false;
    }
}

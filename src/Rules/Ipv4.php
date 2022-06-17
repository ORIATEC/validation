<?php declare(strict_types=1);

namespace ORIATEC\Components\Validation\Rules;

use ORIATEC\Components\Validation\Rule;

/**
 * Class Ipv4
 *
 * @package    ORIATEC\Components\Validation\Rules
 * @subpackage ORIATEC\Components\Validation\Rules\Ipv4
 */
class Ipv4 extends Rule
{
    protected string $message = 'rule.ipv4';

    public function check($value): bool
    {
        return filter_var($value, FILTER_VALIDATE_IP, FILTER_FLAG_IPV4) !== false;
    }
}

<?php declare(strict_types=1);

namespace ORIATEC\Components\Validation\Rules;

use ORIATEC\Components\Validation\Rule;

/**
 * Class Rejected
 *
 * @package    ORIATEC\Components\Validation\Rules
 * @subpackage ORIATEC\Components\Validation\Rules\Rejected
 */
class Rejected extends Rule
{
    protected bool $implicit = true;
    protected string $message = 'rule.rejected';
    protected array $params = ['rejected' => ['no', 'off', '0', 0, false, 'false']];

    public function check(mixed $value): bool
    {
        return in_array($value, $this->params['rejected'], true);
    }
}

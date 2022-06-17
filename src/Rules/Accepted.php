<?php declare(strict_types=1);

namespace ORIATEC\Components\Validation\Rules;

use ORIATEC\Components\Validation\Rule;

/**
 * Class Accepted
 *
 * @package    ORIATEC\Components\Validation\Rules
 * @subpackage ORIATEC\Components\Validation\Rules\Accepted
 */
class Accepted extends Rule
{
    protected bool $implicit = true;
    protected string $message = 'rule.accepted';
    protected array $params = ['accepted' => ['yes', 'on', '1', 1, true, 'true']];

    public function check(mixed $value): bool
    {
        return in_array($value, $this->params['accepted'], true);
    }
}

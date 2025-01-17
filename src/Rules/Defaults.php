<?php declare(strict_types=1);

namespace ORIATEC\Components\Validation\Rules;

use ORIATEC\Components\Validation\Rule;
use ORIATEC\Components\Validation\Rules\Contracts\ModifyValue;

/**
 * Class Defaults
 *
 * @package    ORIATEC\Components\Validation\Rules
 * @subpackage ORIATEC\Components\Validation\Rules\Defaults
 */
class Defaults extends Rule implements ModifyValue
{
    protected string $message = 'rule.default_value';
    protected array $fillableParams = ['default'];

    public function check($value): bool
    {
        $this->assertHasRequiredParameters($this->fillableParams);

        return true;
    }

    public function modifyValue($value): mixed
    {
        return $this->isEmptyValue($value) ? $this->parameter('default') : $value;
    }

    protected function isEmptyValue($value): bool
    {
        return false === (new Required)->check($value);
    }
}

<?php declare(strict_types=1);

namespace ORIATEC\Components\Validation\Rules;

use ORIATEC\Components\Validation\Rule;

/**
 * Class Same
 *
 * @package    ORIATEC\Components\Validation\Rules
 * @subpackage ORIATEC\Components\Validation\Rules\Same
 */
class Same extends Rule
{
    protected string $message = 'rule.same';
    protected array $fillableParams = ['field'];

    public function field(string $field): self
    {
        $this->params['field'] = $field;

        return $this;
    }

    public function check($value): bool
    {
        $this->assertHasRequiredParameters($this->fillableParams);

        $field        = $this->parameter('field');
        $anotherValue = $this->attribute()->value($field);

        return $value == $anotherValue;
    }
}

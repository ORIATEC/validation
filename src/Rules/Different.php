<?php declare(strict_types=1);

namespace ORIATEC\Components\Validation\Rules;

use ORIATEC\Components\Validation\Rule;

/**
 * Class Different
 *
 * @package    ORIATEC\Components\Validation\Rules
 * @subpackage ORIATEC\Components\Validation\Rules\Different
 */
class Different extends Rule
{
    protected string $message = 'rule.different';
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
        $anotherValue = $this->validation->input()->get($field);

        return $value != $anotherValue;
    }
}

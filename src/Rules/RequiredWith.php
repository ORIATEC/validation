<?php declare(strict_types=1);

namespace ORIATEC\Components\Validation\Rules;

/**
 * Class RequiredWith
 *
 * @package    ORIATEC\Components\Validation\Rules
 * @subpackage ORIATEC\Components\Validation\Rules\RequiredWith
 */
class RequiredWith extends Required
{
    protected bool $implicit = true;
    protected string $message = 'rule.required_with';

    public function fillParameters(array $params): self
    {
        $this->params['fields'] = $params;

        return $this;
    }

    public function check($value): bool
    {
        $this->assertHasRequiredParameters(['fields']);

        $fields            = $this->parameter('fields');
        $requiredValidator = $this->validation->factory()->rule('required');

        foreach ($fields as $field) {
            if ($this->validation->input()->has($field)) {
                $this->setAttributeAsRequired();

                return $requiredValidator->check($value);
            }
        }

        return true;
    }
}

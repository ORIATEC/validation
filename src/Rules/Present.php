<?php declare(strict_types=1);

namespace ORIATEC\Components\Validation\Rules;

use ORIATEC\Components\Validation\Rule;

/**
 * Class Present
 *
 * @package    ORIATEC\Components\Validation\Rules
 * @subpackage ORIATEC\Components\Validation\Rules\Present
 */
class Present extends Rule
{
    protected bool $implicit = true;
    protected string $message = 'rule.present';

    public function check($value): bool
    {
        $this->setAttributeAsRequired();

        return $this->validation->input()->has($this->attribute->key());
    }

    protected function setAttributeAsRequired()
    {
        $this->attribute?->makeRequired();
    }
}

<?php declare(strict_types=1);

namespace ORIATEC\Components\Validation;

use InvalidArgumentException;

/**
 * Class AttributeBag
 *
 * @package    ORIATEC\Components\Validation
 * @subpackage ORIATEC\Components\Validation\AttributeBag
 *
 * @property array<string, Attribute> $data
 */
class AttributeBag extends DataBag
{
    public function add(string $key, Attribute $attribute): self
    {
        $this->set($key, $attribute);

        return $this;
    }

    public function beforeValidate(): void
    {
        $this->each(fn (Attribute $a) => $a->rules()->beforeValidate());
    }

    public function set(string $key, mixed $value): static
    {
        if (!$value instanceof Attribute) {
            throw new InvalidArgumentException(sprintf('Value must be an instance of %s', Attribute::class));
        }

        return parent::set($key, $value);
    }
}

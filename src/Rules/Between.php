<?php declare(strict_types=1);

namespace ORIATEC\Components\Validation\Rules;

use ORIATEC\Components\Validation\Rule;
use ORIATEC\Components\Validation\Rules\Behaviours\CanObtainSizeValue;

/**
 * Class Between
 *
 * @package    ORIATEC\Components\Validation\Rules
 * @subpackage ORIATEC\Components\Validation\Rules\Between
 */
class Between extends Rule
{
    use CanObtainSizeValue;

    protected string $message = 'rule.between';
    protected array $fillableParams = ['min', 'max'];

    public function check($value): bool
    {
        $this->assertHasRequiredParameters($this->fillableParams);

        $min = $this->getSizeInBytes($this->parameter('min'));
        $max = $this->getSizeInBytes($this->parameter('max'));

        $valueSize = $this->getValueSize($value);

        if (!is_numeric($valueSize)) {
            return false;
        }

        return ($valueSize >= $min && $valueSize <= $max);
    }
}

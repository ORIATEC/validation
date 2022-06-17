<?php declare(strict_types=1);

namespace ORIATEC\Components\Validation\Rules;

use ORIATEC\Components\Validation\Rule;
use ORIATEC\Components\Validation\Rules\Behaviours\CanObtainSizeValue;

/**
 * Class Min
 *
 * @package    ORIATEC\Components\Validation\Rules
 * @subpackage ORIATEC\Components\Validation\Rules\Min
 */
class Min extends Rule
{
    use CanObtainSizeValue;

    protected string $message = 'rule.min';
    protected array $fillableParams = ['min'];

    public function check($value): bool
    {
        $this->assertHasRequiredParameters($this->fillableParams);

        $min       = $this->getSizeInBytes($this->parameter('min'));
        $valueSize = $this->getValueSize($value);

        if (!is_numeric($valueSize)) {
            return false;
        }

        return $valueSize >= $min;
    }
}

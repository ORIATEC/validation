<?php declare(strict_types=1);

namespace ORIATEC\Components\Validation\Rules;

use ORIATEC\Components\Validation\Rule;
use ORIATEC\Components\Validation\Rules\Behaviours\CanObtainSizeValue;

/**
 * Class Max
 *
 * @package    ORIATEC\Components\Validation\Rules
 * @subpackage ORIATEC\Components\Validation\Rules\Max
 */
class Max extends Rule
{
    use CanObtainSizeValue;

    protected string $message = 'rule.max';
    protected array $fillableParams = ['max'];

    public function check($value): bool
    {
        $this->assertHasRequiredParameters($this->fillableParams);

        $max       = $this->getSizeInBytes($this->parameter('max'));
        $valueSize = $this->getValueSize($value);

        if (!is_numeric($valueSize)) {
            return false;
        }

        return $valueSize <= $max;
    }
}

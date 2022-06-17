<?php declare(strict_types=1);

namespace ORIATEC\Components\Validation\Rules;

use ORIATEC\Components\Validation\Rule;
use ORIATEC\Components\Validation\Rules\Behaviours\CanValidateDates;

/**
 * Class After
 *
 * @package    ORIATEC\Components\Validation\Rules
 * @subpackage ORIATEC\Components\Validation\Rules\After
 */
class After extends Rule
{
    use CanValidateDates;

    protected string $message = 'rule.after';
    protected array $fillableParams = ['time'];

    public function check($value): bool
    {
        $this->assertHasRequiredParameters($this->fillableParams);

        $time = $this->parameter('time');

        $this->assertDate($value);
        $this->assertDate($time);

        return $this->getTimeStamp($time) < $this->getTimeStamp($value);
    }
}

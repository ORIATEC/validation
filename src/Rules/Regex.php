<?php declare(strict_types=1);

namespace ORIATEC\Components\Validation\Rules;

use ORIATEC\Components\Validation\Rule;

/**
 * Class Regex
 *
 * @package    ORIATEC\Components\Validation\Rules
 * @subpackage ORIATEC\Components\Validation\Rules\Regex
 */
class Regex extends Rule
{
    protected string $message = 'rule.regex';
    protected array $fillableParams = ['regex'];

    public function check($value): bool
    {
        $this->assertHasRequiredParameters($this->fillableParams);

        return preg_match($this->parameter('regex'), $value) > 0;
    }
}

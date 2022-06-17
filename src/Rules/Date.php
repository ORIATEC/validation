<?php declare(strict_types=1);

namespace ORIATEC\Components\Validation\Rules;

use ORIATEC\Components\Validation\Rule;

/**
 * Class Date
 *
 * @package    ORIATEC\Components\Validation\Rules
 * @subpackage ORIATEC\Components\Validation\Rules\Date
 */
class Date extends Rule
{
    protected string $message = 'rule.date';
    protected array $fillableParams = ['format'];
    protected array $params = [
        'format' => 'Y-m-d',
    ];

    public function check($value): bool
    {
        $this->assertHasRequiredParameters($this->fillableParams);

        $format = $this->parameter('format');

        return date_create_from_format($format, (string)$value) !== false;
    }
}

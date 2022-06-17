<?php declare(strict_types=1);

namespace ORIATEC\Components\Validation\Exceptions;

use Exception;
use ORIATEC\Components\Validation\Rule;

/**
 * Class RuleException
 *
 * @package    ORIATEC\Components\Validation\Exceptions
 * @subpackage ORIATEC\Components\Validation\Exceptions\RuleException
 */
class RuleException extends Exception
{
    public static function notFound(string $rule): self
    {
        return new self(sprintf('Validator "%s" is not registered', $rule));
    }

    public static function invalidRuleType(string $rule): self
    {
        return new self(sprintf('Rule must be a string, Closure or "%s" instance; "%s" given', Rule::class, $rule));
    }
}

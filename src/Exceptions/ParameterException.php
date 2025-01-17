<?php declare(strict_types=1);

namespace ORIATEC\Components\Validation\Exceptions;

use Exception;

/**
 * Class MissingRequiredParameterException
 *
 * @package    ORIATEC\Components\Validation\Exceptions
 * @subpackage ORIATEC\Components\Validation\Exceptions\MissingRequiredParameterException
 */
class ParameterException extends Exception
{
    public static function missing(string $rule, string $param): self
    {
        return new self(sprintf('Missing required parameter "%s" on rule "%s"', $param , $rule));
    }

    public static function invalidDate(string $value): self
    {
        return new self(sprintf('"%s" is not a valid date format. Expected a date like: 2016-12-08, 2016-12-02 14:58, or tomorrow', $value));
    }
}

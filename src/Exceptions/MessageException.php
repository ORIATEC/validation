<?php declare(strict_types=1);

namespace ORIATEC\Components\Validation\Exceptions;

use Exception;

/**
 * Class MessageException
 *
 * @package    ORIATEC\Components\Validation\Exceptions
 * @subpackage ORIATEC\Components\Validation\Exceptions\MessageException
 */
class MessageException extends Exception
{
    public static function noMessageForKey(string $lang, string $key): self
    {
        return new self(sprintf('No message was found for the language "%s" and "%s"', $lang, $key));
    }

    public static function noMessageForKeys(string $lang, array $keys): self
    {
        return new self(sprintf('No message was found for the language "%s" and any of: "%s"', $lang, implode('","', $keys)));
    }
}

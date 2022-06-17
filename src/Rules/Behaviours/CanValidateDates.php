<?php declare(strict_types=1);

namespace ORIATEC\Components\Validation\Rules\Behaviours;

use ORIATEC\Components\Validation\Exceptions\ParameterException;

/**
 * Trait CanValidateDates
 *
 * @package    ORIATEC\Components\Validation\Rules\Behaviours
 * @subpackage ORIATEC\Components\Validation\Rules\Behaviours\CanValidateDates
 */
trait CanValidateDates
{
    protected function assertDate(string $date): void
    {
        if (!$this->isValidDate($date)) {
            throw ParameterException::invalidDate($date);
        }
    }

    protected function isValidDate(string $date): bool
    {
        return (strtotime($date) !== false);
    }

    protected function getTimeStamp($date): int
    {
        return strtotime($date);
    }
}

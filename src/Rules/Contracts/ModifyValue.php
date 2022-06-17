<?php declare(strict_types=1);

namespace ORIATEC\Components\Validation\Rules\Contracts;

/**
 * Interface ModifyValue
 *
 * @package    ORIATEC\Components\Validation\Rules\Contracts
 * @subpackage ORIATEC\Components\Validation\Rules\Contracts\ModifyValue
 */
interface ModifyValue
{
    /**
     * Modify given value so in current and next rules returned value will be used
     */
    public function modifyValue(mixed $value): mixed;
}

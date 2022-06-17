<?php declare(strict_types=1);

namespace ORIATEC\Components\Validation\Rules\Contracts;

/**
 * Interface BeforeValidate
 *
 * @package    ORIATEC\Components\Validation\Rules\Contracts
 * @subpackage ORIATEC\Components\Validation\Rules\Contracts\BeforeValidate
 */
interface BeforeValidate
{
    public function beforeValidate(): void;
}

<?php declare(strict_types=1);

namespace ORIATEC\Components\Validation\Rules;

use ORIATEC\Components\Validation\Rule;
use ORIATEC\Components\Validation\Rules\Behaviours\CanValidateFiles;
use Psr\Http\Message\UploadedFileInterface;

/**
 * Class Required
 *
 * @package    ORIATEC\Components\Validation\Rules
 * @subpackage ORIATEC\Components\Validation\Rules\Required
 */
class Required extends Rule
{
    use CanValidateFiles;

    protected bool $implicit = true;
    protected string $message = 'rule.required';

    public function check($value): bool
    {
        $this->setAttributeAsRequired();

        if ($this->attribute?->rules()->has('uploaded_file')) {

            if($value instanceof UploadedFileInterface){
                return $value->getError() != UPLOAD_ERR_NO_FILE;
            }

            return $this->isValueFromUploadedFiles($value) && $value['error'] != UPLOAD_ERR_NO_FILE;
        }

        if (is_string($value)) {
            return mb_strlen(trim($value), 'UTF-8') > 0;
        }
        if (is_array($value)) {
            return count($value) > 0;
        }

        return !is_null($value);
    }

    protected function setAttributeAsRequired(): void
    {
        $this->attribute?->makeRequired();
    }
}

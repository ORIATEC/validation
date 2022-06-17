<?php declare(strict_types=1);

namespace ORIATEC\Components\Validation\Rules;

use ORIATEC\Components\Validation\Contracts\MimeTypeGuesser as MimeTypeGuesserContract;
use ORIATEC\Components\Validation\MimeTypeGuesser;
use ORIATEC\Components\Validation\Rule;
use ORIATEC\Components\Validation\Rules\Behaviours\CanValidateFiles;

/**
 * Class Mimes
 *
 * @package    ORIATEC\Components\Validation\Rules
 * @subpackage ORIATEC\Components\Validation\Rules\Mimes
 */
class Mimes extends Rule
{
    use CanValidateFiles;

    protected string $message = 'rule.mimes';
    protected MimeTypeGuesserContract $guesser;

    public function __construct(MimeTypeGuesserContract $guesser = null)
    {
        $this->guesser = $guesser ?? new MimeTypeGuesser();
    }

    public function fillParameters(array $params): self
    {
        $this->types($params);

        return $this;
    }

    public function types($types): self
    {
        if (is_string($types)) {
            $types = explode(',', $types);
        }

        $this->params['allowed_types'] = $types;

        return $this;
    }

    public function check($value): bool
    {
        $allowedTypes = $this->parameter('allowed_types');

        // below is Required rule job
        if (!$this->isValueFromUploadedFiles($value) || $value['error'] == UPLOAD_ERR_NO_FILE) {
            return true;
        }

        if (!$this->isUploadedFile($value)) {
            return false;
        }

        // just make sure there is no error
        if ($value['error']) {
            return false;
        }

        if (!empty($allowedTypes) && !in_array($this->guesser->getExtension($value['type']), $allowedTypes)) {
            return false;
        }

        return true;
    }
}

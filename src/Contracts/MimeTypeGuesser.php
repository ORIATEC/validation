<?php declare(strict_types=1);

namespace ORIATEC\Components\Validation\Contracts;

/**
 * Class MimeTypeGuesser
 *
 * @package    ORIATEC\Components\Validation
 * @subpackage ORIATEC\Components\Validation\MimeTypeGuesser
 */
interface MimeTypeGuesser
{
    public function getExtension(string $mimeType): ?string;

    public function getMimeType(string $extension): string;
}

<?php declare(strict_types=1);

namespace ORIATEC\Components\Validation\Rules;

use ORIATEC\Components\Validation\Rule;

/**
 * Class Extension
 *
 * @package    ORIATEC\Components\Validation\Rules
 * @subpackage ORIATEC\Components\Validation\Rules\Extension
 */
class Extension extends Rule
{
    protected string $message = 'rule.extension';

    public function fillParameters(array $params): self
    {
        if (count($params) == 1 && is_array($params[0])) {
            $params = $params[0];
        }
        $this->params['allowed_extensions'] = $params;

        return $this;
    }

    public function check($value): bool
    {
        $this->assertHasRequiredParameters(['allowed_extensions']);

        $allowedExtensions = $this->parameter('allowed_extensions');

        foreach ($allowedExtensions as $key => $ext) {
            $allowedExtensions[$key] = ltrim($ext, '.');
        }

        $ext = strtolower(pathinfo($value, PATHINFO_EXTENSION));

        return $ext && in_array($ext, $allowedExtensions);
    }
}

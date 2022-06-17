<?php declare(strict_types=1);

namespace ORIATEC\Components\Validation\Rules;

use Closure;
use InvalidArgumentException;
use ORIATEC\Components\Validation\Rule;

/**
 * Class Callback
 *
 * @package    ORIATEC\Components\Validation\Rules
 * @subpackage ORIATEC\Components\Validation\Rules\Callback
 */
class Callback extends Rule
{
    protected string $message = 'rule.default';
    protected array $fillableParams = ['callback'];

    public function through(Closure $callback): self
    {
        $this->params['callback'] = $callback;

        return $this;
    }

    public function check($value): bool
    {
        $this->assertHasRequiredParameters($this->fillableParams);

        $callback = $this->parameter('callback');

        if (!$callback instanceof Closure) {
            throw new InvalidArgumentException(sprintf('Callback rule for "%s" is not callable.', $this->attribute->key()));
        }

        $callback       = $callback->bindTo($this);
        $invalidMessage = $callback($value);

        if (is_string($invalidMessage)) {
            $this->message = $invalidMessage;

            return false;
        }

        return $invalidMessage;
    }
}

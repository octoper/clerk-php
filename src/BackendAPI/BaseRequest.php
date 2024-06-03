<?php

namespace Octoper\ClerkPHP;

use Saloon\Contracts\Body\HasBody;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

class BaseRequest extends Request implements HasBody
{
    use HasJsonBody;

    public function resolveEndpoint(): string
    {
        return '';
    }

    public function __construct(
        protected array $body = [],
    ) {
    }

    protected function defaultBody(): array
    {
        return $this->body;
    }
}

<?php

namespace Octoper\ClerkPHP\Requests\InstanceSettings;

use Octoper\ClerkPHP\BaseRequest;
use Saloon\Enums\Method;

/**
 * UpdateInstance
 *
 * Updates the settings of an instance
 */
class UpdateInstance extends BaseRequest
{
    protected Method $method = Method::PATCH;

    public function resolveEndpoint(): string
    {
        return '/instance';
    }

    public function __construct(
        protected array $body = [],
    ) {
        parent::__construct($body);
    }
}

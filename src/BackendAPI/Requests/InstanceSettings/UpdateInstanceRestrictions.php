<?php

namespace Octoper\ClerkPHP\Requests\InstanceSettings;

use Octoper\ClerkPHP\BaseRequest;
use Saloon\Enums\Method;

/**
 * UpdateInstanceRestrictions
 *
 * Updates the restriction settings of an instance
 */
class UpdateInstanceRestrictions extends BaseRequest
{
    protected Method $method = Method::PATCH;

    public function resolveEndpoint(): string
    {
        return '/instance/restrictions';
    }

    public function __construct(
        protected array $body = [],
    ) {
        parent::__construct($body);
    }
}

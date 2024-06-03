<?php

namespace Octoper\ClerkPHP\Requests\InstanceSettings;

use Octoper\ClerkPHP\BaseRequest;
use Saloon\Enums\Method;

/**
 * UpdateInstanceOrganizationSettings
 *
 * Updates the organization settings of the instance
 */
class UpdateInstanceOrganizationSettings extends BaseRequest
{
    protected Method $method = Method::PATCH;

    public function resolveEndpoint(): string
    {
        return '/instance/organization_settings';
    }

    public function __construct(
        protected array $body = [],
    ) {
        parent::__construct($body);
    }
}

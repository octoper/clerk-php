<?php

namespace Octoper\ClerkPHP\Requests\BetaFeatures;

use Octoper\ClerkPHP\BaseRequest;
use Saloon\Enums\Method;

/**
 * UpdateInstanceAuthConfig
 *
 * Updates the settings of an instance
 */
class UpdateInstanceAuthConfig extends BaseRequest
{
    protected Method $method = Method::PATCH;

    public function resolveEndpoint(): string
    {
        return '/beta_features/instance_settings';
    }

    public function __construct(
        protected array $body = [],
    ) {
        parent::__construct($body);
    }
}

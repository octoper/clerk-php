<?php

namespace Octoper\ClerkPHP\Requests\BetaFeatures;

use Octoper\ClerkPHP\BaseRequest;
use Saloon\Enums\Method;

/**
 * UpdateProductionInstanceDomain
 *
 * Change the domain of a production instance.
 *
 * Changing the domain requires updating the [DNS
 * records](https://clerk.com/docs/deployments/overview#dns-records) accordingly, deploying new [SSL
 * certificates](https://clerk.com/docs/deployments/overview#deploy), updating your Social Connection's
 * redirect URLs and setting the new keys in your code.
 *
 * WARNING: Changing your domain will invalidate
 * all current user sessions (i.e. users will be logged out). Also, while your application is being
 * deployed, a small downtime is expected to occur.
 */
class UpdateProductionInstanceDomain extends BaseRequest
{
    protected Method $method = Method::PUT;

    public function resolveEndpoint(): string
    {
        return '/beta_features/domain';
    }

    public function __construct(
        protected array $body = [],
    ) {
        parent::__construct($body);
    }
}

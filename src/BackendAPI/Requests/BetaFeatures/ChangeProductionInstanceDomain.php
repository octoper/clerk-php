<?php

namespace Octoper\ClerkPHP\Requests\BetaFeatures;

use Octoper\ClerkPHP\BaseRequest;
use Saloon\Enums\Method;

/**
 * ChangeProductionInstanceDomain
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
class ChangeProductionInstanceDomain extends BaseRequest
{
    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return '/instance/change_domain';
    }

    public function __construct(
        protected array $body = [],
    ) {
        parent::__construct($body);
    }
}

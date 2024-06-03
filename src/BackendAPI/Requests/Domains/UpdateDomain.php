<?php

namespace Octoper\ClerkPHP\Requests\Domains;

use Octoper\ClerkPHP\BaseRequest;
use Saloon\Enums\Method;

/**
 * UpdateDomain
 *
 * The `proxy_url` can be updated only for production instances.
 * Update one of the instance's domains.
 * Both primary and satellite domains can be updated.
 * If you choose to use Clerk via proxy, use this
 * endpoint to specify the `proxy_url`.
 * Whenever you decide you'd rather switch to DNS setup for Clerk,
 * simply set `proxy_url`
 * to `null` for the domain. When you update a production instance's primary
 * domain name,
 * you have to make sure that you've completed all the necessary setup steps for DNS
 * and
 * emails to work. Expect downtime otherwise. Updating a primary domain's name will also
 * update the
 * instance's home origin, affecting the default application paths.
 */
class UpdateDomain extends BaseRequest
{
    protected Method $method = Method::PATCH;

    public function resolveEndpoint(): string
    {
        return "/domains/{$this->domainId}";
    }

    /**
     * @param  string  $domainId  The ID of the domain that will be updated.
     */
    public function __construct(
        protected string $domainId,
        protected array $body = [],
    ) {
        parent::__construct($body);
    }
}

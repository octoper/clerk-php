<?php

namespace Octoper\ClerkPHP\Requests\SamlConnections;

use Octoper\ClerkPHP\BaseRequest;
use Saloon\Enums\Method;

/**
 * GetSAMLConnection
 *
 * Fetches the SAML Connection whose ID matches the provided `saml_connection_id` in the path.
 */
class GetSamlconnection extends BaseRequest
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/saml_connections/{$this->samlConnectionId}";
    }

    /**
     * @param  string  $samlConnectionId  The ID of the SAML Connection
     */
    public function __construct(
        protected string $samlConnectionId,
    ) {
    }
}

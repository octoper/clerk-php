<?php

namespace Octoper\ClerkPHP\Requests\SamlConnections;

use Octoper\ClerkPHP\BaseRequest;
use Saloon\Enums\Method;

/**
 * DeleteSAMLConnection
 *
 * Deletes the SAML Connection whose ID matches the provided `id` in the path.
 */
class DeleteSamlconnection extends BaseRequest
{
    protected Method $method = Method::DELETE;

    public function resolveEndpoint(): string
    {
        return "/saml_connections/{$this->samlConnectionId}";
    }

    /**
     * @param  string  $samlConnectionId  The ID of the SAML Connection to delete
     */
    public function __construct(
        protected string $samlConnectionId,
    ) {
    }
}

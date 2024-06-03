<?php

namespace Octoper\ClerkPHP\Requests\SamlConnections;

use Octoper\ClerkPHP\BaseRequest;
use Saloon\Enums\Method;

/**
 * UpdateSAMLConnection
 *
 * Updates the SAML Connection whose ID matches the provided `id` in the path.
 */
class UpdateSamlconnection extends BaseRequest
{
    protected Method $method = Method::PATCH;

    public function resolveEndpoint(): string
    {
        return "/saml_connections/{$this->samlConnectionId}";
    }

    /**
     * @param  string  $samlConnectionId  The ID of the SAML Connection to update
     */
    public function __construct(
        protected string $samlConnectionId,
        protected array $body = [],
    ) {
        parent::__construct($body);
    }
}

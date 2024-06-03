<?php

namespace Octoper\ClerkPHP\Requests\SamlConnections;

use Octoper\ClerkPHP\BaseRequest;
use Saloon\Enums\Method;

/**
 * CreateSAMLConnection
 *
 * Create a new SAML Connection.
 */
class CreateSamlconnection extends BaseRequest
{
    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return '/saml_connections';
    }

    public function __construct(
        protected array $body = [],
    ) {
        parent::__construct($body);
    }
}

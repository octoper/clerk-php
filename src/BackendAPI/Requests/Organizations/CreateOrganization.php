<?php

namespace Octoper\ClerkPHP\Requests\Organizations;

use Octoper\ClerkPHP\BaseRequest;
use Saloon\Enums\Method;

/**
 * CreateOrganization
 *
 * Creates a new organization with the given name for an instance.
 * In order to successfully create an
 * organization you need to provide the ID of the User who will become the organization
 * administrator.
 * You can specify an optional slug for the new organization.
 * If provided, the
 * organization slug can contain only lowercase alphanumeric characters (letters and digits) and the
 * dash "-".
 * Organization slugs must be unique for the instance.
 * You can provide additional metadata
 * for the organization and set any custom attribute you want.
 * Organizations support private and public
 * metadata.
 * Private metadata can only be accessed from the Backend API.
 * Public metadata can be
 * accessed from the Backend API, and are read-only from the Frontend API.
 */
class CreateOrganization extends BaseRequest
{
    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return '/organizations';
    }

    public function __construct(
        protected array $body = [],
    ) {
        parent::__construct($body);
    }
}

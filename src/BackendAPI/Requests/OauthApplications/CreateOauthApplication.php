<?php

namespace Octoper\ClerkPHP\Requests\OauthApplications;

use Octoper\ClerkPHP\BaseRequest;
use Saloon\Enums\Method;

/**
 * CreateOAuthApplication
 *
 * Creates a new OAuth application with the given name and callback URL for an instance.
 * The callback
 * URL must be a valid url.
 * All URL schemes are allowed such as `http://`, `https://`, `myapp://`,
 * etc...
 */
class CreateOauthApplication extends BaseRequest
{
    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return '/oauth_applications';
    }

    public function __construct(
        protected array $body = [],
    ) {
        parent::__construct($body);
    }
}

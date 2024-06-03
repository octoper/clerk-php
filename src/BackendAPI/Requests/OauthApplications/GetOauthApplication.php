<?php

namespace Octoper\ClerkPHP\Requests\OauthApplications;

use Octoper\ClerkPHP\BaseRequest;
use Saloon\Enums\Method;

/**
 * GetOAuthApplication
 *
 * Fetches the OAuth application whose ID matches the provided `id` in the path.
 */
class GetOauthApplication extends BaseRequest
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/oauth_applications/{$this->oauthApplicationId}";
    }

    /**
     * @param  string  $oauthApplicationId  The ID of the OAuth application
     */
    public function __construct(
        protected string $oauthApplicationId,
    ) {
    }
}

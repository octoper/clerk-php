<?php

namespace Octoper\ClerkPHP\Requests\OauthApplications;

use Octoper\ClerkPHP\BaseRequest;
use Saloon\Enums\Method;

/**
 * DeleteOAuthApplication
 *
 * Deletes the given OAuth application.
 * This is not reversible.
 */
class DeleteOauthApplication extends BaseRequest
{
    protected Method $method = Method::DELETE;

    public function resolveEndpoint(): string
    {
        return "/oauth_applications/{$this->oauthApplicationId}";
    }

    /**
     * @param  string  $oauthApplicationId  The ID of the OAuth application to delete
     */
    public function __construct(
        protected string $oauthApplicationId,
    ) {
    }
}

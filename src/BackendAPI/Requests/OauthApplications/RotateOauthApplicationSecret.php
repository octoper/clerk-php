<?php

namespace Octoper\ClerkPHP\Requests\OauthApplications;

use Octoper\ClerkPHP\BaseRequest;
use Saloon\Enums\Method;

/**
 * RotateOAuthApplicationSecret
 *
 * Rotates the OAuth application's client secret.
 * When the client secret is rotated, make sure to
 * update it in authorized OAuth clients.
 */
class RotateOauthApplicationSecret extends BaseRequest
{
    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return "/oauth_applications/{$this->oauthApplicationId}/rotate_secret";
    }

    /**
     * @param  string  $oauthApplicationId  The ID of the OAuth application for which to rotate the client secret
     */
    public function __construct(
        protected string $oauthApplicationId,
    ) {
    }
}

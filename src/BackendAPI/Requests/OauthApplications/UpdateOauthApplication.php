<?php

namespace Octoper\ClerkPHP\Requests\OauthApplications;

use Octoper\ClerkPHP\BaseRequest;
use Saloon\Enums\Method;

/**
 * UpdateOAuthApplication
 *
 * Updates an existing OAuth application
 */
class UpdateOauthApplication extends BaseRequest
{
    protected Method $method = Method::PATCH;

    public function resolveEndpoint(): string
    {
        return "/oauth_applications/{$this->oauthApplicationId}";
    }

    /**
     * @param  string  $oauthApplicationId  The ID of the OAuth application to update
     */
    public function __construct(
        protected string $oauthApplicationId,
        protected array $body = [],
    ) {
        parent::__construct($body);
    }
}

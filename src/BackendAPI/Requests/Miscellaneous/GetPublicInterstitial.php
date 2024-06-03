<?php

namespace Octoper\ClerkPHP\Requests\Miscellaneous;

use Octoper\ClerkPHP\BaseRequest;
use Saloon\Enums\Method;

/**
 * GetPublicInterstitial
 *
 * The Clerk interstitial endpoint serves an html page that loads clerk.js in order to check the user's
 * authentication state.
 * It is used by Clerk SDKs when the user's authentication state cannot be
 * immediately determined.
 */
class GetPublicInterstitial extends BaseRequest
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return '/public/interstitial';
    }

    /**
     * @param  null|string  $frontendApi  The Frontend API key of your instance
     * @param  null|string  $publishableKey  The publishable key of your instance
     */
    public function __construct(
        protected ?string $frontendApi = null,
        protected ?string $publishableKey = null,
    ) {
    }

    public function defaultQuery(): array
    {
        return array_filter(['frontendApi' => $this->frontendApi, 'publishable_key' => $this->publishableKey]);
    }
}

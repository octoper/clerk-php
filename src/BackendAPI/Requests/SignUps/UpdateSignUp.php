<?php

namespace Octoper\ClerkPHP\Requests\SignUps;

use Octoper\ClerkPHP\BaseRequest;
use Saloon\Enums\Method;

/**
 * UpdateSignUp
 *
 * Update the sign-up with the given ID
 */
class UpdateSignUp extends BaseRequest
{
    protected Method $method = Method::PATCH;

    public function resolveEndpoint(): string
    {
        return "/sign_ups/{$this->id}";
    }

    /**
     * @param  string  $id  The ID of the sign-up to update
     */
    public function __construct(
        protected string $id,
        protected array $body = [],
    ) {
        parent::__construct($body);
    }
}

<?php

namespace Octoper\ClerkPHP\Requests\Organizations;

use Octoper\ClerkPHP\BaseRequest;
use Saloon\Enums\Method;

/**
 * UploadOrganizationLogo
 *
 * Set or replace an organization's logo, by uploading an image file.
 * This endpoint uses the
 * `multipart/form-data` request content type and accepts a file of image type.
 * The file size cannot
 * exceed 10MB.
 * Only the following file content types are supported: `image/jpeg`, `image/png`,
 * `image/gif`, `image/webp`, `image/x-icon`, `image/vnd.microsoft.icon`.
 */
class UploadOrganizationLogo extends BaseRequest
{
    protected Method $method = Method::PUT;

    public function resolveEndpoint(): string
    {
        return "/organizations/{$this->organizationId}/logo";
    }

    /**
     * @param  string  $organizationId  The ID of the organization for which to upload a logo
     */
    public function __construct(
        protected string $organizationId,
        protected array $body = [],
    ) {
        parent::__construct($body);
    }
}

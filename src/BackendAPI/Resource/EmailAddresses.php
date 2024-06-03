<?php

namespace Octoper\ClerkPHP\Resource;

use Octoper\ClerkPHP\Requests\EmailAddresses\CreateEmailAddress;
use Octoper\ClerkPHP\Requests\EmailAddresses\DeleteEmailAddress;
use Octoper\ClerkPHP\Requests\EmailAddresses\GetEmailAddress;
use Octoper\ClerkPHP\Requests\EmailAddresses\UpdateEmailAddress;
use Octoper\ClerkPHP\Resource;
use Saloon\Http\Response;

class EmailAddresses extends Resource
{
    public function createEmailAddress(array $body = []): Response
    {
        return $this->connector->send(new CreateEmailAddress($body));
    }

    /**
     * @param  string  $emailAddressId  The ID of the email address to retrieve
     */
    public function getEmailAddress(string $emailAddressId): Response
    {
        return $this->connector->send(new GetEmailAddress($emailAddressId));
    }

    /**
     * @param  string  $emailAddressId  The ID of the email address to delete
     */
    public function deleteEmailAddress(string $emailAddressId): Response
    {
        return $this->connector->send(new DeleteEmailAddress($emailAddressId));
    }

    /**
     * @param  string  $emailAddressId  The ID of the email address to update
     */
    public function updateEmailAddress(string $emailAddressId, array $body = []): Response
    {
        return $this->connector->send(new UpdateEmailAddress($emailAddressId, $body));
    }
}

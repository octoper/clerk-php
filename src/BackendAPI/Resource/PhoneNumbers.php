<?php

namespace Octoper\ClerkPHP\Resource;

use Octoper\ClerkPHP\Requests\PhoneNumbers\CreatePhoneNumber;
use Octoper\ClerkPHP\Requests\PhoneNumbers\DeletePhoneNumber;
use Octoper\ClerkPHP\Requests\PhoneNumbers\GetPhoneNumber;
use Octoper\ClerkPHP\Requests\PhoneNumbers\UpdatePhoneNumber;
use Octoper\ClerkPHP\Resource;
use Saloon\Http\Response;

class PhoneNumbers extends Resource
{
    public function createPhoneNumber(array $body = []): Response
    {
        return $this->connector->send(new CreatePhoneNumber($body));
    }

    /**
     * @param  string  $phoneNumberId  The ID of the phone number to retrieve
     */
    public function getPhoneNumber(string $phoneNumberId): Response
    {
        return $this->connector->send(new GetPhoneNumber($phoneNumberId));
    }

    /**
     * @param  string  $phoneNumberId  The ID of the phone number to delete
     */
    public function deletePhoneNumber(string $phoneNumberId): Response
    {
        return $this->connector->send(new DeletePhoneNumber($phoneNumberId));
    }

    /**
     * @param  string  $phoneNumberId  The ID of the phone number to update
     */
    public function updatePhoneNumber(string $phoneNumberId, array $body = []): Response
    {
        return $this->connector->send(new UpdatePhoneNumber($phoneNumberId, $body));
    }
}

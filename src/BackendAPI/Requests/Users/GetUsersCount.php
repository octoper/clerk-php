<?php

namespace Octoper\ClerkPHP\Requests\Users;

use Octoper\ClerkPHP\BaseRequest;
use Saloon\Enums\Method;

/**
 * GetUsersCount
 *
 * Returns a total count of all users that match the given filtering criteria.
 */
class GetUsersCount extends BaseRequest
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return '/users/count';
    }

    /**
     * @param  null|array  $emailAddress  Counts users with the specified email addresses.
     *                                    Accepts up to 100 email addresses.
     *                                    Any email addresses not found are ignored.
     * @param  null|array  $phoneNumber  Counts users with the specified phone numbers.
     *                                   Accepts up to 100 phone numbers.
     *                                   Any phone numbers not found are ignored.
     * @param  null|array  $externalId  Counts users with the specified external ids.
     *                                  Accepts up to 100 external ids.
     *                                  Any external ids not found are ignored.
     * @param  null|array  $username  Counts users with the specified usernames.
     *                                Accepts up to 100 usernames.
     *                                Any usernames not found are ignored.
     * @param  null|array  $web3Wallet  Counts users with the specified web3 wallet addresses.
     *                                  Accepts up to 100 web3 wallet addresses.
     *                                  Any web3 wallet addressed not found are ignored.
     * @param  null|array  $userId  Counts users with the user ids specified.
     *                              Accepts up to 100 user ids.
     *                              Any user ids not found are ignored.
     * @param  null|string  $query  Counts users that match the given query.
     *                              For possible matches, we check the email addresses, phone numbers, usernames, web3 wallets, user ids, first and last names.
     *                              The query value doesn't need to match the exact value you are looking for, it is capable of partial matches as well.
     */
    public function __construct(
        protected ?array $emailAddress = null,
        protected ?array $phoneNumber = null,
        protected ?array $externalId = null,
        protected ?array $username = null,
        protected ?array $web3Wallet = null,
        protected ?array $userId = null,
        protected ?string $query = null,
    ) {
    }

    public function defaultQuery(): array
    {
        return array_filter([
            'email_address' => $this->emailAddress,
            'phone_number' => $this->phoneNumber,
            'external_id' => $this->externalId,
            'username' => $this->username,
            'web3_wallet' => $this->web3Wallet,
            'user_id' => $this->userId,
            'query' => $this->query,
        ]);
    }
}

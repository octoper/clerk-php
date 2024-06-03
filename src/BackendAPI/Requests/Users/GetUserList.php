<?php

namespace Octoper\ClerkPHP\Requests\Users;

use Octoper\ClerkPHP\BaseRequest;
use Saloon\Enums\Method;

/**
 * GetUserList
 *
 * Returns a list of all users.
 * The users are returned sorted by creation date, with the newest users
 * appearing first.
 */
class GetUserList extends BaseRequest
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return '/users';
    }

    /**
     * @param  null|array  $emailAddress  Returns users with the specified email addresses.
     *                                    Accepts up to 100 email addresses.
     *                                    Any email addresses not found are ignored.
     * @param  null|array  $phoneNumber  Returns users with the specified phone numbers.
     *                                   Accepts up to 100 phone numbers.
     *                                   Any phone numbers not found are ignored.
     * @param  null|array  $externalId  Returns users with the specified external ids.
     *                                  For each external id, the `+` and `-` can be
     *                                  prepended to the id, which denote whether the
     *                                  respective external id should be included or
     *                                  excluded from the result set.
     *                                  Accepts up to 100 external ids.
     *                                  Any external ids not found are ignored.
     * @param  null|array  $username  Returns users with the specified usernames.
     *                                Accepts up to 100 usernames.
     *                                Any usernames not found are ignored.
     * @param  null|array  $web3Wallet  Returns users with the specified web3 wallet addresses.
     *                                  Accepts up to 100 web3 wallet addresses.
     *                                  Any web3 wallet addressed not found are ignored.
     * @param  null|array  $userId  Returns users with the user ids specified.
     *                              For each user id, the `+` and `-` can be
     *                              prepended to the id, which denote whether the
     *                              respective user id should be included or
     *                              excluded from the result set.
     *                              Accepts up to 100 user ids.
     *                              Any user ids not found are ignored.
     * @param  null|array  $organizationId  Returns users that have memberships to the
     *                                      given organizations.
     *                                      For each organization id, the `+` and `-` can be
     *                                      prepended to the id, which denote whether the
     *                                      respective organization should be included or
     *                                      excluded from the result set.
     *                                      Accepts up to 100 organization ids.
     * @param  null|string  $query  Returns users that match the given query.
     *                              For possible matches, we check the email addresses, phone numbers, usernames, web3 wallets, user ids, first and last names.
     *                              The query value doesn't need to match the exact value you are looking for, it is capable of partial matches as well.
     * @param  null|int  $lastActiveAtSince  Returns users that had session activity since the given date, with day precision.
     *                                       Providing a value with higher precision than day will result in an error.
     *                                       Example: use 1700690400000 to retrieve users that had session activity from 2023-11-23 until the current day.
     * @param  null|float|int  $limit  Applies a limit to the number of results returned.
     *                                 Can be used for paginating the results together with `offset`.
     * @param  null|float|int  $offset  Skip the first `offset` results when paginating.
     *                                  Needs to be an integer greater or equal to zero.
     *                                  To be used in conjunction with `limit`.
     */
    public function __construct(
        protected ?array $emailAddress = null,
        protected ?array $phoneNumber = null,
        protected ?array $externalId = null,
        protected ?array $username = null,
        protected ?array $web3Wallet = null,
        protected ?array $userId = null,
        protected ?array $organizationId = null,
        protected ?string $query = null,
        protected ?int $lastActiveAtSince = null,
        protected float|int|null $limit = null,
        protected float|int|null $offset = null,
    ) {
        parent::__construct();
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
            'organization_id' => $this->organizationId,
            'query' => $this->query,
            'last_active_at_since' => $this->lastActiveAtSince,
            'limit' => $this->limit,
            'offset' => $this->offset,
        ]);
    }
}

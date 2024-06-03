<?php

namespace Octoper\ClerkPHP\Resource;

use Octoper\ClerkPHP\Requests\Users\BanUser;
use Octoper\ClerkPHP\Requests\Users\CreateUser;
use Octoper\ClerkPHP\Requests\Users\DeleteUser;
use Octoper\ClerkPHP\Requests\Users\DeleteUserProfileImage;
use Octoper\ClerkPHP\Requests\Users\DisableMfa;
use Octoper\ClerkPHP\Requests\Users\GetOauthAccessToken;
use Octoper\ClerkPHP\Requests\Users\GetUser;
use Octoper\ClerkPHP\Requests\Users\GetUserList;
use Octoper\ClerkPHP\Requests\Users\GetUsersCount;
use Octoper\ClerkPHP\Requests\Users\LockUser;
use Octoper\ClerkPHP\Requests\Users\SetUserProfileImage;
use Octoper\ClerkPHP\Requests\Users\UnbanUser;
use Octoper\ClerkPHP\Requests\Users\UnlockUser;
use Octoper\ClerkPHP\Requests\Users\UpdateUser;
use Octoper\ClerkPHP\Requests\Users\UpdateUserMetadata;
use Octoper\ClerkPHP\Requests\Users\UsersGetOrganizationMemberships;
use Octoper\ClerkPHP\Requests\Users\VerifyPassword;
use Octoper\ClerkPHP\Requests\Users\VerifyTotp;
use Octoper\ClerkPHP\Resource;
use Saloon\Http\Response;

class Users extends Resource
{
    /**
     * @param  array  $emailAddress  Returns users with the specified email addresses.
     *                               Accepts up to 100 email addresses.
     *                               Any email addresses not found are ignored.
     * @param  array  $phoneNumber  Returns users with the specified phone numbers.
     *                              Accepts up to 100 phone numbers.
     *                              Any phone numbers not found are ignored.
     * @param  array  $externalId  Returns users with the specified external ids.
     *                             For each external id, the `+` and `-` can be
     *                             prepended to the id, which denote whether the
     *                             respective external id should be included or
     *                             excluded from the result set.
     *                             Accepts up to 100 external ids.
     *                             Any external ids not found are ignored.
     * @param  array  $username  Returns users with the specified usernames.
     *                           Accepts up to 100 usernames.
     *                           Any usernames not found are ignored.
     * @param  array  $web3Wallet  Returns users with the specified web3 wallet addresses.
     *                             Accepts up to 100 web3 wallet addresses.
     *                             Any web3 wallet addressed not found are ignored.
     * @param  array  $userId  Returns users with the user ids specified.
     *                         For each user id, the `+` and `-` can be
     *                         prepended to the id, which denote whether the
     *                         respective user id should be included or
     *                         excluded from the result set.
     *                         Accepts up to 100 user ids.
     *                         Any user ids not found are ignored.
     * @param  array  $organizationId  Returns users that have memberships to the
     *                                 given organizations.
     *                                 For each organization id, the `+` and `-` can be
     *                                 prepended to the id, which denote whether the
     *                                 respective organization should be included or
     *                                 excluded from the result set.
     *                                 Accepts up to 100 organization ids.
     * @param  string  $query  Returns users that match the given query.
     *                         For possible matches, we check the email addresses, phone numbers, usernames, web3 wallets, user ids, first and last names.
     *                         The query value doesn't need to match the exact value you are looking for, it is capable of partial matches as well.
     * @param  int  $lastActiveAtSince  Returns users that had session activity since the given date, with day precision.
     *                                  Providing a value with higher precision than day will result in an error.
     *                                  Example: use 1700690400000 to retrieve users that had session activity from 2023-11-23 until the current day.
     * @param  float|int  $limit  Applies a limit to the number of results returned.
     *                            Can be used for paginating the results together with `offset`.
     * @param  float|int  $offset  Skip the first `offset` results when paginating.
     *                             Needs to be an integer greater or equal to zero.
     *                             To be used in conjunction with `limit`.
     */
    public function getUserList(
        ?array $emailAddress,
        ?array $phoneNumber,
        ?array $externalId,
        ?array $username,
        ?array $web3Wallet,
        ?array $userId,
        ?array $organizationId,
        ?string $query,
        ?int $lastActiveAtSince,
        float|int|null $limit,
        float|int|null $offset,
    ): Response {
        return $this->connector->send(new GetUserList($emailAddress, $phoneNumber, $externalId, $username, $web3Wallet, $userId, $organizationId, $query, $lastActiveAtSince, $limit, $offset));
    }

    public function createUser(array $body = []): Response
    {
        return $this->connector->send(new CreateUser($body));
    }

    /**
     * @param  array  $emailAddress  Counts users with the specified email addresses.
     *                               Accepts up to 100 email addresses.
     *                               Any email addresses not found are ignored.
     * @param  array  $phoneNumber  Counts users with the specified phone numbers.
     *                              Accepts up to 100 phone numbers.
     *                              Any phone numbers not found are ignored.
     * @param  array  $externalId  Counts users with the specified external ids.
     *                             Accepts up to 100 external ids.
     *                             Any external ids not found are ignored.
     * @param  array  $username  Counts users with the specified usernames.
     *                           Accepts up to 100 usernames.
     *                           Any usernames not found are ignored.
     * @param  array  $web3Wallet  Counts users with the specified web3 wallet addresses.
     *                             Accepts up to 100 web3 wallet addresses.
     *                             Any web3 wallet addressed not found are ignored.
     * @param  array  $userId  Counts users with the user ids specified.
     *                         Accepts up to 100 user ids.
     *                         Any user ids not found are ignored.
     * @param  string  $query  Counts users that match the given query.
     *                         For possible matches, we check the email addresses, phone numbers, usernames, web3 wallets, user ids, first and last names.
     *                         The query value doesn't need to match the exact value you are looking for, it is capable of partial matches as well.
     */
    public function getUsersCount(
        ?array $emailAddress,
        ?array $phoneNumber,
        ?array $externalId,
        ?array $username,
        ?array $web3Wallet,
        ?array $userId,
        ?string $query,
    ): Response {
        return $this->connector->send(new GetUsersCount($emailAddress, $phoneNumber, $externalId, $username, $web3Wallet, $userId, $query));
    }

    /**
     * @param  string  $userId  The ID of the user to retrieve
     */
    public function getUser(string $userId): Response
    {
        return $this->connector->send(new GetUser($userId));
    }

    /**
     * @param  string  $userId  The ID of the user to delete
     */
    public function deleteUser(string $userId): Response
    {
        return $this->connector->send(new DeleteUser($userId));
    }

    /**
     * @param  string  $userId  The ID of the user to update
     */
    public function updateUser(string $userId, array $body = []): Response
    {
        return $this->connector->send(new UpdateUser($userId, $body));
    }

    /**
     * @param  string  $userId  The ID of the user to ban
     */
    public function banUser(string $userId): Response
    {
        return $this->connector->send(new BanUser($userId));
    }

    /**
     * @param  string  $userId  The ID of the user to unban
     */
    public function unbanUser(string $userId): Response
    {
        return $this->connector->send(new UnbanUser($userId));
    }

    /**
     * @param  string  $userId  The ID of the user to lock
     */
    public function lockUser(string $userId): Response
    {
        return $this->connector->send(new LockUser($userId));
    }

    /**
     * @param  string  $userId  The ID of the user to unlock
     */
    public function unlockUser(string $userId): Response
    {
        return $this->connector->send(new UnlockUser($userId));
    }

    /**
     * @param  string  $userId  The ID of the user to update the profile image for
     */
    public function setUserProfileImage(string $userId, array $body = []): Response
    {
        return $this->connector->send(new SetUserProfileImage($userId, $body));
    }

    /**
     * @param  string  $userId  The ID of the user to delete the profile image for
     */
    public function deleteUserProfileImage(string $userId): Response
    {
        return $this->connector->send(new DeleteUserProfileImage($userId));
    }

    /**
     * @param  string  $userId  The ID of the user whose metadata will be updated and merged
     */
    public function updateUserMetadata(string $userId, array $body = []): Response
    {
        return $this->connector->send(new UpdateUserMetadata($userId, $body));
    }

    /**
     * @param  string  $userId  The ID of the user for which to retrieve the OAuth access token
     * @param  string  $provider  The ID of the OAuth provider (e.g. `oauth_google`)
     */
    public function getOauthAccessToken(string $userId, string $provider): Response
    {
        return $this->connector->send(new GetOauthAccessToken($userId, $provider));
    }

    /**
     * @param  string  $userId  The ID of the user whose organization memberships we want to retrieve
     * @param  float|int  $limit  Applies a limit to the number of results returned.
     *                            Can be used for paginating the results together with `offset`.
     * @param  float|int  $offset  Skip the first `offset` results when paginating.
     *                             Needs to be an integer greater or equal to zero.
     *                             To be used in conjunction with `limit`.
     */
    public function usersGetOrganizationMemberships(
        string $userId,
        float|int|null $limit,
        float|int|null $offset,
    ): Response {
        return $this->connector->send(new UsersGetOrganizationMemberships($userId, $limit, $offset));
    }

    /**
     * @param  string  $userId  The ID of the user for whom to verify the password
     */
    public function verifyPassword(string $userId, array $body = []): Response
    {
        return $this->connector->send(new VerifyPassword($userId, $body));
    }

    /**
     * @param  string  $userId  The ID of the user for whom to verify the TOTP
     */
    public function verifyTotp(string $userId, array $body = []): Response
    {
        return $this->connector->send(new VerifyTotp($userId, $body));
    }

    /**
     * @param  string  $userId  The ID of the user whose MFA methods are to be disabled
     */
    public function disableMfa(string $userId): Response
    {
        return $this->connector->send(new DisableMfa($userId));
    }
}

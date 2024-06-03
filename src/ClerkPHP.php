<?php

namespace Octoper\ClerkPHP;

use Octoper\ClerkPHP\Resource\ActorTokens;
use Octoper\ClerkPHP\Resource\AllowListBlockList;
use Octoper\ClerkPHP\Resource\BetaFeatures;
use Octoper\ClerkPHP\Resource\Clients;
use Octoper\ClerkPHP\Resource\Domains;
use Octoper\ClerkPHP\Resource\EmailAddresses;
use Octoper\ClerkPHP\Resource\EmailSmsTemplates;
use Octoper\ClerkPHP\Resource\InstanceSettings;
use Octoper\ClerkPHP\Resource\Invitations;
use Octoper\ClerkPHP\Resource\Jwks;
use Octoper\ClerkPHP\Resource\JwtTemplates;
use Octoper\ClerkPHP\Resource\Miscellaneous;
use Octoper\ClerkPHP\Resource\OauthApplications;
use Octoper\ClerkPHP\Resource\OrganizationInvitations;
use Octoper\ClerkPHP\Resource\OrganizationMemberships;
use Octoper\ClerkPHP\Resource\Organizations;
use Octoper\ClerkPHP\Resource\PhoneNumbers;
use Octoper\ClerkPHP\Resource\ProxyChecks;
use Octoper\ClerkPHP\Resource\RedirectUrls;
use Octoper\ClerkPHP\Resource\SamlConnections;
use Octoper\ClerkPHP\Resource\Sessions;
use Octoper\ClerkPHP\Resource\SignInTokens;
use Octoper\ClerkPHP\Resource\SignUps;
use Octoper\ClerkPHP\Resource\TestingTokens;
use Octoper\ClerkPHP\Resource\Users;
use Octoper\ClerkPHP\Resource\Webhooks;
use Saloon\Http\Connector;

/**
 * Clerk Backend API
 *
 * The Clerk REST Backend API, meant to be accessed by backend
 * servers.
 *
 * ### Versions
 *
 * When the API changes in a way that isn't compatible with older versions, a new version is released.
 * Each version is identified by its release date, e.g. `2021-02-05`. For more information, please see [Clerk API Versions](https://clerk.com/docs/backend-requests/versioning/overview).
 *
 *
 * Please see https://clerk.com/docs for more information.
 */
class ClerkPHP extends Connector
{
    public function resolveBaseUrl(): string
    {
        return 'https://api.clerk.com/v1';
    }

    public function actorTokens(): ActorTokens
    {
        return new ActorTokens($this);
    }

    public function allowListBlockList(): AllowListBlockList
    {
        return new AllowListBlockList($this);
    }

    public function betaFeatures(): BetaFeatures
    {
        return new BetaFeatures($this);
    }

    public function clients(): Clients
    {
        return new Clients($this);
    }

    public function domains(): Domains
    {
        return new Domains($this);
    }

    public function emailAddresses(): EmailAddresses
    {
        return new EmailAddresses($this);
    }

    public function emailSmsTemplates(): EmailSmsTemplates
    {
        return new EmailSmsTemplates($this);
    }

    public function instanceSettings(): InstanceSettings
    {
        return new InstanceSettings($this);
    }

    public function invitations(): Invitations
    {
        return new Invitations($this);
    }

    public function jwks(): Jwks
    {
        return new Jwks($this);
    }

    public function jwtTemplates(): JwtTemplates
    {
        return new JwtTemplates($this);
    }

    public function miscellaneous(): Miscellaneous
    {
        return new Miscellaneous($this);
    }

    public function oauthApplications(): OauthApplications
    {
        return new OauthApplications($this);
    }

    public function organizationInvitations(): OrganizationInvitations
    {
        return new OrganizationInvitations($this);
    }

    public function organizationMemberships(): OrganizationMemberships
    {
        return new OrganizationMemberships($this);
    }

    public function organizations(): Organizations
    {
        return new Organizations($this);
    }

    public function phoneNumbers(): PhoneNumbers
    {
        return new PhoneNumbers($this);
    }

    public function proxyChecks(): ProxyChecks
    {
        return new ProxyChecks($this);
    }

    public function redirectUrls(): RedirectUrls
    {
        return new RedirectUrls($this);
    }

    public function samlConnections(): SamlConnections
    {
        return new SamlConnections($this);
    }

    public function sessions(): Sessions
    {
        return new Sessions($this);
    }

    public function signInTokens(): SignInTokens
    {
        return new SignInTokens($this);
    }

    public function signUps(): SignUps
    {
        return new SignUps($this);
    }

    public function testingTokens(): TestingTokens
    {
        return new TestingTokens($this);
    }

    public function users(): Users
    {
        return new Users($this);
    }

    public function webhooks(): Webhooks
    {
        return new Webhooks($this);
    }
}

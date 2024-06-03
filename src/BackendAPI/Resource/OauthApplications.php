<?php

namespace Octoper\ClerkPHP\Resource;

use Octoper\ClerkPHP\Requests\OauthApplications\CreateOauthApplication;
use Octoper\ClerkPHP\Requests\OauthApplications\DeleteOauthApplication;
use Octoper\ClerkPHP\Requests\OauthApplications\GetOauthApplication;
use Octoper\ClerkPHP\Requests\OauthApplications\ListOauthApplications;
use Octoper\ClerkPHP\Requests\OauthApplications\RotateOauthApplicationSecret;
use Octoper\ClerkPHP\Requests\OauthApplications\UpdateOauthApplication;
use Octoper\ClerkPHP\Resource;
use Saloon\Http\Response;

class OauthApplications extends Resource
{
    /**
     * @param  float|int  $limit  Applies a limit to the number of results returned.
     *                            Can be used for paginating the results together with `offset`.
     * @param  float|int  $offset  Skip the first `offset` results when paginating.
     *                             Needs to be an integer greater or equal to zero.
     *                             To be used in conjunction with `limit`.
     */
    public function listOauthApplications(float|int|null $limit, float|int|null $offset): Response
    {
        return $this->connector->send(new ListOauthApplications($limit, $offset));
    }

    public function createOauthApplication(array $body = []): Response
    {
        return $this->connector->send(new CreateOauthApplication($body));
    }

    /**
     * @param  string  $oauthApplicationId  The ID of the OAuth application
     */
    public function getOauthApplication(string $oauthApplicationId): Response
    {
        return $this->connector->send(new GetOauthApplication($oauthApplicationId));
    }

    /**
     * @param  string  $oauthApplicationId  The ID of the OAuth application to delete
     */
    public function deleteOauthApplication(string $oauthApplicationId): Response
    {
        return $this->connector->send(new DeleteOauthApplication($oauthApplicationId));
    }

    /**
     * @param  string  $oauthApplicationId  The ID of the OAuth application to update
     */
    public function updateOauthApplication(string $oauthApplicationId, array $body = []): Response
    {
        return $this->connector->send(new UpdateOauthApplication($oauthApplicationId, $body));
    }

    /**
     * @param  string  $oauthApplicationId  The ID of the OAuth application for which to rotate the client secret
     */
    public function rotateOauthApplicationSecret(string $oauthApplicationId): Response
    {
        return $this->connector->send(new RotateOauthApplicationSecret($oauthApplicationId));
    }
}

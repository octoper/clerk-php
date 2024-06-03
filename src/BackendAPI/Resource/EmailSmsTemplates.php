<?php

namespace Octoper\ClerkPHP\Resource;

use Octoper\ClerkPHP\Requests\EmailSmsTemplates\GetTemplate;
use Octoper\ClerkPHP\Requests\EmailSmsTemplates\GetTemplateList;
use Octoper\ClerkPHP\Requests\EmailSmsTemplates\PreviewTemplate;
use Octoper\ClerkPHP\Requests\EmailSmsTemplates\RevertTemplate;
use Octoper\ClerkPHP\Requests\EmailSmsTemplates\ToggleTemplateDelivery;
use Octoper\ClerkPHP\Requests\EmailSmsTemplates\UpsertTemplate;
use Octoper\ClerkPHP\Resource;
use Saloon\Http\Response;

class EmailSmsTemplates extends Resource
{
    /**
     * @param  string  $templateType  The type of templates to list (email or SMS)
     */
    public function getTemplateList(string $templateType): Response
    {
        return $this->connector->send(new GetTemplateList($templateType));
    }

    /**
     * @param  string  $templateType  The type of templates to retrieve (email or SMS)
     * @param  string  $slug  The slug (i.e. machine-friendly name) of the template to retrieve
     */
    public function getTemplate(string $templateType, string $slug): Response
    {
        return $this->connector->send(new GetTemplate($templateType, $slug));
    }

    /**
     * @param  string  $templateType  The type of template to update
     * @param  string  $slug  The slug of the template to update
     */
    public function upsertTemplate(string $templateType, string $slug, array $body = []): Response
    {
        return $this->connector->send(new UpsertTemplate($templateType, $slug, $body));
    }

    /**
     * @param  string  $templateType  The type of template to revert
     * @param  string  $slug  The slug of the template to revert
     */
    public function revertTemplate(string $templateType, string $slug): Response
    {
        return $this->connector->send(new RevertTemplate($templateType, $slug));
    }

    /**
     * @param  string  $templateType  The type of template to preview
     * @param  string  $slug  The slug of the template to preview
     */
    public function previewTemplate(string $templateType, string $slug, array $body = []): Response
    {
        return $this->connector->send(new PreviewTemplate($templateType, $slug, $body));
    }

    /**
     * @param  string  $templateType  The type of template to toggle delivery for
     * @param  string  $slug  The slug of the template for which to toggle delivery
     */
    public function toggleTemplateDelivery(string $templateType, string $slug, array $body = []): Response
    {
        return $this->connector->send(new ToggleTemplateDelivery($templateType, $slug, $body));
    }
}

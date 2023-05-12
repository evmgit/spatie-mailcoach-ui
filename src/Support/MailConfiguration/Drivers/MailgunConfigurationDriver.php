<?php

namespace Spatie\MailcoachUi\Support\MailConfiguration\Drivers;

use Illuminate\Contracts\Config\Repository;

class MailgunConfigurationDriver extends MailConfigurationDriver
{
    public function name(): string
    {
        return 'mailgun';
    }

    public function validationRules(): array
    {
        return [
            'default_from_mail' => 'required',
            'mailgun_mails_per_second' => 'required|numeric|between:1,100',
            'mailgun_domain' => 'required',
            'mailgun_secret' => 'required',
            'mailgun_endpoint' => 'required',
            'mailgun_signing_secret' => 'required',
        ];
    }

    public function registerConfigValues(Repository $config, array $values)
    {
        $this
            ->setDefaultFromEmail($config, $values['default_from_mail'] ?? '')
            ->throttleNumberOfMailsPerSecond($config, $values['mailgun_mails_per_second'] ?? 5);

        $config->set('mail.mailers.mailcoach.transport', $this->name());
        $config->set('services.mailgun', [
            'domain' => $values['mailgun_domain'],
            'secret' => $values['mailgun_secret'],
            'endpoint' => $values['mailgun_endpoint'],
        ]);
        $config->set('mailcoach.mailgun_feedback', [
            'signing_secret' => $values['mailgun_signing_secret'],
        ]);
    }
}

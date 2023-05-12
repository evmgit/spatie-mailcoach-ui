<x-mailcoach::help>
    {!! __('Learn how to configure :provider by reading <a target="_blank" href=":docsLink">this section of the Mailcoach docs</a>.', ['provider' => 'SendGrid', 'docsLink' => 'https://spatie.be/docs/laravel-mailcoach/v4/configuring-mail-providers/sendgrid']) !!}

    <br>

    {!! __('You must set a webhook to: <code class="markup-code">:webhookUrl</code>', ['webhookUrl' => url(action(\Spatie\MailcoachSendgridFeedback\SendgridWebhookController::class)) . '?secret=' . $mailConfiguration->sendgrid_signing_secret ]) !!}
</x-mailcoach::help>

<x-mailcoach::text-field
    :label="__('Mails per second')"
    name="sendgrid_mails_per_second"
    type="number"
    :value="$mailConfiguration->sendgrid_mails_per_second ?? 5"
    inputClass="input-sm"
/>

<x-mailcoach::text-field
    :label="__('API key')"
    name="sendgrid_api_key"
    type="password"
    :value="$mailConfiguration->sendgrid_api_key"
/>

<x-mailcoach::text-field
    :label="__('Webhook signing secret')"
    name="sendgrid_signing_secret"
    type="text"
    :value="$mailConfiguration->sendgrid_signing_secret"
/>

<x-mailcoach::help>
    {!! __('Learn how to configure :provider by reading <a target="_blank" href=":docsLink">this section of the Mailcoach docs</a>.', ['provider' => 'SES', 'docsLink' => 'https://spatie.be/docs/laravel-mailcoach/v4/configuring-mail-providers/amazon-ses']) !!}
</x-mailcoach::help>

<x-mailcoach::text-field
    :label="__('Key')"
    name="ses_key"
    type="password"
    :value="$mailConfiguration->ses_key"
/>

<x-mailcoach::text-field
    :label="__('Secret')"
    name="ses_secret"
    type="password"
    :value="$mailConfiguration->ses_secret"
/>

<x-mailcoach::text-field
    :label="__('Region')"
    name="ses_region"
    type="text"
    :value="$mailConfiguration->ses_region"
/>

<x-mailcoach::text-field :label="__('Host')" name="smtp_host" type="text" :value="$mailConfiguration->smtp_host"/>
<x-mailcoach::text-field :label="__('Port')" name="smtp_port" type="number" :value="$mailConfiguration->smtp_port"/>
<x-mailcoach::text-field :label="__('Username')" name="smtp_username" type="text" :value="$mailConfiguration->smtp_username"/>
<x-mailcoach::text-field :label="__('Password')" name="smtp_password" type="password" :value="$mailConfiguration->smtp_password"/>

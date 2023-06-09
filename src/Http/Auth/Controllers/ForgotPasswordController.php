<?php

namespace Spatie\MailcoachUi\Http\Auth\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;

class ForgotPasswordController
{
    use SendsPasswordResetEmails;
    use AuthorizesRequests;
    use DispatchesJobs;
    use ValidatesRequests;

    public function showLinkRequestForm()
    {
        return view('mailcoach-ui::auth.passwords.email');
    }

    protected function sendResetLinkResponse(Request $request, $response)
    {
        flash()->success(trans($response));

        return back();
    }

    protected function sendResetLinkFailedResponse(Request $request, $response)
    {
        flash()->error(trans($response));

        return back();
    }
}

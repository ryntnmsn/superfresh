<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Client\ConnectionException;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Symfony\Component\HttpFoundation\Response;

class VerifyRecaptcha
{
    /**
     * Verify the submitted reCAPTCHA v2 response with Google.
     *
     * @param  Closure(Request): Response  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $siteKey = config('services.recaptcha.site_key');
        $secretKey = config('services.recaptcha.secret_key');
        $responseToken = $request->input('g-recaptcha-response');

        if (! is_string($siteKey) || $siteKey === '' || ! is_string($secretKey) || $secretKey === '') {
            return $this->reject($request, __('Google reCAPTCHA is niet ingesteld. Neem contact op met de websitebeheerder.'));
        }

        if (! is_string($responseToken) || trim($responseToken) === '') {
            return $this->reject($request, __('Vink het reCAPTCHA-vakje aan voordat u het formulier verzendt.'));
        }

        try {
            $verification = Http::asForm()
                ->connectTimeout(3)
                ->timeout(5)
                ->post('https://www.google.com/recaptcha/api/siteverify', [
                    'secret' => $secretKey,
                    'response' => $responseToken,
                    'remoteip' => $request->ip(),
                ]);
        } catch (ConnectionException) {
            return $this->reject($request, __('De reCAPTCHA-controle is tijdelijk niet beschikbaar. Probeer het opnieuw.'));
        }

        $verifiedHostname = $verification->json('hostname');

        if (
            ! $verification->successful()
            || $verification->json('success') !== true
            || ! is_string($verifiedHostname)
            || ! hash_equals(strtolower($request->getHost()), strtolower($verifiedHostname))
        ) {
            return $this->reject($request, __('Vink het reCAPTCHA-vakje aan voordat u het formulier verzendt.'));
        }

        return $next($request);
    }

    private function reject(Request $request, string $message): RedirectResponse
    {
        return redirect()->back()->withErrors(['g-recaptcha-response' => $message])->withInput();
    }
}

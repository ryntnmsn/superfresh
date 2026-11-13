<div>
    @if (config('services.recaptcha.site_key'))
        <div class="g-recaptcha" data-sitekey="{{ config('services.recaptcha.site_key') }}"></div>
        @error('g-recaptcha-response')
            <p class="mt-2 text-sm text-red-700">{{ __($message) }}</p>
        @enderror
    @else
        <p role="alert" class="rounded-lg border border-amber-200 bg-amber-50 px-4 py-3 text-sm text-amber-900">{{ __('Google reCAPTCHA is niet ingesteld. Neem contact op met de websitebeheerder.') }}</p>
    @endif
</div>

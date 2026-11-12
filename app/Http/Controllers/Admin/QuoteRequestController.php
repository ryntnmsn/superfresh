<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\QuoteRequest;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;
use Symfony\Component\HttpFoundation\StreamedResponse;

class QuoteRequestController extends Controller
{
    public function index(): View
    {
        return view('admin.quote-requests.index', [
            'quoteRequests' => QuoteRequest::query()->latest()->paginate(15),
        ]);
    }

    public function photo(QuoteRequest $quoteRequest, int $photoIndex): StreamedResponse
    {
        $photoPath = $quoteRequest->photos[$photoIndex] ?? null;

        abort_unless(is_string($photoPath) && Storage::disk('local')->exists($photoPath), 404);

        return Storage::disk('local')->response(
            $photoPath,
            basename($photoPath),
            ['Cache-Control' => 'private, no-store'],
            'inline',
        );
    }
}

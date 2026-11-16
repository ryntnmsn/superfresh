<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Subscription;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class SubscriptionController extends Controller
{
    public function index(): View
    {
        return view('admin.subscriptions.index', [
            'subscriptions' => Subscription::query()->latest()->paginate(25),
        ]);
    }

    public function destroy(Subscription $subscription): RedirectResponse
    {
        $subscription->delete();

        return redirect()->route('admin.subscriptions.index')->with('status', __('Subscription removed.'));
    }
}

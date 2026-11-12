<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\QuoteRequest;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\View\View;

class DashboardController extends Controller
{
    public function __invoke(): View
    {
        $hasSubscriptionsTable = Schema::hasTable('subscriptions');
        $subscriptionCount = $hasSubscriptionsTable ? DB::table('subscriptions')->count() : 0;

        return view('admin.dashboard', [
            'stats' => [
                ['label' => 'Total number of users', 'value' => User::query()->count(), 'description' => 'Registered accounts'],
                ['label' => 'Total number of articles', 'value' => Article::query()->count(), 'description' => 'Articles in the content library'],
                ['label' => 'Total number of visitors', 'value' => DB::table('sessions')->whereNull('user_id')->count(), 'description' => 'Anonymous session records (approx.)'],
                ['label' => 'Total number of newsletter subscriptions', 'value' => $subscriptionCount, 'description' => $hasSubscriptionsTable ? 'Recorded newsletter subscriptions' : 'Subscription tracking is not set up yet'],
            ],
            'quoteRequestCount' => QuoteRequest::query()->count(),
        ]);
    }
}

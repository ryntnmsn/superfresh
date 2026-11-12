<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('contact_messages', function (Blueprint $table): void {
            $table->string('subject')->nullable()->change();
        });
    }

    public function down(): void
    {
        DB::table('contact_messages')->whereNull('subject')->update(['subject' => '']);

        Schema::table('contact_messages', function (Blueprint $table): void {
            $table->string('subject')->nullable(false)->change();
        });
    }
};

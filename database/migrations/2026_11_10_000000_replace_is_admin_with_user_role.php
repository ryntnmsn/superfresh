<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table): void {
            $table->string('role')->default('Editor');
        });

        DB::table('users')->where('is_admin', true)->update(['role' => 'Administrator']);

        Schema::table('users', function (Blueprint $table): void {
            $table->dropColumn('is_admin');
        });
    }

    public function down(): void
    {
        Schema::table('users', function (Blueprint $table): void {
            $table->boolean('is_admin')->default(false);
        });

        DB::table('users')->where('role', 'Administrator')->update(['is_admin' => true]);

        Schema::table('users', function (Blueprint $table): void {
            $table->dropColumn('role');
        });
    }
};

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('quote_requests', function (Blueprint $table): void {
            $table->id();
            $table->string('name');
            $table->string('business_name')->nullable();
            $table->string('email');
            $table->string('phone', 50);
            $table->string('service_type');
            $table->string('postal_code', 16);
            $table->text('cleaning_description');
            $table->date('start_date')->nullable();
            $table->string('frequency')->nullable();
            $table->json('photos')->nullable();
            $table->timestamps();

            $table->index('created_at');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('quote_requests');
    }
};

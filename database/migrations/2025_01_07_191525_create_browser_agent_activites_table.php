<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('hr.suspicious_browser_agent', function (Blueprint $table) {
            $table->id();
            $table->foreignId('browser_agent_id')->constrained('hr.browser_agent');
            $table->string('reason');
            $table->timestamps();
        });

        Schema::create('hr.banned_browser_agent', function (Blueprint $table) {
            $table->id();
            $table->foreignId('browser_agent_id')->constrained('hr.browser_agent');
            $table->string('reason');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hr.suspicious_browser_agent');
    }
};

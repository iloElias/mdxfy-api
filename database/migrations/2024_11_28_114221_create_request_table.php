<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class() extends Migration {
    public function up(): void
    {
        Schema::create('transport.requests', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('hr.user')->onDelete('cascade');
            $table->string('origin');
            $table->string('destination');
            $table->timestamp('desired_date');
            $table->boolean('active')->default(true);
            $table->timestamps();
            $table->timestamp('inactivated_in')->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('transport.requests');
    }
};

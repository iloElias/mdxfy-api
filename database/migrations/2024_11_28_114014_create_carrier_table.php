<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class() extends Migration {
    public function up(): void
    {
        Schema::create('transport.carriers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('hr.user')->onDelete('cascade');
            $table->string('name');
            $table->string('model');
            $table->string('plate')->unique();
            $table->boolean('active')->default(true);
            $table->timestamps();
            $table->timestamp('inactivated_in')->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('transport.carriers');
    }
};
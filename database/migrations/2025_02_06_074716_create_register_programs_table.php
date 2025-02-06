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
        Schema::create('register_programs', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('phone_number');
            $table->string('email');
            $table->foreignId('program_id')->constrained('programs')->onDelete('cascade');
            $table->enum('identity_type', ['ktp','ktm','kp']);
            $table->string('identity_number');
            $table->text('address');
            $table->text('reason_to_join')->nullable();
            $table->string('information_source')->nullable();
            $table->string('referral')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('register_programs');
    }
};

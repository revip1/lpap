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
        Schema::create('request_programs', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('place');
            $table->string('message');
            $table->string('no_contact_person');
            $table->date('implementation_time');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('request_programs');
    }
};

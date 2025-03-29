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
        Schema::create('m_y_l_casts', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('character');
            $table->string('person_in_sitcom');
            $table->string('catchphrases');
            $table->string('career');
            $table->date('date_of_birth');
            $table->date('date_when_died');
            $table->string('description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('m_y_l_casts');
    }
};

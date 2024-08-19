<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdatePhoneColumnInIntegrantesTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('integrantes', function (Blueprint $table) {
            $table->string('phone')->change(); // Cambia la columna phone a string
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('integrantes', function (Blueprint $table) {
            $table->integer('phone')->change(); // Revertir a integer si es necesario
        });
    }
}


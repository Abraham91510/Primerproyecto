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
        //La propiedad nullable de preferencia se debe de agregar cuando se cuente con datos existentes en la tabla.

        Schema::table('users', function (Blueprint $table) {
             $table->string('avatar')->nullable()->after('name');
            $table->string('telefono')->nullable()->after('avatar');
            $table->string('calle')->nullable()->after('telefono');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('avatar');
        });
    }
};

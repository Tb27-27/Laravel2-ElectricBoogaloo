<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('planets', function (Blueprint $table) {
            // Maakt een solar_system_id kolom aan
            // constrained() zorgt voor de foreign key verbinding
            // nullable() omdat planeten al bestaan

            $table->foreignId('solar_system_id')->nullable()->constrained('solar_systems');
        });
    }

    public function down()
    {
        Schema::table('planets', function (Blueprint $table) {
            // drop alles weer
            $table->dropForeign(['solar_system_id']);
            $table->dropColumn('solar_system_id');
        });
    }
};

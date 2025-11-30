<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('planets', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description');
            $table->integer('size_in_km');
            $table->timestamps();
        });

        DB::table('planets')->insert([
            [
                'name' => 'Mars', 
                'description' => 'De rode planeet', 
                'size_in_km' => 6779, 
                'created_at' => now(), 
                'updated_at' => now()
            ],
            [
                'name' => 'Venus', 
                'description' => 'De heetste planeet', 
                'size_in_km' => 12104, 
                'created_at' => now(), 
                'updated_at' => now()
            ],
            [
                'name' => 'Earth', 
                'description' => 'Onze thuisbasis', 
                'size_in_km' => 12742, 
                'created_at' => now(), 
                'updated_at' => now()
            ],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('planets');
    }
};
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
        Schema::table('reports', function (Blueprint $table) {
            $table->unsignedBigInteger('animal_id')->comment('Animal foreign key.');
            $table->foreign('animal_id')->references('id')->on('animals');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('reports', function (Blueprint $table) {
            if (Schema::hasColumn('reports', 'animal_id')) {
                $table->dropForeign(['animal_id']);
                $table->dropColumn('animal_id');
            }
        });
    }
};

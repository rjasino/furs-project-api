<?php

use App\Enums\AnimalStatus;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Enums\Gender;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('animals', function (Blueprint $table) {
            $table->id();
            $table->string('name')->comment('Name of the animal.')
                ->nullable()->max(100);
            $table->string('color')->comment('Animal fur color.')->max(50);
            $table->string('age_approx')->comment('Approximate age of the animal.')
                ->nullable()->max(50);
            $table->string('gender')->comment('Animal gender.')->default(Gender::NotApplicable->value);
            $table->text('distinguishing_marks')->comment('Animal unique marks.')->nullable();
            $table->string('microchip_id')->comment('Microchip ID of animal if any.')
                ->unique()->nullable()->max(50);
            $table->string('main_image_url')->comment('Animal primary image.')
                ->nullable();
            $table->string('current_status')->comment('Animal current status.')
                ->default(AnimalStatus::Lost->value);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('animals');
    }
};

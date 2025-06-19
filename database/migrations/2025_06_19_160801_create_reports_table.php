<?php

use App\Enums\AnimalStatus;
use App\Enums\ReportStatus;
use App\Enums\ReportType;
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
        Schema::create('reports', function (Blueprint $table) {
            $table->id();
            $table->string('report_type')->comment('Animal report type.')
                ->default(ReportType::Lost->value);
            $table->date('report_date')->comment('Animal report date.');
            $table->decimal('location_lat', 10, 8)
                ->comment('Animal last location in latitude.');
            $table->decimal('location_lon', 10, 8)
                ->comment('Animal last location in longitude.');
            $table->text('description')->comment('Animal report description.')
                ->nullable();
            $table->string('contact_info_at_report')->comment('Contact details of the owner.')
                ->nullable();
            $table->string('status')->comment('Report status.')
                ->default(ReportStatus::Active->value);
            $table->string('current_status')->comment('Report current status.')
                ->default(AnimalStatus::Lost->value);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reports');
    }
};

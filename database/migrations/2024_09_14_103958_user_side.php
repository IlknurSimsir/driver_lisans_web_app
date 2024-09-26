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
        Schema::create('user_side', function (Blueprint $table) {
            $table->id();
            $table->text('mainInfo');
            $table->text('driverStage1');
            $table->text('driverStage2');
            $table->text('driverStage3');
            $table->text('aboutUsInfo');
            $table->text('driverLicenceInfo');
            $table->text('teacherInfoTheoretical');
            $table->text('teacherInfoPractical');
            $table->text('vehicleInfo');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->nullable()->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};

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
        Schema::create('available_periods', function (Blueprint $table) {
            $table->id();
            $table->tinyInteger('period_months');
            $table->string('title_ru')->nullable();
            $table->string('title_uz')->nullable();
            $table->tinyInteger('status')->default(0);
            $table->smallInteger('markup')->default(0);
            $table->tinyInteger('is_mini_loan');
            $table->tinyInteger('reverse_calc')->default(0);
            $table->tinyInteger('reverse_markup')->default(0);
            $table->tinyInteger('reverse_type')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('available_periods');
    }
};

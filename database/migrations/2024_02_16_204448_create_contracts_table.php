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
        Schema::create('contracts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('order_id')->nullable();
            $table->unsignedBigInteger('company_id')->nullable();
            $table->decimal('total');
            $table->decimal('balance');
            $table->smallInteger('period', unsigned: true);
            $table->smallInteger('status')->default(0);
            $table->index('user_id','contracts_user_id_idx');
            $table->index('order_id','contracts_order_id_idx');
            $table->index('company_id', 'contracts_company_id_idx');
            $table->index('status', 'contracts_status_id_idx');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contracts');
    }
};

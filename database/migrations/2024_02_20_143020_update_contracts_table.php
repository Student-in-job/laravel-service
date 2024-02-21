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
        Schema::table('contracts', function (Blueprint $table) {
            $table->string('cancel_reason',255)->nullable()->after('status');
            $table->timestamp('canceled_at')->nullable()->after('cancel_reason');
            $table->timestamp('original_created_at')->nullable()->after('canceled_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('contracts', function (Blueprint $table){
            $table->dropColumn('cancel_reason');
            $table->dropColumn('canceled_at');
            $table->dropColumn('original_created_at');
        });
    }
};

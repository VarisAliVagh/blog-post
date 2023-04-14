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
        Schema::table('laptop', function (Blueprint $table) {
            $table->renameColumn('model_name','laptop_modal');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('laptop', function (Blueprint $table) {
            $table->renameColumn('laptop_modal','model_name');
        });
    }
};

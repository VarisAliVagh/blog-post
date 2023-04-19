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
        Schema::create('comment', function (Blueprint $table) {
            $table->id();
            $table -> string('comment');
            $table -> string('name');
            $table -> string('email');
            $table -> string('website');
            $table -> unsignedBigInteger('user_comment_id');
            $table->foreign('user_comment_id')->references('id')->on('register_user');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('comment', function (Blueprint $table) {
            $table -> string('profilePath');
        });
    }
};

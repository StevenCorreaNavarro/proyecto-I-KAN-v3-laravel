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
        Schema::create('chances', function (Blueprint $table) {
            $table->id();
            $table->string('ocasion');

            $table->unsignedBigInteger('session_id')->nullable();;
            $table->foreign('session_id')
                ->references('user_id')
                ->on('sessions')
                ->onDelete('cascade')
                ->unUpdate('cascade');

            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('chances');
    }
};

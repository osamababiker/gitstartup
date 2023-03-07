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
        Schema::create('stories', function (Blueprint $table) {
            $table->id();
            $table->string('en_title');
            $table->string('ar_title');
            $table->string('en_content');
            $table->string('ar_content');
            $table->string('image');

            $table->unsignedBigInteger('sub_of');
            $table->foreign('sub_of')
                ->references('id')
                ->on('categories')
                ->onDelete('cascade');
            $table->timestamps();
            $table->timestamp('deleted_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stories');
    }
};

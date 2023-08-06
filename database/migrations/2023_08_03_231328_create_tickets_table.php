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
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->unsigned();
            $table->string('title');
            $table->text('description');
            $table->text('attachment')->nullable();
            $table->integer('priority')->default(1)->comment('1: low, 2: medium, 3: high');
            $table->boolean('status')->default(0)->comment('0: open, 1: closed');
            $table->integer('assigned_to')->unsigned();
            $table->timestamps();


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tickets');
    }
};

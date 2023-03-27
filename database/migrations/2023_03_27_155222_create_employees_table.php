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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('photo');
            $table->string('first_name',50);
            $table->string('second_name',50);
            $table->string('thrid_name',50);
            $table->string('first_last_name',50);
            $table->string('second_last_name',50);
            $table->string('thrid_last_name',50);
            $table->date('birthday');
            $table->date('start');
            $table->date('end');
            $table->boolean('active');
            $table->string('comments');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};

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
        Schema::create('licenses', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('employee_id')->index()->default(1);
            $table->unsignedBigInteger('license_type_id')->index()->default(1);

            $table->string('first_name',50);
            $table->string('second_name',50);
            $table->string('thrid_name',50);
            $table->string('first_last_name',50);
            $table->string('second_last_name',50);
            $table->string('thrid_last_name',50);

            $table->string('office',200);

            $table->date('start');
            $table->date('end');

            $table->string('boss_first_name',50);
            $table->string('boss_second_name',50);
            $table->string('boss_thrid_name',50);
            $table->string('boss_first_last_name',50);
            $table->string('boss_second_last_name',50);
            $table->string('boss_thrid_last_name',50);

            $table->string('reason',250);
            $table->timestamps();

            $table->foreign('employee_id')->references('id')->on('employees');
            $table->foreign('license_type_id')->references('id')->on('license_types');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('licenses');
    }
};

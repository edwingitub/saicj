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
        Schema::create('jobs', function (Blueprint $table) {
            $table->comment("Tabla de puestos funcionales");
            $table->id();
            $table->string('name')->default("Vacante");
            $table->unsignedBigInteger('employee_id')->index()->default(1);
            $table->unsignedBigInteger('office_id')->index()->default(1);
            $table->string('subaccount')->default("1");
            $table->timestamps();

            $table->foreign('employee_id')->references('id')->on('employees');
            $table->foreign('office_id')->references('id')->on('offices');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jobs');
    }
};

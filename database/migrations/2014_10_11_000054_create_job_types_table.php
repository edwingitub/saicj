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
        Schema::create('job_types', function (Blueprint $table) {
            $table->comment("Puestos Nominales");
            $table->id();
            $table->string('name')->default("Pendiente")->comment("Nombre");
            $table->string('account')->default("0")->comment("Cuenta");
            $table->integer('amount')->default("0")->comment("Cantidad");

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('job_types_');
    }
};

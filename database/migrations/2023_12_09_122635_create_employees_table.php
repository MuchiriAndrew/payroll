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
            $table->string('name');
            $table->string('phoneNo');
            $table->string('email');
            $table->unsignedBigInteger('departmentID');
            $table->unsignedBigInteger('branchID');
            $table->foreign('departmentID')->references('id')->on('departments')->onDelete('cascade');
            $table->foreign('branchID')->references('id')->on('branches')->onDelete('cascade');
            $table->integer('salary');
            $table->boolean('isDisabled?')->default(false);
            $table->string('document')->nullable();
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

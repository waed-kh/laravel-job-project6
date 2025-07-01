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
        Schema::create('companies', function (Blueprint $table) {
          
        $table->id();
        $table->string('name');
        $table->string('registration_number')->nullable();
        $table->string('business_type')->nullable();
        $table->integer('employees_count')->nullable();
        $table->string('country')->nullable();
        $table->text('bio')->nullable();
        $table->timestamps();
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('companies');
    }
};

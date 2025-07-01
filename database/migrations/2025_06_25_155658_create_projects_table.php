<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
  public function up()
{
 Schema::create('projects', function (Blueprint $table) {
    $table->id();
    $table->string('title');
    $table->string('company_name')->nullable();
    $table->string('work_place');
    $table->string('gender_preference')->nullable();
    $table->integer('education_level_id')->nullable();
    $table->integer('work_experience')->nullable();
    $table->integer('business_man_id')->nullable();
    $table->string('salary_range')->nullable();
    $table->string('posted_time')->nullable();
    $table->string('job_type')->nullable();
    $table->string('category')->nullable();
    $table->string('residency_country')->nullable();
    $table->string('nationality')->nullable();
    $table->integer('views')->default(0);
    $table->json('tags')->nullable();
    $table->text('description')->nullable();
    $table->timestamps();
});


}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};

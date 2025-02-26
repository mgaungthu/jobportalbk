<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobVacanciesTable extends Migration
{
    public function up()
    {
        Schema::create('job_vacancies', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->decimal('salary', 10, 2);
            $table->text('qualification')->nullable(); // Adding qualification field
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('job_vacancies');
    }
}

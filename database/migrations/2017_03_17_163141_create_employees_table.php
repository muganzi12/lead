<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->increments('id', true);
            $table->string('title', 60);
            $table->string('surname', 60);
            $table->string('othername', 60);
            $table->string('genda', 60);
            $table->string('email', 60);
            $table->string('nationality', 60);
            $table->string('region', 60);
            $table->date('birthdate');
            $table->integer('contact');
            $table->string('professional_qualification', 120);
            $table->string('experience', 120);
            $table->string('critical_skills', 120);
            $table->string('cv', 60);
            $table->date('availability', 60);
            $table->string('marital_status', 60);
            $table->string('religion', 60);
            $table->string('children', 60);
            $table->string('adverse_circumstances', 120);
            $table->string('profession', 60);
            $table->string('occupation', 60);
            $table->string('qualification', 60);
            $table->string('current_directorship', 60);
            $table->string('trainings', 120);
            $table->string('current_position', 60);
            $table->string('sector', 60);
            $table->string('industry', 60);
            $table->integer('age')->unsigned();
            $table->integer('status')->default(0);
            // $table->integer('company_id')->unsigned();
            // $table->foreign('company_id')->references('id')->on('company');
            $table->string('picture', 60);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employees');
    }
}

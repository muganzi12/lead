<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInstitutionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('institution', function (Blueprint $table) {
            $table->increments('id');
            $table->string('organization_name', 60);
            $table->string('trading_name', 60);
            $table->string('business_type', 60);
            $table->string('others', 60);
            $table->string('business', 60);
            $table->string('country', 60);
            $table->string('city',60);
            $table->string('district',60);
            $table->string('cell_phone', 60);
            $table->string('title', 60);
            $table->string('surname', 60);
            $table->string('firstname', 60);
            $table->string('other_name', 60);
            $table->string('job_title', 60);
            $table->string('email', 60);
            $table->string('board_members', 120);
            $table->string('committees', 60);
            $table->string('benefit', 60);
            $table->string('declaration', 60);
            $table->date('date', 60);

            $table->string('picture', 60);
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('institution');
    }
}

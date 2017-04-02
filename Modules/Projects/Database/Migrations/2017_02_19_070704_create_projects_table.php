<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProjectsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('company_id');
            $table->string('project_number', 100);
            $table->string('project_name', 255);
            $table->integer('relation_id')->index('relation_id');
            $table->integer('status_id')->index('project_status')->default(0);
            $table->date('start_date');
            $table->date('deadline');
            $table->integer('assigned_staff_id')->nullable();
            $table->softDeletes();
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
        Schema::drop('projects');
    }

}

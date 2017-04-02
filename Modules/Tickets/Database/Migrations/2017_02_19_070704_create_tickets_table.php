<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTicketsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('company_id');
            $table->string('ticket_number', 32);
            $table->integer('relation_id')->unsigned()->nullable()->index('user_id');
            $table->string('subject', 255);
            $table->integer('department_id')->index('ticketdepartment');
            $table->integer('team_id')->unsigned()->nullable()->index('team_id');
            $table->integer('priority_id')->index('ticketpriority');
            $table->integer('sla_id')->unsigned()->nullable()->index('sla');
            $table->integer('help_topic_id')->unsigned()->nullable()->index('help_topic_id');
            $table->integer('status_id')->index('ticketstatus');
            $table->integer('project_id')->default(0);


            $table->timestamp('lastreply')->nullable();
            $table->boolean('clientread')->default(0);
            $table->boolean('adminread')->default(0);

            $table->integer('assigned_staff_id')->index('ticketstaffid')->default(0);

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
        Schema::drop('tickets');
    }

}

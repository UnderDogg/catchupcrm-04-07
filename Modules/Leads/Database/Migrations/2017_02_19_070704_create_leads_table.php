<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLeadsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('leads', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('title', 100);

            $table->integer('relation_id')->index('lead_relation');

            $table->boolean('is_public')->default(0);

            $table->integer('status_id')->index('lead_status');
            $table->integer('source_id')->index('lead_source');

            $table->string('email', 150)->nullable();
            $table->string('phonenumber', 50)->nullable();

            $table->timestamp('date_converted')->nullable();


            $table->integer('assigned_staff_id')->index('lead_assigned');
            $table->date('date_assigned')->nullable();

            $table->timestamp('lastcontact')->nullable();
            $table->timestamp('last_status_change')->nullable();

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
        Schema::drop('leads');
    }

}

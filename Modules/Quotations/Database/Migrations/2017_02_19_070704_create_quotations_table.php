<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateQuotationsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quotations', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('company_id')->nullable();


            $table->string('quotation_number', 100)->nullable();

            $table->string('title', 100)->nullable();
            $table->integer('relation_id')->nullable();
            $table->integer('status_id')->index('quotation_status');

            $table->date('date_converted')->nullable();

            $table->integer('assigned_staff_id')->nullable();
            $table->date('valid_till')->nullable();
            $table->boolean('is_expiry_notified')->default(0);

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
        Schema::drop('quotations');
    }

}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRelationsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('relations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('relation_key', 100)->default('');
            $table->integer('relationtype_id')->default(0);
            $table->string('relation_name', 100)->default('');
            $table->string('relation_slug', 100)->default('');
            $table->integer('main_relation')->default(0);

            $table->boolean('is_active')->default(1);
            $table->string('website', 128)->default('');
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
        Schema::drop('relations');
    }

}

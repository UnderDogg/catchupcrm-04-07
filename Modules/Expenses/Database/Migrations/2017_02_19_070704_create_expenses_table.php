<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateExpensesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('expenses', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('category_id')->index('category');
            $table->string('expense_key', 100);    // NOT NULL

            $table->string('title', 50);    // NOT NULL

            $table->integer('relation_id')->default(0)->index('expense_relation');
            $table->integer('project_id')->default(0)->index('project_id');

            $table->text('note', 65535)->nullable();

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
        Schema::dropIfExists('expenses');
    }
}

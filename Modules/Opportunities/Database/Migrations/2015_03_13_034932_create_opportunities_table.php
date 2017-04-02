<?php
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOpportunitiesTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('opportunities', function (Blueprint $table) {
            $table->increments('id');
            $table->string('opportunity_number', 30);
            $table->string('title');
            $table->integer('relation_id')->unsigned()->nullable();
            $table->integer('contact_id')->unsigned()->nullable();

            $table->integer('status_id')->index('opp_status');

            $table->integer('type_id')->unsigned()->nullable();
            $table->integer('stage_id')->unsigned()->nullable();

            $table->decimal('amount', 12, 2)->nullable();
            $table->date('close_date');
            $table->decimal('expected_revenue', 12, 2)->nullable();

            $table->smallInteger('probability');

            $table->integer('lead_id')->unsigned()->nullable();

            $table->integer('owner_staff_id')->unsigned()->index('opp_owner_staff')->nullable();
            $table->integer('adder_staff_id')->unsigned()->index('opp_adder_staff')->nullable();
            $table->integer('modifier_staff_id')->unsigned()->index('opp_modifier_staff')->nullable();

            $table->text('description')->nullable();

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
        Schema::drop('opportunities');
    }
}

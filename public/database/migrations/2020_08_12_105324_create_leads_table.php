<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
        $table->bigIncrements('id')->unsigned();
        $table->string('first_name');
        $table->string('last_name');
        $table->string('email')->nullable()->default('NULL');
        $table->string('fax')->nullable()->default('NULL');
        $table->string('annual_revenue')->nullable()->default('NULL');
        $table->string('website')->nullable()->default('NULL');
        $table->string('no_of_employees')->nullable()->default('NULL');
        $table->string('skype')->nullable()->default('NULL');
        $table->string('company')->nullable()->default('NULL');
        $table->string('job_title')->nullable()->default('NULL');
        $table->string('phone')->nullable()->default('NULL');
        $table->string('mobile')->nullable()->default('NULL');
        $table->string('secondary_email')->nullable()->default('NULL');
        $table->string('twitter')->nullable()->default('NULL');
        $table->string('facebook')->nullable()->default('NULL');
        $table->text('description');
        $table->string('addr_street')->nullable()->default('NULL');
        $table->string('addr_state')->nullable()->default('NULL');
        $table->string('addr_country')->nullable()->default('NULL');
        $table->string('addr_city')->nullable()->default('NULL');
        $table->string('addr_pincode')->nullable()->default('NULL');
        $table->integer('lead_status_id')->unsigned()->nullable();
        $table->integer('lead_source_id')->unsigned()->nullable();
        $table->integer('lead_industry_id')->unsigned()->nullable();
        $table->integer('lead_rating_id')->unsigned()->nullable();
        $table->string('owned_by_type')->nullable();
        $table->bigInteger('owned_by_id')->unsigned()->nullable();
        $table->timestamp('created_at')->nullable();
        $table->timestamp('updated_at')->nullable();
        $table->timestamp('deleted_at')->nullable();
        $table->datetime('capture_date')->nullable();
        $table->integer('company_id')->unsigned()->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('leads');
    }
}



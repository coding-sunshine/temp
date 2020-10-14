<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
        $table->bigIncrements('id')->unsigned();
        $table->string('owned_by_type')->nullable()->default('NULL');
        $table->bigInteger('owned_by_id')->unsigned()->nullable();
        $table->string('first_name')->nullable()->default('NULL');
        $table->string('last_name')->nullable()->default('NULL');
        $table->string('job_title')->nullable()->default('NULL');
        $table->string('department')->nullable()->default('NULL');
        $table->integer('contact_status_id')->unsigned()->nullable();
        $table->integer('contact_source_id')->unsigned()->nullable();
        $table->string('phone')->nullable()->default('NULL');
        $table->string('mobile')->nullable()->default('NULL');
        $table->string('email')->nullable()->default('NULL');
        $table->string('secondary_email')->nullable()->default('NULL');
        $table->string('fax')->nullable()->default('NULL');
        $table->string('assistant_name')->nullable()->default('NULL');
        $table->string('assistant_phone')->nullable()->default('NULL');
        $table->string('street')->nullable()->default('NULL');
        $table->string('state')->nullable()->default('NULL');
        $table->string('city')->nullable()->default('NULL');
        $table->string('country')->nullable()->default('NULL');
        $table->string('pincode')->nullable()->default('NULL');
        $table->text('notes')->nullable()->default('NULL');
        $table->timestamp('created_at')->nullable();
        $table->timestamp('updated_at')->nullable();
        $table->timestamp('deleted_at')->nullable();
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
        Schema::dropIfExists('clients');
    }
}

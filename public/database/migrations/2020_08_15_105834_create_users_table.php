<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
                $table->bigIncrements('id')->unsigned();
                $table->string('first_name')->nullable();
                $table->string('last_name')->nullable();
                $table->string('email')->unique(); ;
                $table->string('username');
                $table->string('password');
                $table->timestamp('email_verified_at')->nullable();
                $table->string('remember_token')->nullable();
                $table->tinyInteger('is_active')->default('1');
                $table->integer('current_account')->unsigned()->nullable();
                $table->tinyInteger('is_superAdmin')->default('0');
                $table->string('title')->nullable();
                $table->string('department')->nullable();
                $table->string('office_phone')->nullable();
                $table->string('mobile_phone')->nullable();
                $table->string('home_phone')->nullable();
                $table->string('signature')->nullable();
                $table->string('fax')->nullable();
                $table->string('secondary_email')->nullable();
                $table->tinyInteger('left_panel_hide')->default('0');
                $table->string('address_street')->nullable();
                $table->string('address_city')->nullable();
                $table->string('address_state')->nullable();
                $table->string('address_country')->nullable();
                $table->string('address_postal_code')->nullable();
                $table->integer('time_format_id')->unsigned()->default('1');
                $table->integer('date_format_id')->unsigned()->default('1');
                $table->string('time_zone')->default('Australia/Melbourne');
                $table->string('profile_image')->nullable()->default('NULL');
                $table->tinyInteger('access_to_all_entity')->default('0');
                $table->timestamp('deleted_at')->nullable();
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
        Schema::dropIfExists('users');
    }
}

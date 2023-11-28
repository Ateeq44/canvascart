<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('phone')->nullable();
            $table->string('image')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->enum('role',['1','2','3'])->default('3');
            $table->text('address')->nullable();
            $table->text('about_me')->nullable();
            $table->text('employer_status')->nullable();
            $table->text('exp_level')->nullable();
            $table->text('current_employer')->nullable();
            $table->text('highest_degree')->nullable();
            $table->text('gender')->nullable();
            $table->text('instructor_degree')->nullable();
            $table->string('login_sso_type')->nullable();
            $table->string('login_sso_secret')->nullable();

            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}

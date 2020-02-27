<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdminUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //后台用户表
        Schema::create('admin_users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 16)->comment('用户名');
            $table->string('email', 32)->unique()->comment('邮箱地址');
            $table->string('password')->comment('密码');
            $table->string('last_login_ip')->default('')->comment('最后登录IP');
            $table->timestamp('last_login_date')->nullable(true)->comment('最后登录时间');
            $table->rememberToken()->comment('记住的token');
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
        Schema::dropIfExists('admin_users');
    }
}

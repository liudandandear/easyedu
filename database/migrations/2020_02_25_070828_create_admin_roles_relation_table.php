<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdminRolesRelationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //用户关联角色
        Schema::create('admin_roles_relation', function (Blueprint $table) {
            $table->integer('admin_users_id')->index()->comment('后台用户ID');
            $table->integer('role_id')->index()->comment('角色ID');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('admin_roles_relation');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdminPermissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //权限表
        Schema::create('admin_permissions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('display_name')->comment('权限名');
            $table->string('slug')->comment('slug');
            $table->string('description')->comment('描述');
            $table->string('method')->comment('HTTP动作');
            $table->string('url')->comment('URL');
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
        Schema::dropIfExists('admin_permissions');
    }
}

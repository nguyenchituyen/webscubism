<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoleActionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dtb_roles_action', function (Blueprint $table) {
            $table->increments('id');
            $table->string('controller');
            $table->string('action');
            $table->string('type');
            $table->integer('role_id')->unsigned();
            $table->foreign('role_id')->references('id')->on('dtb_roles');
            $table->timestamps();
        });
        Schema::dropIfExists('resource_items');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dtb_roles_action');
    }
}

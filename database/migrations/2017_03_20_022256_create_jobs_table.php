<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dtb_jobs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('alias')->nullable();
            $table->string('introduce', 100)->nullable();
            $table->text('description');
            $table->string('images', 100)->nullable();
            $table->integer('rank')->nullable();
            $table->string('staff_id')->nullable();
            $table->string('locations', 100)->nullable();
            $table->integer('views')->default(0);
            $table->integer('del_flg')->default(0);
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
        Schema::dropIfExists('dtb_jobs');
    }
}

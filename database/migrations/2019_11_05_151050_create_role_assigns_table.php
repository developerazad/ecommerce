<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoleAssignsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ac_group_links', function (Blueprint $table) {
            $table->increments('group_link_id');
            $table->integer('user_group_id');
            $table->integer('module_id');
            $table->integer('modlink_id');
            $table->integer('user_id');
            $table->integer('create_fg')->default(0);
            $table->integer('read_fg')->default(0);
            $table->integer('update_fg')->default(0);
            $table->integer('delete_fg')->default(0);
            $table->integer('active_fg')->default(1);
            $table->integer('created_by')->nullable();
            $table->integer('updated_by')->nullable();
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
        Schema::dropIfExists('role_assigns');
    }
}

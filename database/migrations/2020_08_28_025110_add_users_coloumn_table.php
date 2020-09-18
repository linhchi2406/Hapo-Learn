<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddUsersColoumnTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->tinyInteger('role')->default(0);
            $table->string('link_slack')->nullable()->unique();
            $table->string('link_facebook')->nullable()->unique();
            $table->string('introduction')->nullable();
            $table->string('avatar')->nullable();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['role', 'avatar', 'link_slack', 'link_facebook', 'introduction']);
            $table->dropSoftDeletes();
        });
    }
}

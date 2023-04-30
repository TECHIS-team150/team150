<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DropCoulmnToUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn("age");
            $table->dropColumn("email_verified_at");
            $table->dropColumn("remember_token");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //Schema::table('users', function (Blueprint $table) {
          //  $table->int("age");
            //$table->timestamp("email_verified_at");
            //$table->varchar("remember_token");
        //});
    }
}

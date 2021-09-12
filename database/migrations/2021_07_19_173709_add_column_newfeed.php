<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnNewfeed extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('news_feeds', function (Blueprint $table) {
            $table->string('status')->nullable();
            $table->timestamp('starting_date')->nullable();
            $table->timestamp('end_date')->nullable();
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('news_feeds', function (Blueprint $table) {
            //
        });
    }
}

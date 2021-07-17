<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->timestamp('registration_date')->nullable();
            $table->string('cr_no')->unique();
            $table->decimal('gosi_amount')->nullable();
            $table->decimal('lmr_amount')->nullable();
            $table->string('activity')->nullable();
            $table->string('owner_name')->nullable();
            $table->string('mobile')->nullable();
            $table->string('lan')->nullable();
            $table->string('email')->nullable();
            $table->string('address')->nullable();
            $table->string('pincode')->nullable();
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
        Schema::dropIfExists('companies');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Employee', function (Blueprint $table) {
            $table->increments("id");
            $table->string("Passport id");
            $table->string("Last_Name");
            $table->string("First_Name");
            $table->string("Patronymic");
            $table->string("Job_title");
            $table->string("Phone_number");
            $table->string("Address");
            $table->string("company_name");
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
        Schema::dropIfExists('Employee');
    }
};

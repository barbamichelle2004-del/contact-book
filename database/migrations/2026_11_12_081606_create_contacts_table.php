<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
{
    Schema::create('contacts', function (Blueprint $table) {
        $table->id();
        $table->string('full_name');
        $table->string('phone_number');
        $table->string('email')->nullable();
        $table->date('birthday')->nullable();
        $table->string('gender')->nullable();
        $table->string('street')->nullable();
        $table->string('barangay')->nullable();
        $table->string('city_municipality')->nullable();
        $table->string('province')->nullable();
        $table->string('zip_code')->nullable();
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
        Schema::dropIfExists('contacts');
    }
}

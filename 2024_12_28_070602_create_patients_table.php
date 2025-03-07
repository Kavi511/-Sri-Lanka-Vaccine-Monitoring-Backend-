<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->id(); 
            $table->string('FullName', 100);
            $table->date('DateOfBirth');
            $table->enum('Gender', ['Male', 'Female', 'Other']);
            $table->string('ContactNumber', 15)->nullable();
            $table->text('Address')->nullable();
            $table->timestamps(); // Includes CreatedAt and UpdatedAt
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('patients');
    }
}

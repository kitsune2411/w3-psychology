<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Schema;

class CreatePsychologistTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('psychologists', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            // $table->enum('gender', ['male', 'female']);
            // $table->integer('age');
            $table->string('phone_number');
            $table->string('password');
            $table->timestamps();
        });

        DB::table('psychologists')->insert([
            'name' => 'root',
            'email' => 'root@gmail.com',
            'phone_number' => '0812345241',
            'password' => Hash::make('12345678')
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('psychologist');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('task', function (Blueprint $table) {
            $table->id();
            $table->string('fname',50);
            $table->string('lname',50);
            $table->string('email',100)->unique();;
            $table->string('mobile',13);
            $table->string('skills',10);
            $table->string('gender',10);
            $table->string('aadhar',12)->unique();
            $table->string('aadharUploads',191);
            $table->string('certificate',191);
            $table->string('pass',100);
            $table->string('role',100);
           
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}

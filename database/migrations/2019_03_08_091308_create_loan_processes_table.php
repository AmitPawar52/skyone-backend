<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLoanProcessesTable extends Migration
{
    
    public function up()
    {
        Schema::create('loan_processes', function (Blueprint $table) {
            $table->increments('id');
            $table->string("title");
            $table->mediumText("description");
            $table->string("img_url");
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('loan_processes');
    }
}

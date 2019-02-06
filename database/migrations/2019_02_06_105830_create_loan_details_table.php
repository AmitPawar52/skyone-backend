<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLoanDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loan_details', function (Blueprint $table) {
            $table->increments('id');
            $table->string('loanType');
            $table->mediumText('whatIsLType');
            $table->text('whyChooseTitle');
            $table->mediumText('whyChoosePoints');
            $table->text('whyChooseFooter');
            $table->text('ptcTitle');
            $table->mediumText('ptcPoints');
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
        Schema::dropIfExists('loan_details');
    }
}

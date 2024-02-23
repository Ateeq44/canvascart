<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSellerCentersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seller_centers', function (Blueprint $table) {
            $table->id();
            $table->string('store_name');
            $table->string('email');
            $table->string('phone');
            $table->string('country');
            $table->string('city');
            $table->string('address');
            $table->string('id_card_front');
            $table->string('id_card_back');
            $table->string('id_card_name');
            $table->string('cnic');
            $table->string('address1');
            $table->string('bank_statement');
            $table->string('acco_holder_name');
            $table->string('iban_no');
            $table->string('bank_name');
            $table->string('branch_name');
            $table->string('created_by');
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
        Schema::dropIfExists('seller_centers');
    }
}

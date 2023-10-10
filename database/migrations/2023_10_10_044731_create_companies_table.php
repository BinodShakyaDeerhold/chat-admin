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
            $table->bigIncrements('id')->unsigned();
            $table->string('name');
    $table->string('representative_name');
    $table->string('address');
    $table->string('contact_no');
    $table->string('person_in_charge');
    $table->string('theme');
    $table->string('product_name');
    $table->string('description');
    $table->string('summary');
    $table->boolean('input_date_related_to_product')->default(false);
    $table->string('date_for');
    $table->string('date');
            $table->softDeletes();
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

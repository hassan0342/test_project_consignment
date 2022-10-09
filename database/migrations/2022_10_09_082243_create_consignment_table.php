<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConsignmentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consignment', function (Blueprint $table) {
                $table->id();
                $table->string('company')->nullable()->default(null);
                $table->string('contact')->nullable()->default(null);
                $table->string('addressline1')->nullable()->default(null);
                $table->string('addressline2', 250)->nullable()->default(null);
                $table->string('addressline3', 250)->nullable()->default(null);
                $table->string('city', 250)->nullable()->default(null);
                $table->string('country', 250)->nullable()->default(null);
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
        Schema::dropIfExists('consignment');
    }
}

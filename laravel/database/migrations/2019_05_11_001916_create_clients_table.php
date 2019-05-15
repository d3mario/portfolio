<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('name');
            $table->string('phoneNumber', 16);
            $table->string('firstName', 255);
            $table->string('lastName', 255);
            $table->string('websiteUrl', 255);
            $table->longText('caseStudy');
            $table->string('address', 255);
            $table->longText('testimony', 255);
            $table->boolean('active');
            $table->unsignedBigInteger('clientId');
            $table->string('displayIcon', 255);
            $table->timestampTz('created_at')->useCurrent();
            $table->timestampTz('updated_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clients');
    }
}

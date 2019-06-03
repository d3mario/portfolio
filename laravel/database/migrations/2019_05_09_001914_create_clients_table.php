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
            $table->integerIncrements('id');
            $table->text('name')->nullable($name = 'Foo');
            $table->string('phoneNumber', 16)->nullable($phone = '1234567890');
            $table->string('firstName', 255)->nullable($firstName = 'John');
            $table->string('lastName', 255)->nullable($lastName = 'Smith');
            $table->string('websiteUrl', 255)->nullable($website = 'http://www.google.com');
            $table->longText('caseStudy')->nullable($lipsum = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse iaculis ligula ac dolor ultricies semper. Cras dui ligula, lobortis id feugiat a, blandit feugiat lacus. Phasellus sed purus in dolor semper rhoncus. Praesent eleifend magna erat, eu congue est auctor non. Suspendisse potenti. Praesent vitae neque at leo faucibus ullamcorper. Etiam elit turpis, consequat eu ipsum vel, imperdiet porttitor magna. In quis vehicula ipsum. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Ut at sodales orci. Proin id magna ex. Duis rutrum odio lacus, vitae cursus erat aliquet eget. Nunc tempus est vitae efficitur molestie. Etiam varius felis vel velit placerat, id rutrum ligula luctus. Integer non rhoncus tortor.');
            $table->string('address', 255)->nullable($address = '123 Main St, Nuketown, CA 90210');
            $table->longText('testimony', 255)->nullable($testimony = ' Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec in fringilla est. Sed eu purus commodo, pharetra nunc eget, euismod leo. Donec non nisi justo. Donec vehicula ornare vehicula. Mauris sit amet elit eget libero luctus mollis eget ut ipsum. Mauris nisl augue, laoreet vitae quam quis, cursus vulputate arcu. Etiam nisi nunc, eleifend quis semper sit amet, viverra sit amet quam. Vivamus ullamcorper purus eleifend justo fermentum, eu molestie neque pretium. Curabitur id nulla ut urna aliquet rutrum in sed arcu. ');
            $table->boolean('active')->nullable(true);
            $table->string('displayIcon', 255)->nullable($display = 'espn-logo.jpg');
            $table->timestampTz('created_at')->useCurrent();
            $table->timestampTz('updated_at')->useCurrent();


        });

//        Schema::table('clients', function(Blueprint $table){
//            $table->foreign('projectId')
//                ->references('id')
//                ->on('projects')
//                ->onDelete('cascade');
//        });
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

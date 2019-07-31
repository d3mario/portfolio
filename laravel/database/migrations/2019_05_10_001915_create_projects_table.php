<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->integerIncrements('id');
            $table->integer('client_id')->unsigned()->nullable();


            $table->text('description')->nullable('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse iaculis ligula ac dolor ultricies semper. Cras dui ligula, lobortis id feugiat a, blandit feugiat lacus. Phasellus sed purus in dolor semper rhoncus. Praesent eleifend magna erat, eu congue est auctor non. Suspendisse potenti. Praesent vitae neque at leo faucibus ullamcorper. Etiam elit turpis, consequat eu ipsum vel, imperdiet porttitor magna. In quis vehicula ipsum. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Ut at sodales orci. Proin id magna ex. Duis rutrum odio lacus, vitae cursus erat aliquet eget. Nunc tempus est vitae efficitur molestie. Etiam varius felis vel velit placerat, id rutrum ligula luctus. Integer non rhoncus tortor.');
            $table->integer('projectType')->nullable();
            $table->text('images')->nullable();
            $table->text('demo')->nullable();
            $table->timestampTz('created_at')->useCurrent();
            $table->timestampTz('updated_at')->useCurrent();
            $table->boolean('active');
        });

        Schema::table('projects', function(Blueprint $table){
            $table->foreign('client_id')
                ->references('id')
                ->on('clients')
                ->onDelete('cascade');
        });


    }



    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projects');
    }
}

<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {

        Schema::create('students', function(Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('surname');
            $table->enum('formation', ['développement', 'graphisme', 'journalisme']);
            $table->text('bio');
            $table->enum('status', ['publish', 'unpublish'])->default('unpublish');
            $table->timestamps('created_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::drop('students');
    }

}

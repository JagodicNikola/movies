<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movies', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('genre');
            $table->string('director');
            $table->year('year')->nullable();
            $table->text('storyline')->nullable();
            $table->timestamps();
        });
    }
    insert into movies (title,genre,director,year,storyline,created_at,updated_at) values ('Batman','Action','Cristopher Nollan',2015,'Masked vigilante in Gotham City',now(),now());

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('movies');
    }
};

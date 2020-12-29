<?php

use App\Repositories\Constants;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAcademiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('academies', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->string('name');
            $table->string('logo')->nullable();
            $table->string('website')->nullable();
            $table->enum('country', Constants::countries);
            $table->string('state')->nullable();
            $table->string('city')->nullable();
            $table->string('description')->nullable();
            $table->string('motto')->nullable();
            $table->date('date_of_establishment');
            $table->boolean('verified')->default(false);
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
        Schema::dropIfExists('academies');
    }
}

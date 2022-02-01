<?php

use App\Models\Felhasznalo;
use App\Models\Hely;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateErtekelesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ertekeles', function (Blueprint $table) {
            $table->id();
            $table->integer('ertek');
            $table->string('komment');
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
        Schema::dropIfExists('ertekeles');
    }
}

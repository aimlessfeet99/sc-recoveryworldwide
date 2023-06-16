<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEateryEntriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eatery_entries', function (Blueprint $table) {
            $table->id();
            $table->foreignId('eatry_owner_id')->constrained('eatery_owners');
            $table->foreignId('eatry_type_id')->constrained('eatery_types');
            $table->string('name');
            $table->string('city');
            $table->string('state');
            $table->string('zip');
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
        Schema::dropIfExists('eatery_entries');
    }
}

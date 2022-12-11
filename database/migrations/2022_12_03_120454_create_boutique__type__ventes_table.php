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
        Schema::create('boutique__type__ventes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('boutique_id')->constrained();
            $table->foreignId('type_vente_id')->constrained('type_ventes');
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
        Schema::dropIfExists('boutique__type__ventes');
    }
};

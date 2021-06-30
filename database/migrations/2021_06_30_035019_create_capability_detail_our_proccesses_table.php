<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCapabilityDetailOurProccessesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('capability_detail_our_proccesses', function (Blueprint $table) {
            $table->id();
			$table->foreignId('dynamic_capability_id')->constrained('dynamic_capabilities')->onDelete('cascade');
			$table->foreignId('capability_detail_id')->constrained('capability_details')->onDelete('cascade');
			$table->string('title');
			$table->text('subtitle');
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
        Schema::dropIfExists('capability_detail_our_proccesses');
    }
}

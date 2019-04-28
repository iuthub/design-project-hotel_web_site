<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoomsTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('rooms', function (Blueprint $table) {
			$table->bigIncrements('id');
			$table->integer('room_number');
			$table->integer('status');
			$table->string('type');
			$table->integer('max_adults');
			$table->integer('max_children');
			$table->integer('cost');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists('rooms');
	}
}

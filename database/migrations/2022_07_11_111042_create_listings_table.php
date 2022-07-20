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
        Schema::create('listings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->index();
            $table->foreignId('work_type_id');
            $table->string('title');
            $table->string('slug');
            $table->string('business_name')->nullable();
            $table->text('description');
            $table->string('location');
            $table->integer('wage')->nullable();
            $table->string('contact');
            $table->boolean('is_active')->default(true);
            $table->boolean('urgent')->default(false);
            $table->integer('number_of_workers')->default(1);
            $table->softDeletes();
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
        Schema::dropIfExists('listings');
    }
};

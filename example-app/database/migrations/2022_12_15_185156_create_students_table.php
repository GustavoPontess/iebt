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
        // dropping tables created automatically by laravel
        // Schema::dropIfExists('users');
        // Schema::dropIfExists('password_resets');
        // Schema::dropIfExists('failed_jobs');
        // Schema::dropIfExists('personal_access_tokens');

        // creating students table
        Schema::create('students', function (Blueprint $table) {
            $table->id(); // ja torna o id como primary-key
            // $table->string('code', 30)->primary(); -> forma de tornar uma coluna primaria
            $table->string('name');
            $table->string('matricula')->unique();
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
        Schema::dropIfExists('students');
    }
};

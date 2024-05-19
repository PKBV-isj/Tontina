<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('nom', 30)->nullable(false);
            $table->string('prenom', 30)->nullable();
            $table->date('anneeNais')->nullable();
            $table->date('anneeEntree')->nullable();
            $table->integer('nbDeFemmes')->nullable(false);
            $table->string('login', 50)->nullable(false);
            $table->string('password')->nullable(false);
            $table->boolean('valide')->nullable();
            $table->string('role')->default('user');
            $table->char('sexe', 1)->nullable(false)->default('M');
            $table->string('nomEpoux', 50)->nullable();
            $table->string('telephone1', 15)->nullable();
            $table->string('telephone2', 15)->nullable();
            $table->string('email')->nullable()->unique();;
            $table->boolean('actif')->nullable(false)->default(false);
            $table->string('photo')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};

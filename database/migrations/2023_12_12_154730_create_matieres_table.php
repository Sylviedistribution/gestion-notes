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
        Schema::create('matieres', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('professeur');
            $table->decimal('coefficient', 5, 2);
            $table->unsignedBigInteger('unites_enseignement_id'); // Colonne pour la clé étrangère

            // Déclaration explicite de la clé étrangère
            $table->foreign('unites_enseignement_id', 'fk_matiere_unites_enseignement')
                ->references('id')
                ->on('unites_enseignement')
                ->onDelete('cascade'); // Ajout de l'option onDelete pour la suppression en cascade si nécessaire

            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('matiere');
    }
};

<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFamiliesTable extends Migration
{
    public function up(): void
    {
        Schema::create('families', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable(); // Optional: e.g., "Silva Family"
            $table->foreignId('responsible_id')->constrained('guests')->cascadeOnDelete();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('families');
    }
}

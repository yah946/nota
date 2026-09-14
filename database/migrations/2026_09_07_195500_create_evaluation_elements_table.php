<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use \App\Models\User;
return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('evaluation_elements', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(User::class,'teacher_id')->constrained();
            $table->string("name");
            $table->string("description");
            $table->string("element_type");
            $table->string("default_weight"); // How much does this element contribute to the final score?
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('evaluation_elements');
    }
};

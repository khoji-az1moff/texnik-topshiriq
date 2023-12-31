<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use function Laravel\Prompts\table;
use function Laravel\Prompts\text;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('applications', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->text('subject');
            $table->text('massage');
            $table->text('file_url');
            $table->timestamps();
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('applications');
    }
};

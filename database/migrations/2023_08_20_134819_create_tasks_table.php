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
        Schema::create('tasks', function (Blueprint $table) {
        $table->id();
        $table->string('title');
        $table->text('description');
        $table->string('email'); // เพิ่มคอลัมน์ email
        $table->timestamps();
         $table->string('creator_email');
        $table->string('assignee_email')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tasks');
        Schema::table('tasks', function (Blueprint $table) {
            $table->dropColumn(['creator_email', 'assignee_email']);
        });
    }
};

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
        Schema::create('events', function (Blueprint $table) {
            $table->id();

            $table->string('title');
            $table->string('type'); // ... 
            $table->text('description');
            $table->string('location');
            $table->string('contact');
            $table->dateTime('start_at');
            $table->dateTime('end_at');
            $table->string('image')->nullable();

            // $table->boolean('is_published')->default(false);
            // $table->boolean('is_cancelled')->default(false);
            // $table->boolean('is_ended')->default(false);

            $table->integer('max_attendees')->default(0);
            $table->boolean('is_full')->default(false);

            // $table->integer('attendees_count')->default(0);
            // $table->integer('waitlist_count')->default(0);
            // $table->integer('waitlist_max')->default(0);
             
            $table->string('status')->default('active'); // active, got problem (need to contact the admin)
           
            $table->foreignId('creator_id')->constrained('users');

            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};

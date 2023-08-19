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
            $table->string('email')->unique();
            $table->string('name');
            $table->string('faculty');
            $table->integer('year');
            $table->string('studentID');
            // $table->string('image_path');
            $table->string('phoneNumber');
            $table->string('certification')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');

            // $table->string('student_id');
            // $table->string('faculty');
            $table->string('major');
            $table->string('college_year');
            // $table->string('phone_number');
            $table->string('allergic_food')->nullable();
            $table->string('joined_event_count')->default(0);

            $table->text('bio')->nullable();
            $table->string('profile_picture')->nullable();

            $table->boolean('is_admin')->default(false);
            $table->boolean('can_create_event')->default(false);

            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();
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

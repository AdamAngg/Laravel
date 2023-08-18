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
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('post_id')->index();
            $table->foreignId('user_id')->index();
            $table->text('body');
            $table->timestamps();

            $table->foreign('post_id', 'fk_comments_posts')
                ->references('id')->on('posts')
                ->onDelete('cascade');

            $table->foreign('user_id', 'fk_comments_users')
                ->references('id')->on('users')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comments');
    }
};

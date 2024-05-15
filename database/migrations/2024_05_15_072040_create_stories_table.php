<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('stories', function (Blueprint $table) {
            $table->id();
            $table->foreignId("author_id")->constrained()->cascadeOnDelete();
            $table->string("cover_thumbnail");
            $table->string("title");
            $table->string("slug");
            $table->text("content");
            $table->integer('read_time_seconds')->default(0);
            $table->enum('type', ['normal', 'premium'])->default('normal');
            $table->enum("status", ["draft","pending_review","published","scheduled","archived","rejected"])->default("draft");
            $table->timestamp("published_at")->nullable();
            $table->timestamp('scheduled_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stories');
    }
};

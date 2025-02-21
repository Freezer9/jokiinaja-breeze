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
        Schema::create('chats', function (Blueprint $table) {
            $table->id('chat_id');
            $table->foreignId('transaction_id')->constrained('transactions', 'transaction_id')->onDelete('cascade');
            $table->foreignId('seller_id')->constrained('sellers', 'seller_id')->onDelete('cascade');
            $table->text('message');
            $table->integer('key_user');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('chats');
    }
};

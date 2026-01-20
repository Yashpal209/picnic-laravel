<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('leads', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->string('whatsapp')->nullable();
            $table->string('location')->nullable();
            $table->text('address')->nullable();
            $table->string('subject')->nullable();
            $table->text('message')->nullable();
            $table->string('business_type')->nullable(); // distributor | franchise
            $table->string('amount')->nullable();
            $table->string('source')->nullable(); // index_business | distributor_form | franchise_form | contact_form
            $table->string('status')->default('new');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('leads');
    }
};

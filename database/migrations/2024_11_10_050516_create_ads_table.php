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
        Schema::create('ads', function (Blueprint $table) {
            $table->id();
            $table->string('registration_id')->nullable()->unique();
            $table->unsignedBigInteger('category_id');
            $table->string('title')->nullable();
            $table->string('slug')->nullable();
            $table->text('description')->nullable();
            $table->unsignedBigInteger('type')->nullable();
            $table->unsignedBigInteger('category')->nullable();
            $table->integer('number_of_beds')->nullable();
            $table->integer('number_of_baths')->nullable();
            $table->integer('number_of_washrooms')->nullable();
            $table->integer('number_of_floors')->nullable();
            $table->integer('number_of_parkings')->nullable();
            $table->unsignedBigInteger('furnished')->nullable();
            $table->unsignedBigInteger('facing')->nullable();
            $table->decimal('buildup_area', 10, 2)->nullable();
            $table->decimal('carpet_area', 10, 2)->nullable();
            $table->decimal('plot_area', 10, 2)->nullable();
            $table->decimal('length', 10, 2)->nullable();
            $table->decimal('breadth', 10, 2)->nullable();
            $table->string('project_name')->nullable();
            $table->decimal('price', 10, 2)->nullable();
            $table->string('location')->nullable();
            $table->string('address')->nullable();
            $table->string('pincode', 7)->nullable();
            $table->unsignedBigInteger('state')->nullable();
            $table->unsignedBigInteger('district')->nullable();
            $table->integer('height')->nullable();
            $table->date('dob')->nullable();
            $table->unsignedBigInteger('religion')->nullable();
            $table->unsignedBigInteger('caste')->nullable();
            $table->unsignedBigInteger('subcaste')->nullable();
            $table->unsignedBigInteger('qualification')->nullable();
            $table->unsignedBigInteger('occupation')->nullable();
            $table->decimal('income', 10, 2)->nullable();
            $table->string('contact_number_1', 10)->nullable();
            $table->string('contact_number_2', 10)->nullable();
            $table->string('biodata')->nullable();
            $table->string('horoscope')->nullable();
            $table->enum('status', ['pending', 'approved', 'rejected']);
            $table->unsignedBigInteger('created_by')->nullable();
            $table->unsignedBigInteger('updated_by')->nullable();
            $table->unsignedBigInteger('approved_by')->nullable();
            $table->timestamp('approved_at')->nullable();
            $table->double('lat')->nullable();
            $table->double('lng')->nullable();
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('restrict');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ads');
    }
};

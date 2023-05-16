<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rates', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('product_id');
            $table->unsignedInteger('tenor_id');
            $table->unsignedInteger('currency_id');
            $table->double('minimum_amount', 18, 4);
            $table->double('maximum_amount', 18, 4);
            $table->decimal('upfront', 5, 2)->nullable();
            $table->decimal('maturity', 5, 2)->nullable();
            $table->decimal('monthly', 5, 2)->nullable();
            $table->decimal('bi-monthly', 5, 2)->nullable();
            $table->decimal('quarterly', 5, 2)->nullable();
            $table->decimal('semi-annually', 5, 2)->nullable();
            $table->decimal('yearly', 5, 2)->nullable();
            $table->decimal('officer_max_rate', 5, 2);
            $table->decimal('customer_max_rate', 5, 2)->nullable();
            $table->boolean('status')->default(1);
            $table->decimal('has_direct_debit')->nullable();
            $table->decimal('has_no_direct_debit')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rates');
    }
};

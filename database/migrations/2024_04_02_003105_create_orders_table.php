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
    Schema::create('orders', function (Blueprint $table) {
      $table->id();
      $table->unsignedBigInteger("client_id");
      $table->string("shipping_type");
      $table->string("pay_type");
      $table->string("status");
      $table->float("total");
      $table->unsignedBigInteger("invoice_id");
      $table->timestamps();

      $table->foreign("client_id")->references("id")->on("clients");
      $table->foreign("invoice_id")->references("id")->on("invoices");
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('orders');
  }
};

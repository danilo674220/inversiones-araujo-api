<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
  use HasFactory;

  protected $fillable = [
    "client_id",
    "shipping_type",
    "pay_type",
    "status",
    "invoice_id"
  ];

  public function orderProducts() {
    return $this->hasMany(OrderProduct::class);
  }

  public function client() {
    return $this->belongsTo(Client::class);
  }
}

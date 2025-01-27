<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VitroOrder extends Model
{
  use HasFactory;

  protected $fillable = [
    "document_type",
    "document",
    "first_name",
    "last_name",
    "destination",
    "variety_id",
    "price",
    "quantity",
    "advance",
    "init_date",
    "finish_date",
    "phone",
    "invoice_id",
    "image_id",
    "status"
  ];

  public function variety() {
    return $this->belongsTo(Variety::class);
  }
}

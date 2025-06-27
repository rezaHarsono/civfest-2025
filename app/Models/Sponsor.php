<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Sponsor
{
  public static function all(): array
  {
    return [
      [
        "tier" => "bronze",
        "name" => "Bank Saqu",
        "image" => "Bank Saqu.png",
      ],
      [
        "tier" => "bronze",
        "name" => "Maxwin Deospray",
        "image" => "Maxwin Deospray.jpg",
      ],
      [
        "tier" => "bronze",
        "name" => "seabank",
        "image" => "seabank.png",
      ],

    ];
  }
}

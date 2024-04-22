<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\CanPromoteProducts;
use App\Traits\CanShareContent;
class SMA extends Model
{
    use HasFactory;
    use CanShareContent;


}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MrRegionData extends Model
{
    use HasFactory;

    protected $table = 'master_region_data';
    protected $primaryKey = 'mrr_id';
}

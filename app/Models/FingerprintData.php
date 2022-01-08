<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FingerprintData extends Model
{
    use HasFactory;

    protected $table = 'fingerprint_data';
    protected $primaryKey = 'fingerprint_id';
    protected $guarded = ['fingerprint_id'];
    protected $id;

}

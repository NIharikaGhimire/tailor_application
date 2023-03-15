<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class MeasurementDetail extends Model
{
    protected $table = 'measurement_details';
    protected $primaryKey = 'id';
    protected $fillable = ['title'];
    use HasFactory;

    public function getPersonalDetail(): BelongsTo
    {
        # code...
        // belongsTo
            return $this->belongsTo(PersonalDetail::class,'personaldetails_measurements');
    }
}
// one personal details has many measurements


<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Transaction extends Model
{
    use HasFactory;

    public function teacher(): BelongsTo{
        return $this->belongsTo(Teacher::class);
    }

    public function criteria(): BelongsTo{
        return $this->belongsTo(Criteria::class);
    }

    public static function generateStat(){
        return self::query()
            // ->select('criteria_id','val')
            ->groupBy('criteria_id','val')
            ->orderBy('criteria_id')
            ;
    }
}

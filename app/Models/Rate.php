<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rate extends Model
{
    use \Sushi\Sushi;

    protected $rows;

    public function __construct(array $attributes = []){
        $Transaction = Transaction::with('teacher')->orderBy('teacher_id')->get();
        $Criterias = Criteria::get();

        // $matrix = [];
        $finalMatrix = [];
        $output = [];
        $output2 = [];
        

        // melakukan normalisasi matrix
        foreach ($Criterias as $key => $value) {
            // $matrix[$value->name] = $Transaction->where('criteria_id',$value->id)->pluck('val','teacher.name')->toArray();

            // ambil nilai per kriteria tiap guru
            $matrix = $Transaction->where('criteria_id',$value->id)->pluck('val','teacher.name')->toArray();
            $criterialTotal = 0;

            // lakukan perulangan nilai per kriteria guru
            foreach ($matrix as $keyT => $valueT) {
                $criterialTotal += pow($valueT,2);
            }
            
            // melakukan optimasi attribute
            foreach ($matrix as $keyT => $valueT) {
                $finalMatrix[$value->name][$keyT] = sprintf("%.3f",round(sprintf("%.3f",round($valueT/round(sqrt($criterialTotal),3), 3)) * $value->quality,3));
                
                if($value->optimum == 'max'){
                    if(isset($output[$keyT])){
                        $output[$keyT] += $finalMatrix[$value->name][$keyT];
                    }else {
                        $output[$keyT] = $finalMatrix[$value->name][$keyT];
                    }
                }else {
                    if(isset($output[$keyT])){
                        $output[$keyT] -= $finalMatrix[$value->name][$keyT];
                    }else {
                        $output[$keyT] = $finalMatrix[$value->name][$keyT];
                    }
                }
            }
        }

        arsort($output);
        
        $this->rows = $output;
    }
}

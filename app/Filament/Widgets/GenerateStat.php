<?php

namespace App\Filament\Widgets;

use App\Models\Rate;
use Filament\Tables;
use App\Models\Teacher;
use Filament\Tables\Table;
use App\Models\Transaction;
use Illuminate\Database\Eloquent\Builder;
use Filament\Widgets\TableWidget as BaseWidget;

class GenerateStat extends BaseWidget
{
    // public function table(Table $table): Table
    // {
    //     return $table
    //         ->query(function(Builder $query, $livewire){
    //             // dd(Transaction::select('val')->groupBy('criteria_id')->get());
    //             // dd(Transaction::generateStat()->get());
    //             return (Rate::query());
    //         })
    //         // ->query(fn (): Builder => Teacher::query())
    //         ->columns([
    //             Tables\Columns\TextColumn::make('teacher.name')
    //                 ->label('Name Guru')
    //         ]);
    // }
}

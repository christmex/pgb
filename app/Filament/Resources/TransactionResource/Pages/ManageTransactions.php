<?php

namespace App\Filament\Resources\TransactionResource\Pages;

use Filament\Actions;
use App\Filament\Pages\Rate;
use Filament\Resources\Pages\ManageRecords;
use App\Filament\Resources\TransactionResource;

class ManageTransactions extends ManageRecords
{
    protected static string $resource = TransactionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

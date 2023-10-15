<?php

namespace App\Livewire;

use App\Models\Product;
use Filament\Actions\Action;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Set;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Concerns\InteractsWithTable;
use Filament\Tables\Contracts\HasTable;
use Filament\Tables\Table;
use Livewire\Component;

class ListProducts extends Component implements HasForms, HasTable
{
    use InteractsWithForms;
    use InteractsWithTable;

    public function table(Table $table)
    {
        return $table->query(Product::query())
            ->columns([
                TextColumn::make('name'),
            ])
            ->actions([
                EditAction::make()
                    ->form([TextInput::make('name')->required()])
                    ->extraModalFooterActions([
                        \Filament\Tables\Actions\Action::make('generate')
                            ->action(function () {
                                $this->mountedTableActionsData[0]['name'] = 'New generated content';
                            }),
                    ]),
            ]);
    }

    public function render()
    {
        return view('livewire.list-products');
    }
}

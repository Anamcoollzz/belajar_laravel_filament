<?php

namespace App\Filament\Resources\Students\Tables;

use AlperenErsoy\FilamentExport\Actions\FilamentExportBulkAction;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class StudentsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                // Define your table columns here
                // Example:
                TextColumn::make('name')->label('Name')->searchable()->sortable(),
                TextColumn::make('email')->label('Email')->searchable()->sortable(),
                TextColumn::make('phone')->label('Phone')->searchable()->sortable(),
                TextColumn::make('address')->label('Address')->searchable()->sortable(),
                TextColumn::make('wa_number')->label('WhatsApp Number')->searchable()->sortable(),
                TextColumn::make('fb')->label('Facebook')->searchable()->sortable(),
                TextColumn::make('ig')->label('Instagram')->searchable()->sortable(),
                TextColumn::make('twitter')->label('Twitter')->searchable()->sortable(),
                TextColumn::make('linkedin')->label('LinkedIn')->searchable()->sortable(),
                TextColumn::make('tiktok')->label('TikTok')->searchable()->sortable(),
                TextColumn::make('created_at')->label('Created At')->dateTime(),
                TextColumn::make('updated_at')->label('Updated At')->dateTime(),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make(),
                DeleteAction::make(),
            ])
            // ->paginated(false)
            ->paginated([10, 25, 50, 100, 'all'])
            ->defaultPaginationPageOption(10)
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                    FilamentExportBulkAction::make('export')
                        ->label('Export All')
                        ->defaultPageOrientation('landscape')
                        ->defaultFormat('pdf')
                        ->extraViewData(['paperSize' => 'a2', 'title' => 'Student List']),
                ]),
            ]);
    }
}

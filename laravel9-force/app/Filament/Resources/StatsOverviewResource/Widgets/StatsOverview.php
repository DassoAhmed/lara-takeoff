<?php

namespace App\Filament\Resources\StatsOverviewResource\Widgets;

use Filament\Widgets\Widget;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Card;
use Illuminate\Foundation\Auth\User;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Filament\Tables\Actions\Action;




class StatsOverview extends BaseWidget
{
    protected static string $view = 'filament.resources.stats-overview-resource.widgets.stats-overview';

    public $record;

    public function mount($id): void
    {
        $this->record = StatsOverview::findOrFail($id);
        $this->chartData = [
            'labels' => ['Label 1', 'Label 2', 'Label 3'],
            'data' => [12, 19, 3], // Replace with dynamic data
        ];
    }

    protected function getHeaderActions(): array
    {
        return [
            // Add actions if needed
        ];
    }

    protected function getViewData(): array
{
    return [
        'chartData' => $this->chartData,
    ];
}



    protected function getCards(): array
    {
        return [
            Card::make('Total Users', User::count()),
            // Card::make('Total Posts', Post::count()),
            Card::make('Active Users', User::where('active', true)->count()),
        ];
    }

    protected function getStats(): array
    {
        return [
            Stat::make('Unique views', '192.1k'),
            Stat::make('Bounce rate', '21%'),
            Stat::make('Average time on page', '3:12'),
        ];
    }

    public static function table(Table $table): Table
{
    return $table
        ->columns([
            // Your columns
        ])
        ->actions([
            Action::make('view')
                ->label('View')
                ->url(fn ($record) => route('filament.pages.view-record', ['id' => $record->id])),
        ]);
}
}

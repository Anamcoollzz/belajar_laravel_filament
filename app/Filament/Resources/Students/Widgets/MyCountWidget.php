<?php

namespace App\Filament\Resources\Students\Widgets;

use App\Models\Student;
use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class MyCountWidget extends StatsOverviewWidget
{
    protected function getStats(): array
    {
        $totalItems = Student::count(); // Get the count from your model

        return [
            Stat::make('Students', $totalItems) // Display the count
                ->description('All students in your system')
                ->color('success'),
            Stat::make('Students', $totalItems) // Display the count
                ->description('All students in your system')
                ->color('primary'),
            Stat::make('Students', $totalItems) // Display the count
                ->description('All students in your system')
                ->color('danger'),
            Stat::make('Students', $totalItems) // Display the count
                ->description('All students in your system')
                ->color('info'),
            Stat::make('Students', $totalItems) // Display the count
                ->description('All students in your system')
                ->color('gray'),
        ];
    }
}

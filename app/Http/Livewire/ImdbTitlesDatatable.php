<?php

namespace App\Http\Livewire;

use KadeGray\ImdbLaravel\Models\ImdbGenre;
use KadeGray\ImdbLaravel\Models\ImdbTitle;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;
use Mediconesystems\LivewireDatatables\NumberColumn;

class ImdbTitlesDatatable extends LivewireDatatable
{
    public $exportable = false;

    public function builder()
    {
        return ImdbTitle::query();
    }

    public function columns()
    {
        return [

            NumberColumn::name('id')
                ->label('ID'),

            Column::name('tconst')
                ->label('tconst')
                ->searchable()
                ->link('https://www.imdb.com/title/{{tconst}}/')
                ->defaultSort('desc'),

            Column::name('primary_title')
                ->label('Primary Title')
                ->searchable(),

            Column::name('original_title')
                ->label('Original Title'),

            NumberColumn::name('start_year')
                ->label('Year')
                ->filterable(),

            NumberColumn::name('runtime_minutes')
                ->label('Runtime Minutes')
                ->filterable(),

            Column::name('genres')
                ->label('Genres')
                ->filterable(),

            NumberColumn::name('average_rating')
                ->label('Average Rating')
                ->filterable(),

            NumberColumn::name('num_votes')
                ->label('Num Votes')
                ->filterable(),

        ];
    }
}

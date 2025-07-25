<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Validate;
use App\Models\Article;

class Search extends Component
{
    public $searchText= '';
    public $results = [];

    public function updatedSearchText($value) {
        
        $this->reset('results');
        $searchTerm = "%{$value}%";
        $this->results = Article::where('title', 'LIKE', $searchTerm)->get();
    }

    public function clear() {
        $this->reset('results','searchText');
    }

    public function render()
    {
        return view('livewire.search');
    }
}

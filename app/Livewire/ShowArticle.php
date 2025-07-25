<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Article;

class ShowArticle extends Component
{
    public $article;

    public function mount($id) {
        $this->article = Article::findOrFail($id);
    }
    public function render()
    {
        return view('livewire.show-article');
    }
}

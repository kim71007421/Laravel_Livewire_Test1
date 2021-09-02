<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Illuminate\Support\Collection;
use Livewire\Component;

class HomePosts extends Component
{
    public $posts;

    public $pageNumber = 1;

    public $hasMorePages;

    public function mount()
    {
        $this->posts = new Collection();

        $this->loadPosts();
    }

    public function loadPosts()
    {
        $posts = Post::paginate(4, ['*'], 'page', $this->pageNumber);

        $this->pageNumber += 1;

        $this->hasMorePages = $posts->hasMorePages();

        $this->posts->push(...$posts->items());
    }

    public function render()
    {
        //$posts = Post::latest()->paginate(20);

        //return view('livewire.home-posts', ['posts' => $posts]);
        return view('livewire.home-posts');
    }
}

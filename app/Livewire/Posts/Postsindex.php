<?php

namespace App\Livewire\Posts;

use App\Models\Post;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('components.layouts.app', ['subTitle' => 'Posts'])]
class Postsindex extends Component
{
    public function render()
    {
        $posts = Post::with('categories')->paginate(6);

        return view('livewire.posts.postsindex', [
            'subTitle' => 'Posts',
            'posts' => $posts,
        ]);
    }
}

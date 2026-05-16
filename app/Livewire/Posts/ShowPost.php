<?php

namespace App\Livewire\Posts;

use App\Models\Post;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('components.layouts.app', ['subTitle' => 'Posts Detail'])]
class ShowPost extends Component
{
    public Post $post;

    public function mount(string $slug)
    {
        $this->post = Post::with(['user', 'categories'])->whereSlug($slug)->firstOrFail();
    }

    public function render()
    {
        return view('livewire.posts.show-post', [
            'post' => $this->post,
        ]);
    }
}

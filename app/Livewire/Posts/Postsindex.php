<?php

namespace App\Livewire\Posts;

use App\Models\Category;
use App\Models\Post;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Url;
use Livewire\Component;

#[Layout('components.layouts.app', ['subTitle' => 'Posts'])]
class Postsindex extends Component
{
    #[Url(as: 'q', except: '')]
    public string $search = '';

    #[Url(as: 'categories', except: [], history: true)]
    public array $categoryIds = [];

    public bool $showFilter = false;

    public function toggleCategory(int $id): void
    {
        if (in_array($id, $this->categoryIds)) {
            $this->categoryIds = array_values(array_filter($this->categoryIds, fn ($c) => $c !== $id));
        } else {
            $this->categoryIds[] = $id;
        }
    }

    public function clearCategories(): void
    {
        $this->categoryIds = [];
    }

    public function render()
    {
        $posts = Post::with('categories')
            ->where(function ($query) {
                $query->where('title', 'like', $this->search.'%')
                    ->orWhere('content', 'like', $this->search.'%')
                    ->orWhereRelation('categories', 'name', 'like', $this->search.'%')
                    ->orWhereRelation('user', 'name', 'like', $this->search.'%');
            })
            ->when($this->categoryIds, fn ($q) => $q->whereHas('categories', fn ($q) => $q->whereIn('categories.id', $this->categoryIds)))
            ->latest()
            ->paginate(6);

        return view('livewire.posts.postsindex', [
            'subTitle' => 'Posts',
            'posts' => $posts,
            'categories' => Category::get(),
        ]);
    }
}

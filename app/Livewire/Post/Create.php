<?php

namespace App\Livewire\Post;


use App\Models\Post;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;


class Create extends Component
{

    public $title = 'post title...';
    public $content;
    public function save()
    {
        $validatedData = $this->validate([
            'title' => 'required|string|max:255', // Validation rules for title
            'content' => 'required|string' // Validation rules for content
        ]);
        $post = Post::create($validatedData);
//        $post = post::create([
//            'title' => $this->title,
//            'content' => 'Default content...', // Add a default content value here
//        ]);


        return redirect()->to('/posts')
            ->with('status', 'post created!');
    }
    public function render()
    {
        return view('livewire.post.create')->with([
            'author' => Auth::user()->name,
        ]);
    }
}

<?php

namespace App\Http\Controllers;

use App\Repositories\PostRepository;

class PostController extends Controller
{
    protected $post;

    public function __construct(PostRepository $post)
    {
        $this->post = $post;
    }

    public function index()
    {
        return $this->post->index();
    }

    public function store()
    {
        return $this->post->store(request()->all());
    }

    public function show($post)
    {
        return $this->post->find($post);
    }

    public function findBy()
    {
        return $this->post->findBy('slug', request('slug'));
    }

    public function update($post)
    {
        return $this->post->update($post, request()->all());
    }

    public function destroy($post)
    {
        return $this->post->destroy($post);
    }
}

<?php

namespace App\Repositories;


use App\Post;

class PostRepository
{
    protected $post;

    public function __construct(Post $post)
    {
        $this->post = $post;
    }

    public function index()
    {
        return $this->post->all();
    }

    public function find($post)
    {
        return $this->post->findOrFail($post);
    }

    public function findBy($att, $column)
    {
        return $this->post->where($att, $column)->get();
    }

    public function store($request)
    {
        return $this->post->create($request);
    }

    public function update($post, $request)
    {
        $post = $this->post->findOrFail($post);
        $post->update($request->all());
        return $post;
    }

    public function destroy($post)
    {
        return $this->post->findOrFail($post)->delete();
    }
}
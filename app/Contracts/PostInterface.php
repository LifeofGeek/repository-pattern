<?php

namespace App\Contracts;


interface PostInterface
{
    public function index();

    public function find($post);

    public function findBy($att, $column);

    public function store($request);

    public function update($post, $request);

    public function destroy($post);
}
<?php namespace Zbw\Cms\Contracts;

interface CommentsRepositoryInterface
{
    public static function add($input);

    public function update($input);

    public function create($input);
}
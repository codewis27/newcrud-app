<?php

namespace App\Repository;

interface BooksRepository
{
    public function all();
    public function getbyid($id);
    public function create($data);
    public function update($id, $data);
    public function delete($id);
}

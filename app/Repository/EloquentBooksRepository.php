<?php

namespace App\Repository;

use App\Models\Books;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class EloquentBooksRepository implements BooksRepository
{
    protected $model;

    public function __construct(Books $book)
    {
        $this->model = $book;
    }
    public function getbyid($id)
    {
        return $this->model->find($id);
    }

    public function all()
    {
        return $this->model->all();
    }

    public function create($data)
    {
        return $this->model->create($data);
    }
    public function update($id, $data)
    {
        return $this->model->find($id)->update($data);
    }
    public function delete($id)
    {
        return $this->model->find($id)->delete();
    }
}

<?php


namespace App\Repositories;

use App\Models\Confirm;
use App\Repositories\EloquentRepo;

class ConfirmRepo extends EloquentRepo
{
    public function getModel()
    {
        return Confirm::class;
    }
    public function create(array $params)
    {
        return $this->model->insert($params);
    }
    public function getAll()
    {
        return $this->model->get();
    }
    public function deleteById($id)
    {
        return $this->model->where('id', $id)->delete();
    }
}

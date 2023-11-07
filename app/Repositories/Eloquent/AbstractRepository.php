<?php

namespace App\Repositories\Eloquent;

use App\Repositories\Illuminate;

abstract class AbstractRepository
{
    protected $model;

    public function __construct()
    {
        $this->model = $this->resolveModel();
    }

    /**
     * Retrieves all records from the model using pagination.
     *
     * @return Illuminate\Pagination\LengthAwarePaginator
     */
    public function all()
    {
        return $this->model->cursorPaginate(5);
    }

    private function resolveModel(){
        return app($this->model);
    }
}

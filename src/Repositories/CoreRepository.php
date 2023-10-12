<?php

namespace Sandbox\Core\Repositories;

use Sandbox\Base\Interfaces\BaseRepositoryInterface;
use Sandbox\Base\Repositories\BaseRepository;

use Illuminate\Database\Eloquent\Model;


class CoreRepository extends BaseRepository implements BaseRepositoryInterface
{
    protected $model;
    public function __construct(
        Model $model
    ) {
        $this->model = $model;
    }
}

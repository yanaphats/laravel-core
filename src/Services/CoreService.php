<?php

namespace Sandbox\Core\Services;

use Illuminate\Database\Eloquent\Model;

use Sandbox\Core\Repositories\CoreRepository;
use Sandbox\Base\Services\BaseService;

class CoreService extends BaseService
{
    public function __construct(Model $model)
    {
        $this->repository = new CoreRepository($model);
    }
}
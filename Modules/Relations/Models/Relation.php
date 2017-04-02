<?php

namespace Modules\Relations\Models;

use Modules\Core\Models\BaseModel;


class Relation extends BaseModel
{
    protected $table = 'relations';
    protected $fillable = ['id', 'company_key', 'company_name'];
}

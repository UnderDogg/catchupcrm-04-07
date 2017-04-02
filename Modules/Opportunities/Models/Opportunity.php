<?php

namespace Modules\Opportunities\Models;

use Modules\Core\Models\BaseModel;


class Opportunity extends BaseModel
{
    protected $table = 'opportunities';
    protected $fillable = ['id', 'title'];
}

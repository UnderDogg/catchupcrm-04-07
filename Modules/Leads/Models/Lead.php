<?php

namespace Modules\Leads\Models;

use Modules\Core\Models\BaseModel;


class Lead extends BaseModel
{
    protected $table = 'leads';
    protected $fillable = ['id', 'title'];
}

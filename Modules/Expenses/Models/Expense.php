<?php

namespace Modules\Leads\Models;

use Modules\Core\Models\BaseModel;


class Expense extends BaseModel
{
    protected $table = 'expenses';
    protected $fillable = ['id', 'title'];
}

<?php

namespace Modules\Invoices\Models;

use Modules\Core\Models\BaseModel;


class Invoice extends BaseModel
{
    protected $table = 'invoices';
    protected $fillable = ['id', 'title'];
}

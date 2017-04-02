<?php

namespace Modules\Quotations\Models;

use Modules\Core\Models\BaseModel;


class Quotation extends BaseModel
{
    protected $table = 'quotations';
    protected $fillable = ['id', 'title'];
}

<?php

namespace Modules\Tickets\Models;

use Modules\Core\Models\BaseModel;


class Ticket extends BaseModel
{
    protected $table = 'tickets';
    protected $fillable = ['id', 'subject'];
}

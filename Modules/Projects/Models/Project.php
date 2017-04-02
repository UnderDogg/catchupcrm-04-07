<?php

namespace Modules\Projects\Models;

use Modules\Core\Models\BaseModel;


class Project extends BaseModel
{
    protected $table = 'projects';
    protected $fillable = ['id', 'project_number', 'project_name'];
}

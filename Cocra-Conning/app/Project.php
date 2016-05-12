<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
     protected $table = 'projects';
     protected $fillable = array('project_name', 'project_desc', 'project_imgsrc','project_category','project_user');
     
     
}

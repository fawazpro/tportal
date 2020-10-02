<?php
namespace App\Models;

use CodeIgniter\Model;

class Teachers extends Model
{
    protected $table      = 'teachers';
    protected $primaryKey = 'id';

    protected $returnType = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['fname','lname','sex','email','pass','subj1','subj2','bname','accname','accnumb'];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
}

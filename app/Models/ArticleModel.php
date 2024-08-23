<?php
namespace App\Models;

use CodeIgniter\Model;

class ArticleModel extends Model
{
    protected $table      = 'articles';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['title', 'author', 'source', 'pdf'];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
}

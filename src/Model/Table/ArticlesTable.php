<?php

namespace App\Model\Table;

use Cake\ORM\Table;


class ArticlesTable extends Table
{
    public function initialize(array $config)
    {
        $this->addBehavior('Timestamp');
        $this->belongsTo('Categories', [
            'foreignKey' => 'category_id',
        ]);
    }
    public function isOwnedBy($articleId, $userId)
	{
    return $this->exists(['id' => $articleId, 'user_id' => $userId]);
	}
    
}
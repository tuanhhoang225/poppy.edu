<?php

namespace common\models;

use common\models\base;

class Post extends base\Post
{
    public $category_child;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return array_merge(parent::rules(), [
            ['category_child', 'string'],
        ]);
    }
}

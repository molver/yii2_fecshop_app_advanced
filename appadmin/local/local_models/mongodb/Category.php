<?php
namespace fecshop\models\mongodb;

use yii\mongodb\ActiveRecord;

class Category extends ActiveRecord
{
    /**
     * mongodb collection 的名字，相当于mysql的table name
     */
    public static function collectionName()
    {
        return 'category';
    }
    /**
     * mongodb是没有表结构的，因此不能像mysql那样取出来表结构的字段作为model的属性
     * 因此，需要自己定义model的属性，下面的方法就是这个作用
     */
    public function attributes()
    {
        return [
            '_id',
            'parent_id',
            'name',
            'status',
            'url_key',
            'level',
            'thumbnail_image',
            'image',
            'filter_product_attr_selected',
            'filter_product_attr_unselected',
            'description',
            'menu_custom',
            'title',
            'meta_description',
            'meta_keywords',
            'include_in_menu',
            'is_feature',
            'available_sort_by',
            'default_sort_by',
            'theme',
            'active_from',
            'active_to',
            'created_at',
            'updated_at',
            'created_user_id',
            'ori_id',//..此处为增加字段
            //other
            /*
                category filter
                category product


            */
        ];
    }
}
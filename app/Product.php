<?php namespace CodeCommerce;

use Illuminate\Database\Eloquent\Model;

class Product extends Model {

    protected $fillable = [
        'category_id',
        'name',
        'description',
        'price',
        'featured',
        'recommended'
    ];

    public function images()
    {
        return $this->hasMany('CodeCommerce\ProductImage');
    }

    public function category()
    {
        return $this->belongsTo('CodeCommerce\Category');
    }

    public function tags()
    {
        return $this->belongsToMany('CodeCommerce\Tag');
    }

    public function scopeFeatured($query)
    {
        return $query->where('featured','=',1);
    }

    //Tudo comecar com get e terminar Attribute vira atributo
    //Acessar como name_description ou nameDescription
    public function getNameDescriptionAttribute()
    {
        return $this->name . " - " . $this->description;
    }

    public function getTagListAttribute()
    {
        $tags = $this->tags->lists('name');

        return implode(', ', $tags);
    }

}

<?php

namespace App\Models;

use Backpack\CRUD\CrudTrait;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentSluggable\SluggableScopeHelpers;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;

class Article extends Model
{
    use CrudTrait;
    use Sluggable, SluggableScopeHelpers;

    /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = 'articles';
    protected $primaryKey = 'id';
    public $timestamps = true;
    // protected $guarded = ['id'];
    protected $fillable = ['slug', 'title', 'content', 'image', 'status', 'category_id', 'featured', 'date', 'thumb'];
    // protected $hidden = [];
    // protected $dates = [];
    protected $casts = [
        'featured'  => 'boolean',
        'date'      => 'date',
    ];

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'slug_or_title',
            ],
        ];
    }

    /*
    |--------------------------------------------------------------------------
    | FUNCTIONS
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | RELATIONS
    |--------------------------------------------------------------------------
    */

    public function category()
    {
        return $this->belongsTo('App\Models\Category', 'category_id');
    }

    public function tags()
    {
        return $this->belongsToMany('App\Models\Tag', 'article_tag');
    }

    public function comments()
    {
        return $this->hasMany('App\Models\Comment', 'article_id');
    }

    /*
    |--------------------------------------------------------------------------
    | SCOPES
    |--------------------------------------------------------------------------
    */

    public function scopePublished($query)
    {
        return $query->where('status', 'PUBLISHED')
                    ->where('date', '<=', date('Y-m-d'))
                    ->orderBy('date', 'DESC');
    }

    /*
    |--------------------------------------------------------------------------
    | ACCESORS
    |--------------------------------------------------------------------------
    */

    // The slug is created automatically from the "title" field if no slug exists.
    public function getSlugOrTitleAttribute()
    {
        if ($this->slug != '') {
            return $this->slug;
        }

        return $this->title;
    }

    /*
    |--------------------------------------------------------------------------
    | MUTATORS
    |--------------------------------------------------------------------------
    */

    public function setThumbAttribute($value)
    {

    $attribute_name = 'thumb';
    $disk = 'uploads';
    $destination_path = 'images';
  
    if (starts_with($value, 'data:image')) {
        // 0. Get image extension
        preg_match("/^data:image\/(.*);base64/i", $value, $match);
        $extension = $match[1];
        // 1. Make the image
        $image = Image::make($value);
        if (!is_null($image)) {
            // 2. Generate a filename.
            $filename = md5($value.time()).'.'.$extension;
            try {
                // 3. Store the image on disk.
                Storage::disk($disk)->put($destination_path.'/'.$filename, $image->stream());
                // 4. Save the path to the database
                $this->attributes[$attribute_name] = $disk .'/'. $destination_path.'/'.$filename;
            } catch (\InvalidArgumentException $argumentException) {
                // 3. failed to save file
                Alert::error($argumentException->getMessage())->flash();
                // 4. set as null when fail to save the image to disk
                $this->attributes[$attribute_name] = null;
            }
        }
    } else {
        $this->uploadFileToDisk($value, $attribute_name, $disk, $destination_path);
    }
    }
}

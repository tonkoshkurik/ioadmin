<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\CrudTrait;
use Intervention\Image\Facades\Image;
use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentSluggable\SluggableScopeHelpers;

class Product extends Model
{
    use CrudTrait;
  use Sluggable, SluggableScopeHelpers;


    /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = 'products';
    // protected $primaryKey = 'id';
    // public $timestamps = false;
    // protected $guarded = ['id'];

    protected $fillable = [
      'name',
      'category_id',
      'base_price',
      'discount_price',
      'sizes',
      'description',
      'slug',
      'label',
      'photos',
      'extras'
    ];
  protected $fakeColumns = [
    'extras'
  ];
  protected $casts = [
    'photos' => 'array'
  ];
    // protected $hidden = [];
    // protected $dates = [];


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
      return $this->belongsTo('App\Models\ProductCategory');
    }

    /*
    |--------------------------------------------------------------------------
    | SCOPES
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | ACCESORS
    |--------------------------------------------------------------------------
    */
    public function getSlugOrTitleAttribute()
    {
      if ($this->slug != '') {
        return $this->slug;
      }

      return $this->name;
    }
    /*
    |--------------------------------------------------------------------------
    | MUTATORS
    |--------------------------------------------------------------------------
    */
  public function setPhotosAttribute($value)
  {
    $attribute_name = "photos";
    $disk = "uploads";
    $destination_path = "products";

    $this->uploadMultipleFilesToDisk($value, $attribute_name, $disk, $destination_path);
  }

  private function uploadMultipleFilesToDisk($value, $attribute_name, $disk, $destination_path)
{
  $request = \Request::instance();
  $attribute_value = (array) $this->{$attribute_name};
  $files_to_clear = $request->get('clear_'.$attribute_name);

  // if a file has been marked for removal,
  // delete it from the disk and from the db
  if ($files_to_clear) {
    $attribute_value = (array) $this->{$attribute_name};
    foreach ($files_to_clear as $key => $filename) {
      \Storage::disk($disk)->delete($filename);
      $attribute_value = array_where($attribute_value, function ($value, $key) use ($filename) {
        return $value != $filename;
      });
    }
  }

  // if a new file is uploaded, store it on disk and its filename in the database
  if ($request->hasFile($attribute_name)) {
    foreach ($request->file($attribute_name) as $file) {
      if ($file->isValid()) {
        // 1. Generate a new file name
        $new_file_name = md5($file->getClientOriginalName().time()).'.'.$file->getClientOriginalExtension();

        // 2. Move the new file to the correct path
        $file_path = $file->storeAs($destination_path, $new_file_name, $disk);

        $file = pathinfo($file_path);

//        dd(public_path('uploads').'/'. $destination_path . '/' . $file['basename']);
        $image = Image::make( public_path('uploads') .'/'. $destination_path . '/' . $file['basename'] );
        $thumb = pathinfo($file_path);
        $thumb = public_path('uploads') . '/' . $destination_path . '/' . $thumb['filename'] . '_thumb.' . $thumb['extension'];
        $image->fit(126, 126)->save( $thumb );

        // 3. Add the public path to the database
        $attribute_value[] = $file_path;
      }
    }
  }

  $this->attributes[$attribute_name] = json_encode($attribute_value);
}
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $guarded = [];

    /**
     * Convert the model instance to an array.
     * This will rename 'id' to '_id' for all API responses.
     */
    public function toArray()
    {
        $array = parent::toArray();
        
        if (isset($array['id'])) {
            $array['_id'] = $array['id'];
            unset($array['id']);
        }

        return $array;
    }
}

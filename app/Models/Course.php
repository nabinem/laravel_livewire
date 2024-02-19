<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Course extends Model
{
    use HasFactory, Searchable;

    protected $guarded = ['id', 'user_id'];

    public function shouldBeSearchable(): bool
    {
        return $this->status == 'live';
    }

    public function toSearchableArray(): array
    {
        $array = $this->toArray();
 
        $array['pinned'] = $this->pinned ?? 0;
 
        return $array;
    }

}

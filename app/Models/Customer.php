<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Laravel\Scout\Searchable;

class Customer extends Model
{
    use HasFactory, Searchable;

    protected $table = 'customers';

    protected $primaryKey = 'id';

    protected $guarded = [];

    /**
     * Get all of the sales for the customer
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function sales(): HasMany
    {
        return $this->hasMany(Sales::class, 'cust_id', 'id');
    }

    public function toSearchableArray()
    {
        return [
            // 'kode' => $this->kode,
            'name' => $this->name,
            // 'telp' => $this->telp,
            
        ];
    }
}


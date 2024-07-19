<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Barang extends Model
{
    use HasFactory;

    protected $table = 'barangs';

    protected $primaryKey = 'id';

    protected $guarded = [];

    /**
     * Get all of the sales details for the barang
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function salesDets(): HasMany
    {
        return $this->hasMany(Sales_det::class, 'barang_id', 'id');
    }
}


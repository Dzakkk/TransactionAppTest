<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Sales extends Model
{
    use HasFactory;

    protected $table = 'sales';

    protected $primaryKey = 'id';

    protected $guarded = [];

    /**
     * Get the customer that owns the sale
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function customer(): BelongsTo
    {
        return $this->belongsTo(Customer::class, 'cust_id', 'id');
    }

    /**
     * Get all of the sales details for the sale
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function salesDets(): HasMany
    {
        return $this->hasMany(Sales_det::class, 'transaksi', 'kode');
    }
}


<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Laravel\Scout\Searchable;

class Sales extends Model
{
    use HasFactory;

    use Searchable;

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

    public function toSearchableArray()
    {
        return [
            'kode' => $this->kode,
            'tgl' => $this->tgl,
            'cust_id' => $this->cust_id,
            'subtotal' => $this->subtotal,
            'diskon' => $this->diskon,
            'ongkir' => $this->ongkir,
            'total_bayar' => $this->total_bayar,
        ];
    }
}


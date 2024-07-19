<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Sales_det extends Model
{
    use HasFactory;

    protected $table = 'sales_dets';

    protected $primaryKey = 'id';

    protected $guarded = [];

    /**
     * Get the sale that owns the sales detail
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function sales1(): BelongsTo
    {
        return $this->belongsTo(Sales::class, 'kode', 'transaksi');
    }

    /**
     * Get the barang that owns the sales detail
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function barang(): BelongsTo
    {
        return $this->belongsTo(Barang::class, 'barang_id', 'id');
    }
}

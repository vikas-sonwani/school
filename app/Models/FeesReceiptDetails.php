<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Master\FeesCategory;

class FeesReceiptDetails extends Model
{
    use HasFactory;
    const CREATED_AT = 'created_at';
	const UPDATED_AT = 'updated_at';
    
    protected $table = 'fees_receipt_details';

    protected $fillable = [];
    protected $guarded = ['id']; 

    public function fees_category()
    {
        return $this->belongsTo(FeesCategory::class, 'fees_category_id', 'id');
    }
}

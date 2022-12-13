<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Master\AcademicYear;
use App\Models\Master\DurationType;
use App\Models\Master\Level;
use App\Models\Master\Course;
use App\Models\Master\FeesCategory;
use App\Models\Student\Student;

class FeesReceiptPending extends Model
{
    use HasFactory;
    const CREATED_AT = 'created_at';
    
    protected $table = 'fees_receipt_pending';

    protected $fillable = [];
    protected $guarded = ['id'];
       

}

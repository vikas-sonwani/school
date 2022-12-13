<?php

namespace App\Models\Master;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MemberNotification extends Model
{
    use HasFactory;

    protected $table = 'member_notification';
    const CREATED_AT = 'created_at';
	const UPDATED_AT = 'updated_at';
 
    protected $fillable = ['msg','msg_to', 'msg_from', 'seen'];
    protected $guarded = ['id'];
    


}

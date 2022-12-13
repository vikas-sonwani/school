<?php

namespace App\Models\Master;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MemberNotificationData extends Model
{
    use HasFactory;

    protected $table = 'member_notification_data';
    const CREATED_AT = 'created_at';
	const UPDATED_AT = 'updated_at';
 
    protected $fillable = ['member_notification_id','msg_to', 'msg_from', 'seen'];
    protected $guarded = ['id'];
    

}
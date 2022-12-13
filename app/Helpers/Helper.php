<?php // Code within app\Helpers\Helper.php

namespace App\Helpers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Models\Master\MemberNotification;
use App\Models\Master\MemberNotificationData;

class Helper
{
    public static function shout(string $string)
    {
        return strtoupper($string);
    }

	public static function encodedmsg2sendsms($mymsg){
	 $msglength=strlen($mymsg);
	 $msgtemp='';
		 for($i=0;$i<=$msglength;$i++){
		 $submsg=substr($mymsg,$i,1);
			if($submsg==" "){
			 $msgtemp=$msgtemp."%20";
			}else if($submsg=="<"){
			 $msgtemp=$msgtemp."%3C";
			}else if($submsg==">"){
			 $msgtemp=$msgtemp."%3E";
			}else if($submsg=="#"){
			 $msgtemp=$msgtemp."%23";
			}else if($submsg=='"'){
			 $msgtemp=$msgtemp."%22";
			}else if($submsg=="*"){
			 $msgtemp=$msgtemp."%2A";
			}else if($submsg=="%"){
			 $msgtemp=$msgtemp."%25";
			}else if($submsg=="+"){
			 $msgtemp=$msgtemp."%2B";
			}else if($submsg=="\r"){
			 $msgtemp=$msgtemp."%0A";
			}else if($submsg=="\n"){
			 $msgtemp=$msgtemp."%0D";
			}else if($submsg=="$"){
			 $msgtemp=$msgtemp."%24";
			}else if($submsg=="&"){
			 $msgtemp=$msgtemp."%26";
			}else if($submsg=="#13#10"){
			 $msgtemp=$msgtemp."%0D%0A";
			}else{
				$msgtemp=$msgtemp.$submsg;
			}
		}
	 return $msgtemp;
	}


	public static function sendSMS($mobile, $msg, $countryCode){
		define('ID', '9125020694');
		define('PWD', '9125020694');
		define('SENDERID', 'YPLIND');
		define('MSGTYPE', '');
		$sms = file_get_contents("http://www.universalsmsadvertising.com/universalsmsapi.php?user_name=".ID."&user_password=".PWD."&mobile=".$countryCode.$mobile."&sender_id=".SENDERID."&type=".MSGTYPE."&text=$msg");

		return true;
	}

	//Calculate Age
	public static function calculateStudentAge($dob){
		$diff = date_diff(date_create($dob), date_create(date("Y-m-d")));
		return $diff->format('%y');
	}

	public static function savetospace($originalPath, $realPath, $id)
	{
        $name = 'ypl/'.$id.'/'.$originalPath;
        $store = Storage::disk('spaces')->put($name, file_get_contents($realPath), 'public');
        $url = Storage::disk('spaces')->url($name);
        $cdn_url = str_replace('digitaloceanspaces', 'cdn.digitaloceanspaces', $url);
        return $cdn_url;
	}

	public static function latestNotifications($id)
	{
		$member_notification_data = MemberNotificationData::select("member_notification.id","member_notification.msg", "member_notification.created_at", "member_notification_data.seen")->leftJoin("member_notification", "member_notification.id", "=", "member_notification_data.member_notification_id")->where(['member_notification_data.msg_to' => $id, 'member_notification_data.seen'=> 0])->limit(5)->orderBy('member_notification.id', 'DESC')->get()->toArray();
		return $member_notification_data;
	}

	public static function getNotiCount($id)
	{
		$member_notification = MemberNotificationData::select("member_notification.id","member_notification.msg", "member_notification.created_at")->leftJoin("member_notification", "member_notification.id", "=", "member_notification_data.member_notification_id")->where(['member_notification_data.msg_to' => $id, 'member_notification_data.seen' => 0])->get()->toArray();
		return $member_notification;
	}

}
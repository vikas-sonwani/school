<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Master\Round;
use App\Models\Master\League;
use App\Models\Registration;
use App\Models\Transaction;
use App\Models\TransactionActivity;
use App\Models\TransactionActivityYoga;
use App\Models\Master\AgeGroup;
use App\Models\Master\Aasanmapping;
use App\Models\Master\PanelReferee;
use App\Rules\MatchOldPassword;
use App\Models\User;
use App\Models\RefereeJudgement;
use App\Models\Candidate\CandidateLeague;
use App\Models\Candidate\CandidateLeagueRound;
use App\Models\Candidate\CandidateLeagueRoundYoga;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use App\Models\Master\MemberNotification;
use App\Models\Master\MemberNotificationData;

use App\Models\State;
use App\Models\District;
use DataTables,DB;
use Helper;

class HomeController extends Controller

{

	public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(Request $request){
		return view('admin.admin_home');
    }

    public function refereeJudementStats($referee_id){
    	$total_judge = 0;
		$total_judge_amount = 0;
		$total_pending_judgement = 0;
    	$panel_total = 0;
		$total_judge_arr = PanelReferee::with('panel')->select('judgement_count','panel_id')->where('referee_id',$referee_id)->whereNotNull('judgement_count')->where('is_referee_paid',0)->get();
		foreach ($total_judge_arr as $key => $value) {
						$total_judge = $total_judge + $value->judgement_count;
						$panel_total = $panel_total + $value->panel->total_player;
		}
		$total_pending_judgement = ($panel_total>0)?$panel_total-$total_judge:0;
		$total_judge_amount = $total_judge*5;
		return array($total_judge,$total_judge_amount,$total_pending_judgement);

    }

    public function refereePendingJudgemenList(){
    	$user_email = Auth::user()->email;
            $referee = Registration::where('email',$user_email)->get()->first()->id;

            $panel_arr = array();
            $panel_referee = PanelReferee::where('referee_id',$referee)->get();
            foreach($panel_referee as $p){
                $panel_arr[] = $p->panel_id;
            }
            $candidate_leage_round = CandidateLeagueRound::with('candidate','activity','round','age_group')->whereIn('panel_id',$panel_arr)->where('round_status','>=','2')->get();
 
            $data_arr = array();
            foreach($candidate_leage_round as $value){
                if(isset($value->candidate)){
                    $player = Registration::select('id','name','registration_no')->find($value->candidate->candidate_id);            
                    $value->player = $player;
                }
                $total_yoga = CandidateLeagueRoundYoga::where('league_round_id',$value->id)->get();
                 $referee_judgement = RefereeJudgement::select('referee_judgement.candidate_league_round_id','referee_judgement.candidate_league_round_yoga_id','panel_referee.referee_id','referee_judgement.panel_referee_id')
                                                    ->join('panel_referee','panel_referee.id','=','referee_judgement.panel_referee_id')
                                                    ->join('panel','panel.id','=','panel_referee.panel_id')
                                                    ->where('panel_referee.referee_id',$referee)
                                                    ->where('referee_judgement.candidate_league_round_id',$value->id)
                                                    ->groupBy('referee_judgement.candidate_league_round_id')->groupBy('referee_judgement.candidate_league_round_yoga_id')->get()->toArray();
               
               
               if(count($referee_judgement)!=count($total_yoga)) {
                    $value->judgement_status = 0;
                    $data_arr[] = $value;
                    
               }
               if (count($data_arr) == 5) {
					break;
				}

            }
          return $data_arr;
    }
    public function refereeCompleteJudgemenList(){
    	$user_email = Auth::user()->email;
            $referee = Registration::where('email',$user_email)->get()->first()->id;

            $panel_arr = array();
            $panel_referee = PanelReferee::where('referee_id',$referee)->get();
            foreach($panel_referee as $p){
                $panel_arr[] = $p->panel_id;
            }
        
            $candidate_league_round = CandidateLeagueRound::with('candidate','activity','round','age_group')->whereIn('panel_id',$panel_arr)->where('round_status','>=','2')->limit(5)->orderBy('id', 'DESC')->get();
            //dd($candidate_league_round);
            $data_arr = array();
            foreach($candidate_league_round as $value){
                if(isset($value->candidate)){
                    $player = Registration::select('id','name','registration_no')->find($value->candidate->candidate_id);            
                    $value->player = $player;
                }
                
                $total_yoga = CandidateLeagueRoundYoga::select('id')->where('league_round_id',$value->id)->get();
                $referee_judgement = RefereeJudgement::select('referee_judgement.candidate_league_round_id','referee_judgement.candidate_league_round_yoga_id','panel_referee.referee_id','referee_judgement.panel_referee_id')
                                                    ->join('panel_referee','panel_referee.id','=','referee_judgement.panel_referee_id')
                                                    ->join('panel','panel.id','=','panel_referee.panel_id')
                                                    ->where('panel_referee.referee_id',$referee)
                                                    ->where('referee_judgement.candidate_league_round_id',$value->id)
                                                    ->groupBy('referee_judgement.candidate_league_round_id')->groupBy('referee_judgement.candidate_league_round_yoga_id')->get()->toArray();
                
               if(count($referee_judgement)==count($total_yoga)) {
                    $value->judgement_status = 1;
                    $data_arr[] = $value;
               }
               if (count($data_arr) == 5) {
					    break;
				}

            }
          return $data_arr;
    }
	public function profileComplete(Request $request){

		$request->validate([
            'father_name'       => ['required', 'string'],
            'mother_name'       => 'required',
            'whatsapp'          => 'required',
            'bloodgroup'        => 'required',
            'photo'             => 'required|max:300',
            'signature'         => 'required|max:300',
            'idproof'           => 'required|max:300',
			'idproof_name'		=> 'required',
			'dobproof_name'		=> 'required',
			'dobproof' 			=> 'required|max:300',
            'address'           => 'required',
			'hq'				=> 'required',
			'yhq'				=> 'required',
			'aoq'				=> 'required',
			'yp'				=> 'required',
			'os'				=> 'required',			
        ]);


		if($request->yhq==='yes'){
			$request->validate([
				'yoga_higher_qualification_name' => 'required',
				'higher_qualification' => 'required|max:300',
			]);
		}
		if($request->hq==='yes'){
			$request->validate([
				'higher_qualification_name' => 'required',
				'higher_qualification' => 'required|max:300',
			]);
		}

		if($request->aoq==='yes'){
			$request->validate([
				'other_qualification_name' => 'required',
				'other_qualification' => 'required|max:300',
			]);
		}
		if($request->yp==='yes'){
			$request->validate([
				// 'achivement_player_name' => 'required',
				'achivement_player' => 'required|max:300',
			]);
		}
		if($request->os==='yes'){
			$request->validate([
				'other_sports_name' => 'required',
				'other_sport' => 'required|max:300',
			]);
		}


		if($request->ecor==='yes'){
			$request->validate([
				'experience_certificate_name' => 'required',
				'experience_certificate' => 'required|max:300',
			]);
		}

		if($request->coachinyoga==='yes'){
			$request->validate([
				'coach_certificate_name' => 'required',
				'coach_certificate' => 'required|max:300',
			]);
		}
		
		//dd($request->all());
		DB::beginTransaction();
		try{
			
			$registration = Registration::whereemail(auth()->user()->email)->get()->first();
			if ($registration->country == 102) {
				$registration->state                = $request->state;
				$registration->district_city        = $request->district_city;
			}else{
				$registration->city        			= $request->city;
			}

			if ($registration->candidate_type_id == 2 || $registration->candidate_type_id == 4 || $registration->candidate_type_id == 15) {
				$registration->intrest_in 		= $request->intrest_in;
			}
			$registration->whatsapp             = $request->whatsapp;
			$registration->mother_name          = $request->mother_name;
			$registration->father_name          = $request->father_name;
			$registration->bloodgroup           = $request->bloodgroup;
			$registration->house_no             = $request->house_no;
			$registration->address              = $request->address;
			$registration->pincode              = $request->pincode;
			$registration->identity_id 			= $request->idproof_name;
			$registration->dobproof_id 			= $request->dobproof_name;

			$registration->yogasana_levels 				= $request->yogasana_levels;
			$registration->other_levels 				= $request->other_levels;
			$registration->computer_knowledge 			= $request->computer_knowledge;
			$registration->marital_status 				= $request->marital_status;	

			$registration->save();

			$photo = $request->photo;
			$signature = $request->signature;
			$idproof = $request->idproof;
			$dobproof = $request->dobproof;
			$higher_qualification = $request->higher_qualification;
			$higher_qualification_name = $request->higher_qualification_name;
			$yoga_higher_qualification = $request->yoga_higher_qualification;
			$yoga_higher_qualification_name = $request->yoga_higher_qualification_name;
			$other_qualification = $request->other_qualification;
			$other_qualification_name = $request->other_qualification_name;
			$achivement_player = $request->achivement_player;
			// $acheivement_qualification_name = $request->achivement_player_name;
			$other_sport = $request->other_sport;
			$other_sports_name = $request->other_sports_name;

			$experience_certificate_name  = '';
			if ($registration->candidate_type_id == 2 || $registration->candidate_type_id == 15) {
				$experience_certificate_name 	= $request->experience_certificate_name;
				$experience_certificate 		= $request->experience_certificate;
			}

			$coach_certificate_name = '';
			if ($registration->candidate_type_id == 4 || $registration->candidate_type_id == 15) {
				$coach_certificate_name 	= $request->coach_certificate_name;
				$coach_certificate 		= $request->coach_certificate;
			}

			$destinationPath = 'candidate/'.$registration->id;
			if(!file_exists($destinationPath)){
				\File::makeDirectory($destinationPath, 0755, true);
			}

			if($request->has('photo')){
				$photo_url = Helper::savetospace($photo->getClientOriginalName(), $photo->getRealPath(),$registration->id);
			}
		
			if($request->has('signature')){
				$signature_url = Helper::savetospace($signature->getClientOriginalName(), $signature->getRealPath(),$registration->id);
			}
			if($request->has('idproof')){
				$idproof_url = Helper::savetospace($idproof->getClientOriginalName(), $idproof->getRealPath(),$registration->id);
			}
			if($request->has('dobproof')){
				$dobproof_url = Helper::savetospace($dobproof->getClientOriginalName(), $dobproof->getRealPath(),$registration->id);
			}

			$hq = '';
			if($request->has('higher_qualification')){
				$hq = Helper::savetospace($higher_qualification->getClientOriginalName(), $higher_qualification->getRealPath(),$registration->id);
			}

			$yhq = '';
			if($request->has('yoga_higher_qualification')){
				$yhq = Helper::savetospace($yoga_higher_qualification->getClientOriginalName(), $yoga_higher_qualification->getRealPath(),$registration->id);
			}

			$oq = '';
			if($request->has('other_qualification')){
				$oq = Helper::savetospace($other_qualification->getClientOriginalName(), $other_qualification->getRealPath(),$registration->id);
			}

			$ap = '';
			if($request->has('achivement_player')){
				$ap = Helper::savetospace($achivement_player->getClientOriginalName(), $achivement_player->getRealPath(),$registration->id);
			}

			$os = '';
			if($request->has('other_sport')){
				$os = Helper::savetospace($other_sport->getClientOriginalName(), $other_sport->getRealPath(),$registration->id);
			}

			$ecor = '';
			if ($registration->candidate_type_id == 2 || $registration->candidate_type_id == 15) {
				if($request->has('experience_certificate')){
					$ecor = Helper::savetospace($experience_certificate->getClientOriginalName(), $experience_certificate->getRealPath(),$registration->id);
				}
			}

			$coachinyoga = '';
			if ($registration->candidate_type_id == 4 || $registration->candidate_type_id == 15) {
				if($request->has('coach_certificate')){
					$ecor = Helper::savetospace($coach_certificate->getClientOriginalName(), $coach_certificate->getRealPath(),$registration->id);
				}
			}


			$registerData = Registration::whereid($registration->id);
			$registerData->update([
					'photo'                         => $photo_url,
					'signature'                     => $signature_url,
					'dob_doc'                       => $dobproof_url,
					'indenty_doc'                   => $idproof_url,
					'higher_education'              => $hq,
					'higher_education_name'         => $higher_qualification_name,
					'yoga_certificate'              => $yhq,
					'yoga_certificate_name'         => $yoga_higher_qualification_name,
					'other_qualification'           => $oq,
					'other_qualification_name'      => $other_qualification_name,
					'acheivement_qualification'     => $ap,
					// 'acheivement_qualification_name' => $acheivement_qualification_name,
					'other_sports'                   => $os,
					'other_sports_name'              => $other_sports_name,
					'experience_certificate_name'    => $experience_certificate_name,
					'experience_certificate'         => $ecor,
					'coach_certificate_name'    	 => $coach_certificate_name,
					'coach_certificate'         	 => $coachinyoga,
					'is_profile_complete'			 =>1
			]);

			DB::commit();
			return redirect('/admin/dashboard')->with('success', 'Profile Updated Successfully.');
		}catch(\Exception $e){
			$bug = $e->getMessage();

			DB::rollback();
			//dd($bug);

			return redirect()->back()->with('error', $bug);
		}
	
	}
    

    public function editProfileComplete(Request $request)
    {
 		

    	$registration = Registration::whereemail(auth()->user()->email)->get()->first();

    	DB::beginTransaction();
		try{

	    	$higher_qualification = $request->higher_qualification;
	    	$yoga_higher_qualification = $request->yoga_higher_qualification;
	    	$other_qualification = $request->other_qualification;
	    	$achivement_player = $request->achivement_player;
	    	$other_sport = $request->other_sport;

	    	$experience_certificate_name  = '';
			if ($registration->candidate_type_id == 2 || $registration->candidate_type_id == 15) {
				$experience_certificate_name 	= $request->experience_certificate_name;
				$experience_certificate 		= $request->experience_certificate;
			}

			$coach_certificate_name = '';
			if ($registration->candidate_type_id == 4 || $registration->candidate_type_id == 15) {
				$coach_certificate_name 	= $request->coach_certificate_name;
				$coach_certificate 		= $request->coach_certificate;
			}



			$destinationPath = 'candidate/'.$registration->id;
			if(!file_exists($destinationPath)){
				\File::makeDirectory($destinationPath, 0755, true);
			}


			$hq = '';
			if($request->has('higher_qualification')){
				$request->validate([
					'higher_qualification' => 'required|max:300',
				]);
				$hq = Helper::savetospace($higher_qualification->getClientOriginalName(), $higher_qualification->getRealPath(),$registration->id);

			}

			$yhq = '';
			if($request->has('yoga_higher_qualification')){
				$request->validate([
					'yoga_higher_qualification' => 'required|max:300',
				]);
				$yhq = Helper::savetospace($yoga_higher_qualification->getClientOriginalName(), $yoga_higher_qualification->getRealPath(),$registration->id);

			}

			$oq = '';
			if($request->has('other_qualification')){
				$request->validate([
					'other_qualification' => 'required|max:300',
				]);
				$oq = Helper::savetospace($other_qualification->getClientOriginalName(), $other_qualification->getRealPath(),$registration->id);

			}

			$ap = '';
			if($request->has('achivement_player')){
				$request->validate([
					'achivement_player' => 'required|max:300',
				]);
				$ap = Helper::savetospace($achivement_player->getClientOriginalName(), $achivement_player->getRealPath(),$registration->id);

			}

			$os = '';
			if($request->has('other_sport')){
				$request->validate([
					'other_sport' => 'required|max:300',
				]);
				$os = Helper::savetospace($other_sport->getClientOriginalName(), $other_sport->getRealPath(),$registration->id);

			}

			$ecor = '';
			if ($registration->candidate_type_id == 2 || $registration->candidate_type_id == 15) {
				if($request->has('experience_certificate')){
					$request->validate([
						'experience_certificate' => 'required|max:300',
					]);
					$ecor = Helper::savetospace($experience_certificate->getClientOriginalName(), $experience_certificate->getRealPath(),$registration->id);

				}
			}

			$coachinyoga = '';
			if ($registration->candidate_type_id == 4 || $registration->candidate_type_id == 15) {
				if($request->has('coach_certificate')){
					$request->validate([
						'coach_certificate' => 'required|max:300',
					]);
					$ecor = Helper::savetospace($coach_certificate->getClientOriginalName(), $coach_certificate->getRealPath(),$registration->id);
					
				}
			}


		

			$registerData = Registration::whereid($registration->id)->first();
			if ($hq != '') {
				$registerData->higher_education 			= $hq;	
			}
			$registerData->higher_education_name 		= $request->higher_qualification_name;
			
			if ($yhq != '') {
				$registerData->yoga_certificate = $yhq;
			}
			$registerData->yoga_certificate_name 		= $request->yoga_higher_qualification_name;
			
			if ($oq != '') {
				$registerData->other_qualification 			= $oq;
			}
			$registerData->other_qualification_name 	= $request->other_qualification_name;
			
			if ($ap != '') {
				$registerData->acheivement_qualification 	= $ap;	
			}
			
			if ($os != '') {
				$registerData->other_sports 				= $os;
			}
			
			$registerData->other_sports_name 			= $request->other_sports_name;
			$registerData->experience_certificate_name 	= $experience_certificate_name;
			if ($ecor != '') {
				$registerData->experience_certificate 		= $ecor;	
			}
			
			$registerData->coach_certificate_name 		= $coach_certificate_name;
			if ($coachinyoga != '') {
				$registerData->coach_certificate 			= $coachinyoga;
			}
			
			$registerData->computer_knowledge 			= $request->computer_knowledge;
			$registerData->yogasana_levels 				= $request->yogasana_levels;
			$registerData->other_levels 				= $request->other_levels;
			$registerData->save();
		
			DB::commit();
			return redirect('/admin/dashboard')->with('success', 'Profile Updated Successfully.');
		}catch(\Exception $e){
			$bug = $e->getMessage();
			DB::rollback();
			return redirect()->back()->with('error', $bug);
		}

    }

    public function updatePassword(Request $request)
    {
    	$request->validate([
            'current_password' => ['required', new MatchOldPassword],
            'new_password' => ['required'],
            'confirm_password' => ['same:new_password'],
        ]);
        try{
        	$user = Auth::user();
	        $user->password = Hash::make($request->new_password);
	        $user->save();
			return redirect()->back()->with('success', 'Password updated successfully.');
        }catch(\Exception $e){
			$bug = $e->getMessage();

			DB::rollback();
			

			return redirect()->back()->with('error', $bug);
		}
       
    }

    public function forgotPasswordProcess(Request $request)
    {
    	dd($request->all());
    }

    public function checkout(Request $request)
    {
    	$request->validate([
            "round_id" => "required",
            "activity" => "required"
        ]);
    	$amount = 0;
    	$league  = League::orderBy('id','desc')->get()->first()->id;
    	
    	$candidate = Registration::select('id')->whereemail(auth()->user()->email)->first();
    	
    	$candidateLeague = CandidateLeague::with('league_round')->select('id')->where('candidate_id',$candidate->id)->where('league_id',$league)->get()->first();
    	$already_join_activity_arr = array();
    	if($candidateLeague!=null){
    		$league_round = $candidateLeague->league_round;
    		if(count($league_round)>0){
    			foreach ($league_round as $key => $value) {
	    			if($request->round_id==$value->round_id){
	    				$already_join_activity_arr[] = $value->activity_id;	
	    			}
	    		}
    		}
    		foreach ($request->activity as  $act) {
    			if(!in_array($act, $already_join_activity_arr)){
    				$activity[] = $act;
    			}
    		}
    	}else{
			$activity = $request->activity;
    	}
    	$name = $candidate->first_name.' '.$candidate->last_name;
    	$email = $candidate->email;
    	$mobile = $candidate->mobile;

    	$round = Round::whereid($request->round_id)->first();
    	$round_amount = $round->round_amount;
    	
    	if (count($activity) == 2) {
    		$amount = $round_amount;
    	}else{
    		$amount = $round_amount/2;
    	}
    	return view('admin.checkout', compact('amount', 'round', 'activity', 'name', 'email', 'mobile'));
    }


    public function getActivityCheckbox($age)
    {
    	$ageGroupActivity = AgeGroup::select("activity.id","activity.activity_title", "age_group.id as age_group_id")->leftJoin("activity", "activity.id", "=", "age_group.activity_id")->where('max_age', '>=',$age)->where('min_age', '<=',$age)->get();
    	foreach ($ageGroupActivity as $key => $value) {
    		$ageGroupActivity = Aasanmapping::where(['age_group_id'=> $value->age_group_id, 'activity_id'=> $value->activity_id])->toArray();
    	}

    }

    public function getMemberNotification(Request $request)
    {
    	$user_id = Auth::user()->id;
    	if($request->ajax()){
    		$mdata = MemberNotificationData::wheremsg_to($user_id);
			$mdata->update(['seen' => 1]);
    		$member_notification = MemberNotificationData::select("member_notification.id","member_notification.msg", "member_notification.created_at")->leftJoin("member_notification", "member_notification.id", "=", "member_notification_data.member_notification_id")->where(['member_notification_data.msg_to' => $user_id, 'member_notification.is_active' => 1])->get();
            return Datatables::of($member_notification)
            ->make(true);
        }
    	return view('admin.all_notification');
    }


}

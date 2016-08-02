<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Socialite;
use Mail;
use DB;

class ForumController extends Controller
{
	// це читайте коментари.
	public function index(){
		$comment=DB::table('forum_comment')->get();
		return view("layouts.main", ["comment"=>$comment]);
	}

	// Зберегіти в БД, Відправили всіх користувачів
	public function putCommnet(Request $requeste){
		$this->validate($requeste, [
		    'name' => 'required|max:255',
		    'email' => 'required|email',
		    'comment' => 'required',
		]);

		$name=$requeste->input('name');
		$email=$requeste->input('email');
		$avatar=$requeste->input('avatar');
		$comment=$requeste->input('comment');
		$today = date("Y-m-d H:i:s"); 

		$comment=str_replace("\n", "<br/>", $comment);
		// Автомат містити посилання
		if(strpos($comment, 'http')!==false){
			$arr=explode(' ',$comment);
			foreach ($arr as $value) {
				if(strpos($value, 'http')!==false){
					$link=substr($value, 0, 30);
					$comment=str_replace($value, '<a href="{$value}">'.$link.'...</a>', $comment);
				}
			}
		}
		// dd($arr);
		// Зберегіти в БД
		DB::table('forum_comment')->insert([
			"name"=>$name,
			"email"=>$email,
			"avatar"=>$avatar,
			"comment"=>$comment,
			"created_at"=>$today
		]);

		//  Відправили всіх користувачів
		$alluser=DB::select("SELECT `name`,`email` FROM `forum_comment` GROUP BY `email`");
		// dd($alluser);
		$data = [
			'avatar'=>$avatar,
			'name'=>$name,
			'data'=>$today,
			'comment'=>$comment
		];
		foreach ($alluser as $value) {
			$uname=$value->name;
			$uemail=$value->email;
			Mail::send('mail', $data, function($m) use($uname, $uemail){
			   $m->to($uemail, $uname);
			   $m->subject('TASK FORUM');
			});
		}

		return redirect('/');
	}
}
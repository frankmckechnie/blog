<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Carbon\Carbon;
	
class Post extends Model
{

	public function comments()
	{
		return $this->hasMany(Comment::class);
	}

	public function user()
	{
		return $this->belongsTo(User::class);
	}

	public function addComment($body)
	{
		// Comment::create([
		//     'body' => $body, 'post_id' => $this->id
		// ]);

		$this->comments()->create(['body'=> $body]);
	}

	public function scopeFilter($query, $filters){

		if(count($filters)){
			if($month = $filters['month']){
				$query->whereMonth('created_at', Carbon::parse($month)->month);
			}

			if($year = $filters['year']){
				$query->whereYear('created_at', $year);
			}     
		}       
	
	}

	public static function archives(){
		return static::selectRaw('year(created_at) year, monthname(created_at) month, count(*) published')
        ->groupBy('year', 'month')
        ->orderByRaw('min(created_at) desc')
        ->get()
        ->toArray();
	}
}

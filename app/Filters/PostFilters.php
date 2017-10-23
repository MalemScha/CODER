<?php

namespace App\Filters;

use Illuminate\Http\Request;

use App\User;




	class PostFilters extends Filters
	{
		protected $filters = ['by','popular'] ;

		protected function by($username)
		{
			$user = User::where('name' , $username)->firstOrFail();

        	return $this->builder->where('user_id',$user->id);
		}

			protected function popular()
		{
			$this->builder->getQuery()->orders = [];
			return $this->builder->orderBy('comments_count', 'desc');
		}

	}
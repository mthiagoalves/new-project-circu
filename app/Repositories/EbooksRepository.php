<?php

namespace App\Repositories;

use App\Http\Requests;

//Models
use App\Article;


//Facades
use Illuminate\Support\Facades\DB;

class EbooksRepository
{
  public static function getEbook($slug)
	{
		$ebook = Article::where('slug', $slug)->first();

		return $ebook;
	}
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Atymic\Twitter\Twitter as TwitterContract;
use Illuminate\Http\JsonResponse;
use Twitter;


class mediacontroller extends Controller
{
    public function userTweets(int $userId): JsonResponse
{
	$params = [
		'place.fields' => 'country,name',
		'tweet.fields' => 'author_id,geo',
		'expansions' => 'author_id,in_reply_to_user_id',
		TwitterContract::KEY_RESPONSE_FORMAT => TwitterContract::RESPONSE_FORMAT_JSON,
	];

	return JsonResponse::fromJsonString(Twitter::userTweets($userId, $params));
}
}









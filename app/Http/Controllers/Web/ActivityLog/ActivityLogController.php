<?php

namespace App\Http\Controllers\Web\ActivityLog;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;

use Spatie\Activitylog\Models\Activity;

class ActivityLogController extends Controller
{
	public function index(Request $request): View
	{
		// search input
		$searchVal = $request->search ?? null;
    
		// activity_log
		// paginate with query
		$activityLogs = Activity::select('activity_log.id', 'log_name', 'description', 'event', 'activity_log.created_at', 'users.first_name as causer_name')
			->join('users', 'users.id', '=', 'activity_log.causer_id')
			->where('log_name', 'LIKE', '%'.$searchVal.'%')
			->where('users.first_name', 'LIKE', '%'.$searchVal.'%')
			->orderBy('activity_log.created_at', 'desc')
			->paginate(5)->withQueryString();
      
		return view('activity-log.index', compact('activityLogs', 'searchVal'));
	}

	public function show(Activity $activity): View
	{
		$activity->load('causer', 'subject');

		return view('activity-log.show', compact('activity'));
	}
}

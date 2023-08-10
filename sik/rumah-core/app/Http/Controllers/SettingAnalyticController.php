<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Analytics\Period;

class SettingAnalyticController extends Controller
{
    public function google(Request $request)
	{
		$analyticPeriod = env('ANALYTIC_PERIOD_DAY', 7);
		$analyticsData = Analytics::fetchVisitorsAndPageViews(Period::days($analyticPeriod));

		return view('admin.setting.analytic.google', compact('analyticsData'));
	}
}

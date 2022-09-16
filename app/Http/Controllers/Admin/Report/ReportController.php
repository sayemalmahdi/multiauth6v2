<?php

namespace App\Http\Controllers\Admin\Report;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class ReportController extends Controller
{
    public function __construct(){
    	$this->middleware('auth');
    }

    public function TodayOrder()
    {
    	$today=date('d-m-y');
    	$order=DB::table('orders')->where('status',0)->where('date',$today)->get();
    	return view('admin.report.today_order',compact('order'));
    }

    public function TodayDelevered()
    {
        $today=date('d-m-y');
    	$order=DB::table('orders')->where('status',3)->where('date',$today)->get();
    	return view('admin.report.today_delevered',compact('order'));
    }

    public function ThisMonth()
    {
          $month=date('F');
          $order=DB::table('orders')->where('status',3)->where('month',$month)->get();
          return view('admin.report.this_month',compact('order'));
    }

    public function SearchReport()
    {
        return view('admin.report.search_report');
    }

    public function searchByYear(Request $request)
    {
         $year=$request->year;
         $total=DB::table('orders')->where('status',3)->where('year',$year)->sum('total');
         $order=DB::table('orders')->where('status',3)->where('year',$year)->get();
         return view('admin.report.search_report_result',compact('order','total'));

    }

    public function searchByMonth(Request $request)
    {
        $month=$request->month;
         $total=DB::table('orders')->where('status',3)->where('month',$month)->sum('total');
         $order=DB::table('orders')->where('status',3)->where('month',$month)->get();
         return view('admin.report.search_report_result',compact('order','total'));
    }

    public function searchByDate(Request $request)
    {
          $date=$request->date;
          $newdate = date("d-m-y", strtotime($date));
          $total=DB::table('orders')->where('status',3)->where('date',$newdate)->sum('total');
          $order=DB::table('orders')->where('status',3)->where('date',$newdate)->get();
         return view('admin.report.search_report_result',compact('order','total'));
    }

    



}

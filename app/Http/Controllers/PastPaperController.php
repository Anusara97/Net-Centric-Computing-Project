<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PastPaper;
use Session;

class PastPaperController extends Controller
{
    //
    function addPaper(Request $req) {
        $PastPaper = new PastPaper;

        $PastPaper->courseName = $req->courseName;
        $PastPaper->courseCode = $req->courseCode;
        $PastPaper->department = $req->department;
        $PastPaper->level = $req->level;
        $PastPaper->semester = $req->semester;
        $PastPaper->year = $req->year;
        //store uploaded paper
        if ($req->hasFile('paper')) {
            $file = $req->file('paper');
            $filename = $req->courseCode . '_'. $req->year . '.' . $file->getClientOriginalExtension();
            $file->storeAs('public/pastPapers', $filename);
            $PastPaper->paper = $filename;
        }
        $PastPaper->remark = $req->remark;
        $result = $PastPaper->save();

        if($result) {
            return back()->with('success', 'Paper uploaded Successfull!');
        } else {
            return back()->with('fail', 'Somthing worng!, Please check your inputs.');
        }
    }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PastPaper;
use Session;
use Illuminate\Support\Facades\Storage;

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

    //This is a function to get papers seperately in 3 tables in single page.
    function viewPapers() {
        $papersI = PastPaper::where('level', 'Level 1 BSc. General Degree')->get();
        $papersII = PastPaper::where('level', 'Level 2 BSc. General Degree')->get();
        $papersIII = PastPaper::where('level', 'Level 3 BSc. General Degree')->get();
    
        return view('ViewPapers', compact('papersI', 'papersII', 'papersIII'));
    }

    //delete papst papes from the database
    function Remove($id, Request $req) {
        $data = PastPaper::find($id);
        $result = $data->delete();

        if($result) {
            return back()->with('success', 'Paper Removed Successfull!');
        } else {
            return back()->with('fail', 'Somthing worng!, Please check your inputs.');
        }
    } 

    public function downloadPaper($id)
    {
        // Retrieve the paper record by its ID
        $paper = PastPaper::find($id);

        // Check if the paper exists
        if (!$paper || !$paper->paper) {
            return back()->with('fail', 'File not found!');
        }

        // Construct the file path
        $filePath = 'public/pastPapers/' . $paper->paper;

        // Check if the file exists in the storage
        if (!Storage::exists($filePath)) {
            return back()->with('fail', 'File not found in storage!');
        }

        // Return the file for download
        return Storage::download($filePath, $paper->paper);
    }

    function viewInnerPapers() {
        $papersI = PastPaper::where('level', 'Level 1 BSc. General Degree')->get();
        $papersII = PastPaper::where('level', 'Level 2 BSc. General Degree')->get();
        $papersIII = PastPaper::where('level', 'Level 3 BSc. General Degree')->get();
    
        return view('InnerPapers', compact('papersI', 'papersII', 'papersIII'));
    }
    
}

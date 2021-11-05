<?php

namespace App\Http\Controllers\Courses;

use App\Http\Controllers\Controller;
use App\Models\CourseDetail;
use Illuminate\Http\Request;

class CoursesDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $getVideo = CourseDetail::findOrFail($id);

        $details = CourseDetail::where('course_id',$getVideo->course_id)->get();

        
        //dd($getVideo);

        return view('courses.detail', compact('details', 'getVideo'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    public function statusUpdate($nextId, $prevId)
    {
        if($nextId == $prevId){
            return back();
        }
        
        CourseDetail::findOrFail($nextId)->update([
            'current' => true
        ]);

        CourseDetail::findOrFail($prevId)->update([
            'current' => false
        ]);


        $getVideo = CourseDetail::findOrFail($nextId);
        
       
        return redirect()->route('detail', ['id' => $getVideo->id]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

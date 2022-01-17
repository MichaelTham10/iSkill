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

        return view('courses.detail', compact('details', 'getVideo'));
    }


    public function manage($course_id)
    {
        $details = CourseDetail::where('course_id', $course_id)->get();

        return view('courses.managing_detail', compact('details'));
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

    public function nextCourse($id){

        if(CourseDetail::where('id', $id+1)->first() == null){
            CourseDetail::findOrFail($id)->update([
                'current' => false,
                'status' => true
            ]);
            CourseDetail::findOrFail(1)->update([
                'current' => true
            ]);
            return redirect()->route('detail', ['id' => 1]);
        }

        CourseDetail::findOrFail($id + 1)->update([
            'current' => true
        ]);
        

        CourseDetail::findOrFail($id)->update([
            'current' => false,
            'status' => true
        ]);

        $getVideo = CourseDetail::findOrFail($id + 1);

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
        $this->validate($request, [
            'course' => 'required',
            'title' => 'required',
            'link' => 'required',
            
        ]);

        $checkFirstTime = CourseDetail::where('course_id', $request->course)->get();
        if($checkFirstTime->isEmpty()){
            CourseDetail::create([
                'course_id' => $request->course,
                'title' => $request->title,
                'video' => $request->link,
                'current' => true,
            ]);
        }else{
            CourseDetail::create([
                'course_id' => $request->course,
                'title' => $request->title,
                'video' => $request->link,
                'current' => false,
            ]);
        }

       

        return back()->with('success', 'Detail kursus telah ditambahkan');
    }

   
    public function show($id)
    {
        //
    }

   
    public function edit($detail_id)
    {
        $detail = CourseDetail::findOrFail($detail_id);

        return view('courses.update_detail', compact('detail'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $detail_id)
    {
        $this->validate($request, [
            'title' => 'required',
            'link' => 'required',
        ]);

        CourseDetail::findOrFail($detail_id)->update([
            'title' => $request->title,
            'video' => $request->link,
            
        ]);

        return back()->with('success', 'Update detail kursus berhasil');
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

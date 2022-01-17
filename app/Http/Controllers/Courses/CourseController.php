<?php

namespace App\Http\Controllers\Courses;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\CourseDetail;
use App\Models\Courses;
use App\Models\Lecturer;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        
        $courses = Courses::where('category_id',$id)->get();

        return view('courses.course' , compact('courses'));
    }

    public function manageCourse(){
        $categories = Category::all();
        return view('courses.manage_courses', compact('categories'));
    }

    public function preview($id)
    {
        $course = Courses::findOrFail($id);

        $detail = CourseDetail::where('course_id',$id)->where('current',true)->first();

        if($detail == null)
        {
            return back()->with('alert', 'Kelas belum siap untuk diakses');
        }

        return view('courses.preview', compact('course', 'detail'));

    }

   
    public function create()
    {
        $categories = Category::all();
        $lecturers = Lecturer::all();
        $courses = Courses::all();
        return view('courses.add_courses', compact('categories', 'lecturers', 'courses'));
    }

   
    public function store(Request $request)
    {
        $this->validate($request, [
            'category' => 'required',
            'lecturer' => 'required',
            'name' => 'required',
            'price' => 'required',
            'description' => 'required',
            'image' => 'required',
        ]);

        $image_path = $request->file('image')->store('course', 'public');

        Courses::create([
            'category_id' => $request->category,
            'lecturer_id' => $request->lecturer,
            'name' => $request->name,
            'price' => $request->price,
            'description' => $request->description,
            'image' => $image_path,
        ]);

        return back()->with('success', 'Kursus baru telah ditambahkan');
    }

   public function manage($category_id)
   {
       $courses = Courses::where('category_id',$category_id)->get();
        return view('courses.managing_course', compact('courses'));
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

   
    public function edit($course_id)
    {
        $course = Courses::findOrFail($course_id);
        $lecturers = Lecturer::all();
        return view('courses.update_course', compact('course', 'lecturers'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $course_id)
    {
        $this->validate($request, [
            'lecturer' => 'required',
            'name' => 'required',
            'price' => 'required',
            'description' => 'required',
        ]);

        Courses::findOrFail($course_id)->update([
            'lecturer_id' => $request->lecturer,
            'name' => $request->name,
            'price' => $request->price,
            'description' => $request->description,
            
        ]);

        return back()->with('success', 'Kursus berhasil di update');
    }

    
    public function destroy($course_id)
    {
        Courses::destroy($course_id);
        return back()->with('success', 'Delete kursus berhasil');
    }
}

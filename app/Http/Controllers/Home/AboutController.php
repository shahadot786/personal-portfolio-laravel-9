<?php

namespace App\Http\Controllers\Home;

use App\Models\About;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Education;
use App\Models\Skills;
use App\Models\Training;
use Intervention\Image\Facades\Image;

class AboutController extends Controller
{
    public function AboutPage()
    {
        $aboutpage = About::find(1);
        return view('admin.about_page.about_page_all', compact('aboutpage'));
    } //end method

    public function UpdateAbout(Request $request)
    {

        $about_id = $request->id;

        if ($request->file('about_image')) {
            $image = $request->file('about_image');
            $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();  // 3434343443.jpg

            Image::make($image)->resize(523, 605)->save('upload/home_about/' . $name_gen);
            $save_url = 'upload/home_about/' . $name_gen;

            About::findOrFail($about_id)->update([
                'title' => $request->title,
                'short_title' => $request->short_title,
                'short_description' => $request->short_description,
                'long_description' => $request->long_description,
                'about_image' => $save_url,

            ]);
            $notification = array(
                'message' => 'About Page Updated with Image Successfully',
                'alert-type' => 'success'
            );

            return redirect()->back()->with($notification);
        } else {

            About::findOrFail($about_id)->update([
                'title' => $request->title,
                'short_title' => $request->short_title,
                'short_description' => $request->short_description,
                'long_description' => $request->long_description,

            ]);
            $notification = array(
                'message' => 'About Page Updated without Image Successfully',
                'alert-type' => 'success'
            );

            return redirect()->back()->with($notification);
        } // end Else

    } // End Method

    public function HomeAbout()
    {
        $aboutpage = About::find(1);
        return view('frontend.about_page', compact('aboutpage'));
    } //end method

    //skills
    public function AboutSkill()
    {
        return view('admin.about_page.about_skill');
    } //end method
    public function AddSkill()
    {
        return view('admin.about_page.add_about_skill');
    } //end method

    public function StoreSkill(Request $request)
    {
        $skills = new Skills();
        $skills->skill_name = $request->skill_name;
        $skills->skill_progress = $request->skill_progress;
        $skills->save();

        return view('admin.about_page.about_skill');
    } //end method

    public function EditSkill($id)
    {
        $skills = Skills::find($id);
        return view('admin.about_page.edit_skill', compact('skills'));
    } //end method

    public function UpdateSkill(Request $request, $id)
    {
        $skills = Skills::find($id);
        $skills->skill_name = $request->skill_name;
        $skills->skill_progress = $request->skill_progress;
        $skills->save();
        return view('admin.about_page.about_skill');
    } //end method

    public function DeleteSkill($id)
    {
        $skills = Skills::where('id', $id)->delete();

        return view('admin.about_page.about_skill', compact('skills'));
    } //end method

    //traning
    public function AboutTraning()
    {
        return view('admin.about_page.about_traning');
    } //end method
    public function AddTraning()
    {
        return view('admin.about_page.about_add_traning');
    } //end method

    public function StoreTraning(Request $request)
    {
        $trainings = new Training();
        $trainings->title = $request->title;
        $trainings->institute = $request->institute;
        $trainings->topics = $request->topics;
        $trainings->country = $request->country;
        $trainings->location = $request->location;
        $trainings->duration = $request->duration;
        $trainings->start_date = $request->start_date;
        $trainings->end_date = $request->end_date;
        $trainings->save();

        return view('admin.about_page.about_traning');
    } //end method

    public function EditTraning($id)
    {
        $tranings = Training::find($id);
        return view('admin.about_page.edit_traning', compact('tranings'));
    } //end method

    public function UpdateTraning(Request $request, $id)
    {
        $trainings = Training::find($id);
        $trainings->title = $request->title;
        $trainings->institute = $request->institute;
        $trainings->topics = $request->topics;
        $trainings->country = $request->country;
        $trainings->location = $request->location;
        $trainings->duration = $request->duration;
        $trainings->start_date = $request->start_date;
        $trainings->end_date = $request->end_date;
        $trainings->save();

        return view('admin.about_page.about_traning');
    } //end method

    public function DeleteTraning($id)
    {
        $trainings = Training::where('id', $id)->delete();

        return view('admin.about_page.about_traning', compact('trainings'));
    } //end method

    //education
    public function AboutEducation()
    {
        return view('admin.about_page.about_education');
    } //end method

    public function AddEducation()
    {
        return view('admin.about_page.about_add_education');
    } //end method

    public function StoreEducation(Request $request)
    {
        $educations = new Education();
        $educations->title = $request->title;
        $educations->subject = $request->subject;
        $educations->institute = $request->institute;
        $educations->result = $request->result;
        $educations->passing_year = $request->passing_year;
        $educations->duration = $request->duration;
        $educations->achievement = $request->achievement;
        $educations->save();

        return view('admin.about_page.about_education');
    } //end method

    public function EditEducation($id)
    {
        $educations = Education::find($id);
        return view('admin.about_page.edit_education', compact('educations'));
    } //end method

    public function UpdateEducation(Request $request, $id)
    {
        $educations = Education::find($id);
        $educations->title = $request->title;
        $educations->subject = $request->subject;
        $educations->institute = $request->institute;
        $educations->result = $request->result;
        $educations->passing_year = $request->passing_year;
        $educations->duration = $request->duration;
        $educations->achievement = $request->achievement;
        $educations->save();

        return view('admin.about_page.about_education');
    } //end method

    public function DeleteEducation($id)
    {
        $educations = Education::where('id', $id)->delete();

        return view('admin.about_page.about_education', compact('educations'));
    } //end method

}

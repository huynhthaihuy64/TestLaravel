<?php

namespace App\Http\Controllers;

use App\Http\Requests\CvRequest;
use App\Mail\MyTestMail;
use Illuminate\Support\Facades\Mail;
use App\Models\Cv;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CvController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cvs = CV::get();
        return view('admin.cv.list', [
            'title' => 'List Cv',
            'cvs' => $cvs,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('submit_cv', [
            'title' => 'Submit Cv',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CvRequest $request)
    {
        //
        // $request->file->filename;
        $fileName = $request->file->getClientOriginalName();
        $request->file->move(public_path('uploads'), $fileName);
        $cv = new Cv;
        $cv->name = $request->name;
        $cv->email = $request->email;
        $cv->phone = $request->phone;
        $cv->file = $fileName;
        $cv->position = $request->position;
        $cv->date = $request->date;
        $cv->save();
        return redirect()->route('index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cv  $cv
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        return view('admin.cv.edit', [
            'title' => 'Edit CV',
            'cv' => Cv::get()->find($id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cv  $cv
     * @return \Illuminate\Http\Response
     */
    public function update(CvRequest $request, $id)
    {
        $cv = Cv::find($id);
        $fileName = $request->file->getClientOriginalName();
        $request->file->move(public_path('uploads'), $fileName);
        $cv->name = $request->name;
        $cv->email = $request->email;
        $cv->phone = $request->phone;
        $cv->file = $fileName;
        $cv->date =  !empty($cv->date) && $cv->date != NULL ? $cv->date : $request->date;
        $cv->position = $request->position;
        $cv->active = $request->active;
        $cv->save();
        Session::flash('success', 'Update Success');
        return redirect()->route('cv.list');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cv  $cv
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $del = Cv::find($id)->delete();
        if ($del) {
            Session::flash('success', 'Delete Success');
            return redirect()->back();
        } else {
            Session::flash('error', 'Delete Fail');
            return redirect()->back();
        }
    }

    public function sendmail($mail)
    {
        $details = [
            'title' => 'Mail from Huyhuynh',
            'body' => '<h1>Cảm ơn bạn đã tham gia phỏng vấn công ty chúng tôi</h1>
            <h2>Nếu bạn có thể phỏng vấn trước 6pm thì hãy confirm mail này và truy cập trang web để tạo tài khoản và apply lịch phỏng vấn</h2>
            <a href="http://localhost/Recruitment-Manager/index.php" class="btn btn-block btn-danger">
                  Confirm
              </a>'
        ];
        Mail::to($mail)->send(new MyTestMail($details));
        Session::flash('success', 'Email is sent');
        return redirect()->back();
    }
}

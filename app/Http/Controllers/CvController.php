<?php

namespace App\Http\Controllers;

use App\Http\Requests\CvRequest;
use App\Http\Requests\CvUpdateRequest;
use App\Mail\MyTestMail;
use Illuminate\Support\Facades\Mail;
use App\Models\Cv;
use App\Models\User;
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
            'users' => User::get(),
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
        $tname = $request->name;
        $fileName = $tname . '-' . $request->file->getClientOriginalName();
        $request->file->move(public_path('uploads'), $fileName);
        $cv = new Cv;
        $cv->name = $request->name;
        $cv->email = $request->email;
        $cv->user_id = $request->user_id;
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
    public function update(CvUpdateRequest $request, $id)
    {
        $cv = Cv::find($id);
        $tname = $request->name;
        $fileName =  $tname . '-' . $request->file->getClientOriginalName();
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
            'body' => '<h1>C???m ??n b???n ???? tham gia ph???ng v???n c??ng ty ch??ng t??i</h1>
            <h2>N???u b???n c?? th??? ph???ng v???n tr?????c 6pm th?? h??y confirm mail n??y v?? truy c???p trang web ????? t???o t??i kho???n v?? apply l???ch ph???ng v???n</h2>
            <a href="http://recruitment-manager-laravel.test/index" class="btn btn-block btn-danger">
                  Confirm
              </a>'
        ];
        Mail::to($mail)->send(new MyTestMail($details));
        Session::flash('success', 'Email is sent');
        return redirect()->back();
    }
}

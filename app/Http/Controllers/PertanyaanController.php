<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;

use function Ramsey\Uuid\v1;
use DB;

class PertanyaanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = DB::table('questions')
                ->join('profiles','questions.profile_id','=','profiles.profile_id')
                ->get();
        return view("ListPertanyaan", ['datas'=> $datas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('PertanyaanCreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|unique:questions',
            'pertanyaan' => 'required',
            'profileId' => 'required'
        ]);
        $query = DB::table('questions')->insert(
                ['title' => $request['title'],
                'question' => $request['pertanyaan'],
                'profile_id' => $request['profileId']
                ]
                );
        return redirect('/pertanyaan')->with('success','Pertanyaan Berhasil Disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = DB::table('questions')
                ->join('profiles','questions.profile_id','=','profiles.profile_id')
                ->where('question_id',$id)
                ->first();

        return view('QuestionDetail', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = DB::table('questions')
                ->join('profiles','questions.profile_id','=','profiles.profile_id')
                ->where('question_id',$id)
                ->first();

        return view('EditQuestion',compact('data'));
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
        $request->validate([
            'title' => 'required|unique:questions',
            'pertanyaan' => 'required'
        ]);

        $data = DB::table('questions')
                ->where('question_id',$id)
                ->update([
                    'title' => $request['title'],
                    'question' => $request['pertanyaan']
                ]);

        return redirect('/pertanyaan')->with('success','Pertanyaan Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = DB::table('questions')
                ->where('question_id','=',$id)
                ->delete();

        return redirect('/pertanyaan')->with('success','Pertanyaan Berhasil Dihapus');
    }
}

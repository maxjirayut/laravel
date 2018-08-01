<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Http\Requests;

class HistoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      // $history = new history;
      // $history->name = $request->name;
      // $user->sex = input::get("sex");
      // $user->status = input::get("status");
      // $user->nationality = input::get("nationality");
      // $user->religion = input::get("religion");
      // $user->birthdays = input::get("birthdays");
      // $user->address = input::get("address");
      // $user->phone = input::get("phone");
      // $user->graduated = input::get("graduated");
      // $user->branch = input::get("branch");
      // $history->save();
      //
      // return 'ADD';

      $name = $request->input('name');
      $sex = $request->input('sex');
      $status = $request->input('status');
      $nationality = $request->input('nationality');
      $religion = $request->input('religion');
      $birthdays = $request->input('birthdays');
      $address = $request->input('address');
      $phone = $request->input('phone');
      $graduated = $request->input('graduated');
      $branch = $request->input('branch');

      $data = array(
        'name'=>$name,
        'sex'=>$sex,
        'status'=>$status,
        'nationality'=>$nationality,
        'religion'=>$religion,
        'birthdays'=>$birthdays,
        'address'=>$address,
        'phone'=>$phone,
        'graduated'=>$graduated,
        'branch'=>$branch);

        DB::table('history')->insert($data);
        
        echo "Success";

        // `id`, `name`, `sex`, `status`, `nationality`, `religion`, `birthdays`, `address`, `phone`, `graduated`, `branch`

      // $name = $request->input('name');
      // $lasname = $request->input('lasname');
      // $nicname = $request->input('nicname');
      //
      // $data = array('name'=>$name,'lasname'=>$lasname,'nicname'=>$nicname);
      //
      // DB::table('bil')->insert($data);

      // $request=DB::insert("insert into bil(name,lasname,nicname) value (?,?,?)",['mac','jirayut','max']);
      // print_r($request);

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

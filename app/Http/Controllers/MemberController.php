<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Member;
use App\User;
use Illuminate\Support\Facades\DB;

class MemberController extends Controller
{

    public function __construct($value='')
    {
        $this->middleware('auth')->except('store','create');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $members = Member::all();

        return view('backend.members.index',compact('members'));
        // return view('profiletemplate',compact('members'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('backend.members.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);

        // Validation
        $request-> validate([

            "memberName" => "required|min:2|max:191",
            "email" => "required|unique:users",
            "password" => "required|min:6",
            "avatar" => "required|min:6",
            "gender" => "required|min:4|max:6",
            "address" => "required"


        ]);

        // Upload if exist // 3
        if($request->hasfile('avatar')){
            $avatar = $request->file('avatar');
            $upload_dir = public_path().'/storage/member/';
            $name = time().'.'.$avatar->getClientOriginalExtension();
            $avatar->move($upload_dir,$name);
            $path = 'storage/member/'.$name;
        }
        $user = new User;
        $user->name = request('memberName');
        $user->email = request('email');
        $user->password = Hash::make($request->password);
        $user->save();

        $user->assignRole('Member');
         

        $member = new Member;
        $member->user_id = $user->id;
        $member->gender = request('gender');
        $member->avatar = $path;
        $member->address = request('address');

        $member ->save();

        return redirect()->route('members.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // dd($id);
        $user = User::find($id);
        // dd($user->member);
        // $member = Member::find($id);
        return view('profiletemplate',compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $member = Member::find($id);
        // return view('backend.members.edit',compact('member'));
        return view('profiletemplate',compact('member'));
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
        // dd($request);
        // Validation
        $request-> validate([

            "memberName" => "required|min:2|max:191",
            "email" => "required",
            // "password" => "required|min:6",
            "avatar" => "sometimes|mimes:jpeg,jpg,png",
            "gender" => "required|min:4|max:6",
            "address" => "required"


        ]);
        // dd($request);

        // Upload if exist // 3
        if($request->hasfile('avatar')){
            $avatar = $request->file('avatar');
            $upload_dir = public_path().'/storage/member/';
            $name = time().'.'.$avatar->getClientOriginalExtension();
            $avatar->move($upload_dir,$name);
            $path = 'storage/member/'.$name;
        } else{
            $path = request('oldlogo');
        }        
        

        $user = User::find($id);
        $member = Member::find($user->member->user_id);
        dd($member);

        // dd($id);
        //$members=Member::all();
        //$member = Member::find($user);
        // dd($member);
      /*  $member = Member::find($id);
        dd($member);*/
        // $member = DB::select('select id from members where members.user_id');


        //$user = User::find($member->user_id);
        // dd($user);
        // $member->user_id= $user->name;
        // $member->user_id= $user->email;
         //dd($member);
        $member->gender = request('gender');
        
        $member->avatar = $path;
        $member->address = request('address');
        // dd($member);

        $member ->save();

        // $user =  User::find($member->user_id);
        // dd($user);
        $user->name = request('memberName');
        $user->email = request('email');
        $user->password = Hash::make($request->password);
        $user->save();

        

        return redirect()->route('main');
        

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // dd($id);

        // $member = Member::find($id);
        // dd($member);
        // $user = User::find($member->user_id);
        // $user->delete();
        
        // return redirect()->route('backend.members.index');

        $user = User::find($id);
        // $member = Member::find($user->member->user_id)
        // dd($member);
        // $member->delete();
        $user->delete();
        // Return redirect // 5
        return redirect()->route('main');
    }
}

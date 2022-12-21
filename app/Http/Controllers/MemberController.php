<?php

namespace App\Http\Controllers;

use App\Models\Member;
use App\Http\Requests\StoreMemberRequest;
use App\Http\Requests\UpdateMemberRequest;
use App\Models\Attendance;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon as SupportCarbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class MemberController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('createMember');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $member = new Member();
        Log::info($request);

        if ($request->file('image')) {
            $file = $request->file('image');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $path = public_path() . '/images/';
            // $file-> move(public_path('public/images'), $filename);
            $file->move($path, $filename);
        }
        $member->name = $request->name;
        $member->surname = $request->surname;
        $member->code = $request->code;
        $member->jmbg = $request->jmbg;
        $member->register_date = Carbon::now();
        $member->street = $request->street;
        $member->post_no = $request->post_no;
        $member->city = $request->city;
        $member->image_path = $filename;
        $member->save();
        return redirect()->route('createMember');



        // Upload slike i prikaz putanje
        /* if( $request->hasFile('uploadfile')) {
            $image = $request->file('uploadfile');
            $path = public_path(). '/images/';
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $image->move($path, $filename);
           
            
        
        
         
        } */

        /*   $member = new Member();
        $member->name= $request->name;
        $member->surname= $request->surname;
        $member->code= $request->code;
        $member->jmbg= $request->jmbg;
        $member->register_date = Carbon::now();
        $member->image_path = $request->path;
        $member->street = $request->street;
        $member->post_no = $request->post_no;
        $member->city = $request->city;
        $member->save(); */
    }


    public function store(StoreMemberRequest $request)
    {
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function show(Member $member)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function edit(Member $member)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMemberRequest  $request
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMemberRequest $request, Member $member)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function destroy(Member $member)
    {
        //
    }

    public function test(Request $request)
    {
        /*   $firstname = htmlspecialchars($_GET["firstname"]);
        $lastname = htmlspecialchars($_GET["lastname"]);
        $password = htmlspecialchars($_GET["password"]); */
        //Log::info();
        /*  $test = new Test();
        $test->name = $request->firstname;
        $test->save(); */
        //echo "firstname: $firstname lastname: $lastname password: $password";

    }
    public function profile()
    {
        return view('memberProfile');
    }
    public function attendance()
    {
        return view('attendance');
    }
    public function slanje(Request $request)
    {

        $id = $request->postObj['id'];
        $date = Carbon::today()->toDateString();
        $end = Member::select("fees.end as rok")
            ->join("fees", "fees.member_id", "=", "members.id")
            ->where([
                ['members.code', '=', $id],
                ['fees.end', '>=', $date],
            ])
            ->get();


        Log::info($end[0]->rok);
        if ($end[0]->rok >= $date) {
            Log::info('Aktivan član');
            Log::info('Carbon: ' . Carbon::now());
            $user = Member::join('fees', 'fees.member_id', '=', 'members.id')
                ->where('members.code', $id)
                ->get(['members.*', 'fees.end as end']);
            $user_id = $user[0]->id;
            Log::info(Carbon::today()->toDateString());
            //Dodaj u evidencije



            $provjera_evidencije = Attendance::where('member_id', $user_id)->OrderBy('id', 'DESC')->first();
            Log::info($provjera_evidencije);
            if ($provjera_evidencije) {
                
                if ($provjera_evidencije->status == 1) {
                    Log::info('Uraditi Logout');
                    //$provjera_evidencije->update(['out'=>Carbon::now()]);
                    $provjera_evidencije->out = Carbon::now();
                    $provjera_evidencije->status = 0;
                    $provjera_evidencije->save();
              
                    $json = json_encode(['response' => $user], true);
                    echo $json;
                } elseif ($provjera_evidencije->status == 0) {
                    $evidencije = new Attendance();
                    $evidencije->in = Carbon::now();
                    //$evidencije->out= Carbon::now();
                    $evidencije->date = Carbon::today()->toDateString();
                    $evidencije->status = 1;
                    $evidencije->member_id = $user_id;
                    $evidencije->save();
                    $json = json_encode(['response' => $user], true);
                    echo $json;
                }
            } else {
                Log::info('Uraditi PRVI LOGIN');
                $evidencije = new Attendance();
                $evidencije->in = Carbon::now();
                //$evidencije->out= Carbon::now();
                $evidencije->date = Carbon::today()->toDateString();
                $evidencije->status = 1;
                $evidencije->member_id = $user_id;
                $evidencije->save();

                $json = json_encode(['response' => $user], true);
                echo $json;
            }
        } else {
            $json = json_encode(['response' => $id], true);
            echo $json;
        }

        //Log::info($provjera_evidencije->status);
        /*  $prov = $provjera_evidencije[0]->status; */

        /*    Attendance::where('member_id',$id)->update(['out'=>Carbon::now(), 'status'=> 0])->first(); */
        /*  if(isset($provjera_evidencije)){
           

         


            $json = json_encode(['response' => $user], true);
            echo $json;
        } else {

            $json = json_encode(['response' => $id], true);
            echo $json;
        }
 */
    }
}

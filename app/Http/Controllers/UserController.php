<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\StoreUser;
use App\Repositories\UserRepository;
use Illuminate\Support\Facades\Auth;
use Yajra\Datatables\Datatables;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }

    public function teacher()
    {
        return view('admins/teachers');
    }

    public function teacherDatatable()
    {
        $users = User::where('role_id', config('messages.roleTeacher'));

        return Datatables::of($users)
            ->addColumn('action', function ($user) {
                return '<a href="#edit-' . $user->id . '" class="btn btn-sm btn-primary edit-user" data-id="' . $user->id . '"><i class="fa fa-edit"></i></a>
                    <a href="#show-' . $user->id . '" class="btn btn-sm btn-warning edit-user" data-id="' . $user->id . '"><i class="fa fa-eye"></i></a>
                    <a href="#delete-' . $user->id . '" class="btn btn-sm btn-danger edit-user" data-id="' . $user->id . '"><i class="fa fa-eye"></i></a>';
            })
            ->editColumn('avatar', function($user) {
                if ($user->avatar == null) {
                    $image = asset('') . config('messages.linkdefaul');
                } else {
                    $image = $user->avatar;
                }

                return '<img class="img-avatar" src=" ' . $image . ' "/>';
            })
            ->editColumn('status', function ($user) {
                if ($user->status == config('messages.active')) {
                    return "<label class='switch switch-border switch-danger ahihi' title='Active'>
                                <input type='checkbox' id='' data-status='status' checked> 
                                <span class='switch-indicator' user-id=' " . $user->id . " ' data-status='1'></span>                           
                            </label>";
                } else {
                    return "<label class='switch switch-border switch-danger ahihi' title='Deactive'>
                                <input type='checkbox' id=''  data-status='status'>
                                <span class='switch-indicator' user-id=' " . $user->id . " ' data-status='0'></span>
                            </label>";
                }
            })
            ->rawColumns([ 
                'action',
                'avatar',
                'status',
            ])
            ->make(true);
    }

    public function addteacher(StoreUser $request)
    {
        $data = $request->all();
        $data['role_id'] = config('messages.roleTeacher');
        $data['status'] = config('messages.active');
        $data['password'] = Hash::make( config('messages.passDefaul') );
        $user = $this->userRepository->create($data);

        return response()->json([ 'error' => false, 'success' => trans('message.createSuccess') ]); 
    }

    public function changestatus(Request $request)
    {
        if (Auth::user()->role_id == config('messages.roleAdmin')) {
            $data = $request->all();
            if ($data['status'] == config('messages.deactive')) {
                $data['status'] = config('messages.active');
            } else {
                $data['status'] = config('messages.deactive');
            }
            $user = $this->userRepository->update($data['id'], $data);

            return response()->json([ 'error' => false, 'success' => trans('message.changeStatusSuccess') ]);
        } else {
            return response()->json([ 'error' => true, 'success' => trans('message.permission') ]);
        }
    }
}

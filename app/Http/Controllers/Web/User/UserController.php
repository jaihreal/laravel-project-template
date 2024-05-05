<?php

namespace App\Http\Controllers\Web\User;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Yajra\DataTables\Facades\DataTables;
use App\Http\Requests\User\StoreUserRequest;
use App\Models\User;

class UserController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    return view('user.index');
  }

  /**
   * Show the form for creating a new resource.
   */
  public function create()
  {
    return view('user.create');
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(StoreUserRequest $request)
  {
		$data = $request->validated();

    $user 							= new User();
		$user->first_name 	= $data['first_name'];
		$user->middle_name 	= $data['middle_name'] ?? null;
		$user->last_name 		= $data['last_name'];
		$user->role 				= $data['role'];
		$user->email 				= $data['email'];
		$user->password 		= Hash::make($data['password']);
		$user->save();

		toast('User has been successfully added.', 'success');
		return redirect()->route('users.index');
  }

  /**
   * Display the specified resource.
   */
  public function show(string $id)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   */
  public function edit(string $id)
  {
    //
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request, string $id)
  {
    //
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(string $id)
  {
    //
  }

  	/**
	 * Display a listing of the resource.
	 */
	public function showTable(Request $request)
	{
		if ($request->ajax()) {

			$users = User::select('id', 'first_name', 'last_name', 'email', 'role', 'created_at')->where('id', '!=', auth()->user()->id);
			
			return DataTables::of($users)
				->editColumn('created_at', function ($row) {
					return $row->created_at->format('F d, Y'); // human readable format
				})
				->addColumn('action', 'user.table-buttons')
				->rawColumns(['action', 'created_at'])
				->toJson();
		}
	}

}

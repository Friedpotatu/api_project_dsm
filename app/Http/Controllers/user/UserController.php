<?php

namespace App\Http\Controllers\user;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();
        return response()->json([
            'users' => $users
        ]);
    }

    public function getBlockedUsers()
    {
        if(Auth::user()->role != 2){
            return response()->json([
                'message' => 'No esta autorizado para realizar esta acción'
            ]);
        }
        $blockedUsers = User::where('role', -1)->get();
        $totalBlockedUsers = $blockedUsers->count();

        return response()->json([
            'blocked_users' => $blockedUsers,
            'total_blocked_users' => $totalBlockedUsers,
        ]);
    }

    public function getNonBlockedUsers()
    {
        if(Auth::user()->role != 2){
            return response()->json([
                'message' => 'No esta autorizado para realizar esta acción'
            ]);
        }
        $nonBlockedUsers = User::where('role','!=', -1)->get();
        $totalNonBlockedUsers = $nonBlockedUsers->count();

        return response()->json([
            'non_blocked_users' => $nonBlockedUsers,
            'total_non_blocked_users' => $totalNonBlockedUsers,
        ]);
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $user = User::find($id);
        return response()->json($user, 200);
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

    public function blockUser(string $id)
    {
        if(Auth::user()->role != 2){
            return response()->json([
                'message' => 'No esta autorizado para realizar esta acción'
            ]);
        }
        $user = User::find($id);
        $user->role = -1;
        $user->save();
        return response()->json([
            'message' => 'Usuario bloqueado', $user
        ]);
    }
}

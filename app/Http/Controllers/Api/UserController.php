<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Http\Requests\UserUpdateRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\Unique;
use Symfony\Component\Console\Input\Input;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::all();
        return response()->json($user);
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
        $validator = Validator::make($request->all(), (new UserRequest())->rules());
        if ($validator->fails()) {
            $errormsg = "";
            foreach ($validator->errors()->all() as $error) {
                $errormsg .= $error . " ";
            }
            $errormsg = trim($errormsg);
            return response()->json($errormsg, 400);
        }
        $user = new User();
        $user->fill($request->all());
        $user->fill([
            'password' => Hash::make($request->input('password'))
        ])->save();
        return response()->json($user, 201);
    }

    public function login(Request $request) {
        $credentials = $request->only(['username', 'password']);
        if (Auth::once($credentials)) {            
            $user = User::where("username", $request->only("username"))->first();
            if($user->permission == 1) {
                return response()->json(['message' => "Ez a felhasználó ki van tiltva"], 403);
            }
            else {
                $token = Auth::user()->createToken('apitoken');
                return response()->json(['token' => $token->plainTextToken]);
            }
        } else {
            return response()->json(['message' => 'Helytelen felhasználónév vagy jelszó'], 401);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(int $id)
    {
        $user = User::find($id);

        if (is_null($user)) {
            return response()->json(["message" => "A megadott azonosítóval nem található felhasználó."], 404);
        }
        return response()->json($user);
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
    public function update(Request $request, int $id)
    {
        if ($request->isMethod('PUT')) {
            $validator = Validator::make($request->all(), (new UserUpdateRequest())->rules());
            if($validator->fails()) {
                $errormsg = "";
                foreach ($validator->errors()->all() as $error) {
                    $errormsg .= $error . " ";
                }
                $errormsg = trim($errormsg);
                return response()->json(["message" => $errormsg], 400);
            }
        }

        $user = User::find($id);
        if (is_null($user)) {
            return response()->json(["message" => "A megadott azonosítóval nem található felhasználó."], 404);
        }

        $user->fill($request->all())->save();
        return response()->json($user, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $id)
    {
        $user = User::find($id);
        if (is_null($user)) {
            return response()->json(["message" => "A megadott azonosítóval nem található felhasználó."], 404);
        }
        User::destroy($id);
        return response()->noContent();
    }
}

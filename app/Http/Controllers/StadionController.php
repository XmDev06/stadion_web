<?php

namespace App\Http\Controllers;

use App\Models\Qfy;
use App\Models\Stadion;
use App\Models\Tumanlar;
use App\Models\User;
use App\Models\Viloyatlar;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class StadionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $stadions = Stadion::all();
        return  view('admin.stadions.index', compact('stadions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        $users = User::where('is_admin', '2')->get();
        $viloyatlar = Viloyatlar::all();
        $tumanlar=Tumanlar::all();
        return view('admin.stadions.create', compact('users', 'viloyatlar', 'tumanlar'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
       $request->validate([
            'name' => 'required|unique:stadions,name',
            'phone' => 'required|unique:stadions,phone|min:10',
            'phone_2' => 'nullable',
            'narxi' => 'required',
            'user_id' => 'required',
            'viloyat' => 'required',
            'tuman' => 'required',
            'qfy' => 'required',
        ]);


        Stadion::create(
            [
                'name' => $request->name,
                'phone' => $request->phone,
                'phone_2' => $request->phone_2,
                'narxi' => $request->narxi,
                'user_id' => $request->user_id,
                'viloyat' => $request->viloyat_id,
                'tuman' => $request->tuman_id,
                'qfy' => $request->qfy_id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]
        );
        return redirect()->route('stadions.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Stadion  $stadion
     * @return \Illuminate\Http\Response
     */
    public function show(Stadion $stadion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Stadion  $stadion
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit(Stadion $stadion)
    {
        $tumanlar=Tumanlar::all();
        $qfylar=Qfy::all();
        $viloyatlar=Viloyatlar::all();
        $users = User::where('is_admin', '2')->get();
        return view('admin.stadions.update',compact('stadion','users','viloyatlar','tumanlar','qfylar'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Stadion  $stadion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Stadion $stadion)
    {
        $stadion->update($request->all());
        return redirect()->route('stadions.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Stadion  $stadion
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Stadion $stadion)
    {
        $stadion->delete();
        return redirect()->back();
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Itstructure\GridView\DataProviders\EloquentDataProvider;

class CarrierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $dataProvider = new EloquentDataProvider(User::whereHas('roles', function($query) {
          $query->where('name', '=', 'carrier');
      }));
      //dd($dataProvider);
      //$carriers = User::whereHas('roles', function($query) {
      //    $query->where('name', '=', 'carrier');
      //})->paginate(15);

      return view('admin.carriers.index', ['dataProvider' => $dataProvider]);
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
      $carrier = User::find($id);
      return view('admin.carriers.edit', compact('carrier'));
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
          'name' => 'required',
          'surname' => 'required|string|max:255',
          'middle_name' => 'required|string|max:255',
          'phone' => 'required|string|max:255',
        ]);
        $carrier = User::find($id);
        $carrier->update($request->all());
        return redirect()->route('carriers.index')->with('success', 'Водитель обновлен');
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

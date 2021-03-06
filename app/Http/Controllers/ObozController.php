<?php

namespace App\Http\Controllers;

use App\Models\Oboz;
use App\Models\ObozCategory;
use Exception;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class ObozController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index(): View
    {
       return view("obozy.index", ['obozy' => Oboz::paginate(5)]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create()
    {
        return view("obozy.create", ['categories'=>ObozCategory::all()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return RedirectResponse
     */
    public function store(Request $request) : RedirectResponse
    {
        $oboz = new Oboz($request->all());
        if ($request->hasFile('image')) {
            $oboz->image_path = $request->file('image')->store('obozy');
        }
        $oboz->save();
        return redirect(route('obozy.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  Oboz  $oboz
     * @return View
     */
    public function show(Oboz $oboz): View
    {
        return view("obozy.show", ['oboz' => $oboz]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Oboz  $oboz
     * @return View
     */
    public function edit(Oboz $oboz) : View
    {
        return view("obozy.edit", [
            'oboz' => $oboz,
            'categories' => ObozCategory::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  Oboz  $oboz
     * @return RedirectResponse
     */
    public function update(Request $request, Oboz $oboz) : RedirectResponse
    {
        $oboz->fill($request->all());
        if ($request->hasFile('image')) {
            $oboz->image_path = $request->file('image')->store('obozy');
        }
        $oboz->save();
        return redirect(route('obozy.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Oboz  $oboz
     * @return Jsonresponse
     */
    public function destroy(Oboz $oboz) : Jsonresponse
    {
        try {
            $oboz->delete();
            return response()->json([
                'status' => 'success'
            ]);
        } catch (Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Wyst??pi?? b????d!'
            ])->setStatusCode(500);
        }
    }
}

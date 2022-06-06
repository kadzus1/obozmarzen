<?php

namespace App\Http\Controllers;

use App\Models\Oboz;
use App\Models\ObozCategory;
use Exception;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\JsonResponse;

class WelcomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *@param Request $request
     * @return View|JsonResponse
     */
    public function index(Request $request): View
    {
        $filters = $request -> query('filter');
        $paginate = $request->query('paginate') ?? 5;
        
        $query = Oboz::query();
        $query->paginate($paginate);
        if(!is_null($filters)){
             if (array_key_exists('categories', $filters)) {
                $query = $query->whereIn('category_id', $filters['categories']);
            }
        
            return response()->json([
                'data'=> $query->get()
            ]);
        }
        
        
        
        return view("welcome2", [
            'obozy' => $query->get(),
            'categories' => ObozCategory::orderBy('name', 'ASC')->get()
        ]);
    }
}
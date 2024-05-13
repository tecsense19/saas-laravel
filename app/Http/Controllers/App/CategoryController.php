<?php

namespace App\Http\Controllers\App;

use App\Models\{
    User,
    Category
};
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Role;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('app.category.index');
    }

    public function checkCategoryName(Request $request)
    {
        $categoryName = $request->input('category_name');
        $categoryId = $request->input('category_id') ? decrypt($request->input('category_id')) : '';

        // Check if a category with the given name exists
        if($categoryId)
        {
            $categoryExists = Category::where('category_name', $categoryName)->where('id', '!=', $categoryId)->exists();
        }
        else
        {
            $categoryExists = Category::where('category_name', $categoryName)->exists();
        }

        // Return JSON response indicating if category name is unique
        echo json_encode(!$categoryExists);
    }

    public function list(Request $request)
    {
        // Retrieve search query parameter
        $searchQuery = $request->input('search');

        // Query to retrieve categories
        $query = Category::query();

        // Apply search filter
        if ($searchQuery) {
            $query->where('category_name', 'like', "%$searchQuery%");
        }

        // Paginate the results
        $perPage = env('PER_PAGE_RECORD_COUNT', 10);
        $categoryList = $query->paginate($perPage);
        
        return view('app.category.list', compact('categoryList'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $categoryId = $request->input('category_id') ? decrypt($request->input('category_id')) : '';

        $validatedData = $request->validate([
            'category_name' => ['required', 'string', 'max:255']
        ]);

        if($categoryId)
        {
            $category = Category::where('id', $categoryId)->update([
                'category_name' => $request->category_name
            ]);

            return redirect()->route('categories.index')->withSuccess('Category updated successfully.');
        }
        else
        {
            $category = Category::create([
                'category_name' => $request->category_name
            ]);

            return redirect()->route('categories.index')->withSuccess('Category created successfully.');
        }

    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(Request $request)
    {
        try {
            $id = decrypt($request->category_id);
            $category = Category::findOrFail($id);
            $category->delete();
            $response = [
                'status' => true,
                'message' => 'Category deleted successfully.', // Add your additional data here
            ];
            return response()->json($response);
        } catch (\Exception $e) {
            $response = [
                'status' => false,
                'message' => 'Failed to delete category.', // Add your additional data here
            ];
            return response()->json($response);
        }
    }
}

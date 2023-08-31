<?php

namespace App\Http\Controllers;

use App\Models\ProjectCategory;
use App\Http\Requests\StoreProjectCategoryRequest;
use App\Http\Requests\UpdateProjectCategoryRequest;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class ProjectCategoryController extends Controller
{
    public function index()
    {
        $projectCategory = ProjectCategory::all();
        $total = ProjectCategory::count();
        return response()->json([
            "Total" => $total,
            "Project_Category" => $projectCategory
        ]);
    }

    public function store(StoreProjectCategoryRequest $request)
    {
        $data = $request->validated();
        ProjectCategory::create($data);

        return "Success ProjectCategory created";
    }

    public function show($id)
    {
        try {
            $projectCategory = ProjectCategory::findOrFail($id);
            return $projectCategory;
        } catch (ModelNotFoundException $e) {
            return response()->json(["Error" => "Not Found ID Data"], 404);
        }

    }

    public function update(UpdateProjectCategoryRequest $request, ProjectCategory $projectCategory)
    {
        $data = $request->validated();
        $projectCategory->update($data);

        return "Success ProjectCategory updated" . $projectCategory;
    }

    public function destroy(ProjectCategory $projectCategory)
    {
        $projectCategory->delete();
        return "Success Deleted ProjectCategory";
    }
}

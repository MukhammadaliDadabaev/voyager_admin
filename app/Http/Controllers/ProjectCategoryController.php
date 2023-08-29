<?php

namespace App\Http\Controllers;

use App\Models\ProjectCategory;
use App\Http\Requests\StoreProjectCategoryRequest;
use App\Http\Requests\UpdateProjectCategoryRequest;

class ProjectCategoryController extends Controller
{
    public function index()
    {
        return ProjectCategory::all();
    }

    public function store(StoreProjectCategoryRequest $request)
    {
        $data = $request->validated();
        ProjectCategory::create($data);

        return "Success ProjectCategory created";
    }

    public function show(ProjectCategory $projectCategory)
    {
        return $projectCategory;
    }

    public function update(UpdateProjectCategoryRequest $request, ProjectCategory $projectCategory)
    {
        $data = $request->validated();
        $projectCategory->update($data);

        return "Success ProjectCategory updated". $projectCategory;
    }

    public function destroy(ProjectCategory $projectCategory)
    {
        $projectCategory->delete();
        return "Success Deleted ProjectCategory";
    }
}

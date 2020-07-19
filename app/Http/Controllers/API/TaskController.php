<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Task;

class TaskController extends Controller
{
    /**
     * Display a listing of the task  by filter.
     */
    public function ShowList(Request $request)
    {
		$query = Task::query();
		
		if ($request->filled('userid'))
		{
			$query->where('user_id', $request->get('userid'));
		}
		
		if ($request->filled('title'))
		{
			$title = $request->get('title');
			$query->where('name', 'like', "%$title%");
		}
		
		return $query->get();
	}

	/**
     * Display the specified task.
     */
    public function Show($id)
    {
        return Task::find($id);
    }

    /**
     * Store a newly created task in storage.
     */
    public function Create(Request $request)
    {
        return Task::create($request->all());
    }
    

    /**
     * Update the specified task in storage.
     */
    public function Update(Request $request, $id)
    {
        $task = Task::findOrFail($id);
        $task->update($request->all());

        return $task;
    }

    /**
     * Remove the specified task from storage.
     */
    public function Destroy($id)
    {
        $task = Task::findOrFail($id);
        $task->delete();

        return 204;
    }
}

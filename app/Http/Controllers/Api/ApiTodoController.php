<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\ApiTodoStoreRequest;
use App\Http\Requests\ApiTodoUpdateRequest;
use App\Models\Todo;
use Illuminate\Http\Response;

class ApiTodoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $data = Todo::all();
        return response()->json($data);
    }

    /**
     * Display the specified resource.
     *
     * @param Todo $todo
     * @return Response
     */
    public function show(Todo $todo)
    {
        return response()->json($todo);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param ApiTodoStoreRequest $request
     * @return Response
     */
    public function store(ApiTodoStoreRequest $request)
    {
        $result = Todo::create($request->validated());
        return response()->json([
            'result' => !!$result,
            'data' =>$result,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param ApiTodoUpdateRequest $request
     * @param Todo $todo
     * @return Response
     */
    public function update(ApiTodoUpdateRequest $request, Todo $todo)
    {
        $result = $todo->update($request->validated());
        return response()->json([
            'result' => $result,
            'data' =>$todo->refresh(),
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Todo $todo
     * @return Response
     */
    public function destroy(Todo $todo)
    {
        $result = $todo->delete();
        return response()->json([
            'result' => $result,
            'data' =>$todo,
        ]);
    }
}

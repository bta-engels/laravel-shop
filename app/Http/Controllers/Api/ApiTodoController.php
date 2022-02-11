<?php

namespace App\Http\Controllers\Api;

use App\Models\Todo;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests\ApiTodoStoreRequest;
use App\Http\Requests\ApiTodoUpdateRequest;

class ApiTodoController extends ApiController
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $data = Todo::orderBy('created_at','desc')->get();
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
        $data = Todo::create($request->validated());
        return response()->json([
            'result' => !!$data,
            'data'  => $data,
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
            'data'  => $todo->refresh(),
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
            'data'  => $todo,
        ]);
    }
}

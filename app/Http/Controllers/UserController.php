<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [
            [
                "id" => 1,
                "name" => "John Doe",
                "username" => "johndoe",
                "email" => "johndoe@example.com",
                "phone" => "123-456-7890"
            ],
            [
                "id" => 2,
                "name" => "Jane Smith",
                "username" => "janesmith",
                "email" => "janesmith@example.com",
                "phone" => "987-654-3210"
            ],
            [
                "id" => 3,
                "name" => "Michael Johnson",
                "username" => "mikejohn",
                "email" => "michael@example.com",
                "phone" => "555-123-4567"
            ],
            [
                "id" => 4,
                "name" => "Sarah Lee",
                "username" => "sarahlee",
                "email" => "sarahlee@example.com",
                "phone" => "321-654-9870"
            ],
            [
                "id" => 5,
                "name" => "David Brown",
                "username" => "davbrown",
                "email" => "david.brown@example.com",
                "phone" => "111-222-3333"
            ]
        ];

        return response() -> json($data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
            return response() -> json($request);    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

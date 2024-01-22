<?php

namespace App\Http\Controllers;

use App\Repository\ExampleRepository;
use Illuminate\Http\Request;
use Ramsey\Uuid\Uuid;

class ExampleController extends Controller
{
    private ExampleRepository $example;

    protected $data = array();

    public function __construct(ExampleRepository $example)
    {
        $this->example = $example;
        $this->data['directory'] = 'user';
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = $this->example->getAll();
        $id = Uuid::uuid4()->toString();
        return view($this->data['directory'] . '.index', compact('data', 'id'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

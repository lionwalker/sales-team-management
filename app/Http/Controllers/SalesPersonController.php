<?php

namespace App\Http\Controllers;

use App\Http\Requests\SalesPersonCreateRequest;
use App\Http\Requests\SalesPersonUpdateRequest;
use App\Models\SalesPerson;
use App\Services\SalesPersonService;
use App\Traits\NotificationTrait;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class SalesPersonController extends Controller
{
    use NotificationTrait;

    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        return view('welcome', [
            'salesPeople' => SalesPerson::paginate(15)
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @return Application|Factory|View|\Illuminate\Http\JsonResponse
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Display the specified resource.
     *
     * @param SalesPerson $person
     * @return \Illuminate\Http\JsonResponse
     */
    public function show(SalesPerson $person)
    {
        return response()->json($person);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param SalesPersonCreateRequest $request
     * @return Application|\Illuminate\Http\JsonResponse|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(SalesPersonCreateRequest $request)
    {
        $service = new SalesPersonService();
        $service->create($request);

        return $this->sendResponse("Sales person created successfully");
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param SalesPerson $person
     * @return \Illuminate\Http\Response
     */
    public function edit(SalesPerson $person)
    {
        return view('edit', compact('person'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param SalesPersonUpdateRequest $request
     * @return Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */
    public function update(SalesPersonUpdateRequest $request)
    {
        if (!$request->has('id')) {
            return $this->sendError('Please select a person to update details');
        }

        $service = new SalesPersonService();
        $service->update($request);

        return $this->sendResponse("Sales person updated successfully");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param SalesPerson $person
     * @return Application|\Illuminate\Http\JsonResponse|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy(SalesPerson $person)
    {
        $person->delete();

        return $this->sendResponse('Salse person deleted successfully');
    }
}

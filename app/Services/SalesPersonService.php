<?php

namespace App\Services;

use App\Models\SalesPerson;

class SalesPersonService
{
    public function create($request)
    {
        return SalesPerson::create([
            'name' => $request->name,
            'email' => $request->email,
            'telephone' => $request->telephone,
            'current_routes' => $request->current_routes,
            'joined_date' => $request->joined_date,
            'comments' => $request->comments,
        ]);
    }

    public function update($request)
    {
        $person = SalesPerson::find($request->id);
        $person->name = $request->name;
        $person->email = $request->email;
        $person->telephone = $request->telephone;
        $person->current_routes = $request->current_routes;
        $person->joined_date = $request->joined_date;
        $person->comments = $request->comments;
        $person->save();

        return $person;
    }
}

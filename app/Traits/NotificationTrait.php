<?php

namespace App\Traits;

trait NotificationTrait
{
    public function sendResponse($message)
    {
        session()->flash('success', true);
        session()->flash('message', $message);
        return redirect("/");
    }

    public function sendError($error, $status = 400)
    {
        session()->flash('success', false);
        session()->flash('message', $error);
        return redirect("/");
    }
}

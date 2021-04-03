<?php


namespace App\Http\Controllers;


use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class ContactPageController extends Controller
{
    /**
     * @return View
     */
    public function __invoke(): View
    {
        return view('home.contact');
    }

    /**
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {
        return back()->with('success');
    }
}

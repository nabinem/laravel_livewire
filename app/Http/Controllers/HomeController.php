<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Course;

class HomeController extends Controller
{
    public ?string $membershipId = null;

    public function index(Request $request)
    {
        $tt = $this->membershipId;
        //$test = new CoolPlusGranted(new User, Course::first());
       // dd($test->course?->id);
        return view('welcome');
    }
}


class CoolPlusGranted
{
    /**
     * Create a new event instance.
     */
    public function __construct(
        public User $user,
        public ?Course $course = null
    ) {
    }
}

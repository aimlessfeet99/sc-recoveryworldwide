<?php

use App\Models\EateryEntry;
use App\Models\EateryOwner;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $selectColumns = ['eatery_entries.*', 'eatery_owners.first_name', 'eatery_owners.last_name', 'eatery_owners.phone', 'eatery_types.type_name'];
    $q = ($_GET['s'] ?? null) ?: null;
    if ($q) {
        $search = EateryEntry::select($selectColumns)
            ->join('eatery_owners', 'eatery_owners.id', '=', 'eatery_entries.eatry_owner_id')
            ->join('eatery_types', 'eatery_types.id', '=', 'eatery_entries.eatry_type_id')
            ->where('name', 'LIKE', '%' . $q . '%')
            ->orWhere('city', 'LIKE', '%' . $q . '%')
            ->orWhere('state', 'LIKE', '%' . $q . '%')
            ->orWhere('zip', 'LIKE', '%' . $q . '%')
            ->orWhere('eatery_owners.first_name', 'LIKE', '%' . $q . '%')
            ->orWhere('eatery_owners.last_name', 'LIKE', '%' . $q . '%')
            ->orWhere('eatery_owners.phone', 'LIKE', '%' . $q . '%')
            ->orWhere('eatery_types.type_name', 'LIKE', '%' . $q . '%')->get();
    }
    $owners = EateryOwner::get();
    $eateries = EateryEntry::get();
    return view('welcome', ['owners' => $owners, 'eateries' => $eateries, 'search' => isset($search) ? $search : null]);


})->name('search.me');

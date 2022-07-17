<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\card;
use App\Models\header;
use App\Models\live;
use App\Models\Country;
use App\Models\User;
use App\Models\TableHeaderInformation;
use Illuminate\Validation\Rule;

class WebsiteController extends Controller
{
    public function header_components()
    {
        $header = header::all();
        return view('admin.website.header_components', compact('header'));
    }

    public function save_header_components(Request $request)
    {
        header::updateOrCreate(['name' => $request->name], [
            'value' => $request->value,
            'info' => $request->info
        ]);
        return back()->with('success', "Updated successfully");
    }

    public function save_card_components(Request $request)
    {
        card::updateOrCreate(['name' => $request->name], [
            'value' => $request->value, 'info' => $request->info
        ]);
        return back()->with('success', "Updated successfully");
    }

    public function card_components()
    {
        $card = card::all();
        return view('admin.website.card_components', compact('card'));
    }

    public function live_components()
    {
        $lives = live::all();
        $countries = Country::all();
        return view('admin.website.live_components', compact('countries', 'lives'));
    }

    public function save_live_components(Request $request)
    {
        foreach ($request->name as $key => $name) {
            live::find($request->id[$key])->update(['value' => $name]);
        }
        return back()->with("success", "Updated successfully");
    }

    public function save_table_components(Request $request)
    {
        foreach ($request->population as $key => $population) {
            Country::where('id', $request->id[$key])->update([
                'population' => $population,
                'hata' => $request->hata[$key],
                'hcda' => $request->hcda[$key],
                'nhata' => $request->nhata[$key],
                'liquidity' => $request->liquidity[$key],
                'drt' => $request->drt[$key],
                'drtpercapital' => $request->drtpercapital[$key],
                'idao' => $request->idao[$key],
            ]);
        }

        return back()->with("success", "Updates successfully");
    }

    public function table_components(Request $request)
    {
        $countries = Country::where('show', 1)->orderBy('population', 'desc')->get();
        return view('admin.website.table_components', compact('countries'));
    }

    public function users()
    {
        $users = User::all();
        return view('admin.website.users', compact('users'));
    }

    public function create_user(Request $request)
    {
        $this->validate($request, [
            'name' => ['required'],
            'email' => 'unique:users',
            'password' => ['required']
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);
        return back()->with("success", "User created successfully");
    }

    public function header_info()
    {
        $info = TableHeaderInformation::all();
        return view('admin.website.table_header_info', compact('info'));
    }

    public function save_header_info(Request $request)
    {

        TableHeaderInformation::updateOrCreate(['name' => $request->name], [
            'value' => $request->info,
        ]);
        return back()->with('success', "Updated successfully");
    }

    public function delete_user($id)
    {
        $first = User::where(['id' => $id, 'is_admin' => 0])->first();
        if ($first) {
            $first->delete();
            return redirect()->route('users')->with('success', "Deleted successfully");
        } else {
            return  redirect()->route('users')->with('error', "Cannot delete this user");
        }
    }

    public function update_user(Request $request){
        $this->validate($request, [
            'name' => ['required'],
            'email' => [ Rule::unique('users')->ignore($request->id)],
        ]);

        User::find($request->id)->update([ 
            'name' => $request->name,
            'email' => $request->email
        ]);

        return back()->with("success","User updated successfully");
    }
}

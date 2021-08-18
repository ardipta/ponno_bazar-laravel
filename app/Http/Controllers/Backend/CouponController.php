<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Coupon;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CouponController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View|Response
     */
    public function index()
    {
        $coupons = Coupon::orderBy('created_at', 'DESC')->get();
        return view('backend.layouts.coupon.index', [
            'coupons' => $coupons
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View|Response
     */
    public function create()
    {
        return view('backend.layouts.coupon.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request)
    {
        $request->validate([
            'coupon_text' => 'required|max:20',
            'type' => 'required',
            'value' => 'required'
        ]);

        $coupon = Coupon::create([
            'coupon_text' => $request->input('coupon_text'),
            'type' => $request->input('type'),
            'value' => $request->input('value')
        ]);

        if ($coupon){
            return redirect()->back()->with('success', "Coupon Added Successful");
        }
        else{
            return redirect()->back()->with('error', "Something went wrong!!");
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return RedirectResponse
     */
    public function destroy(int $id): RedirectResponse
    {
        $deleteCoupon = Coupon::find($id);
        if(!is_null($deleteCoupon)){
            $deleteCoupon->delete();
            return redirect()->back()->with('success', 'Successfully deleted!');
        }
    }
}

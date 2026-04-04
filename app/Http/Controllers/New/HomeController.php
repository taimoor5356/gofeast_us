<?php

namespace App\Http\Controllers\New;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function aboutus()
    {
        //
        return view('home.new.aboutus');
    }
    public function article()
    {
        //
        return view('home.new.article');
    }
    public function blog()
    {
        //
        return view('home.new.blog');
    }
    public function commingsoon()
    {
        //
        return view('home.new.commingsoon');
    }
    public function contactus()
    {
        //
        return view('home.new.contactus');
    }
    public function faqs()
    {
        //
        return view('home.new.faqs');
    }
    public function godriver()
    {
        //
        return view('home.new.godriver');
    }
    public function gopartner()
    {
        //
        return view('home.new.gopartner');
    }
    public function index()
    {
        //
        return view('home.new.index');
    }
    public function privacypolicy()
    {
        //
        return view('home.new.privacypolicy');
    }
    public function refundpolicy()
    {
        //
        return view('home.new.refundpolicy');
    }
    public function termsandconditions()
    {
        //
        return view('home.new.termsandconditions');
    }
    public function termsofuse()
    {
        //
        return view('home.new.termsofuse');
    }
    public function siteMap()
    {
        //
        return view('home.new.sitemap');
    }
    public function vendorterms()
    {
        //
        return view('home.new.vendorterms');
    }
    public function gomt()
    {
        //
        return view('home.new.gomt');
    }

    /**
     * Show the form for creating a new resource.
     */

    /**
     * Store a newly created resource in storage.
     */

    /**
     * Display the specified resource.
     */

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

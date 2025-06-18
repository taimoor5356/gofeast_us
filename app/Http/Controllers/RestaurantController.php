<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Store;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;


class RestaurantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($name = null, $location = null)
    {
        //
        $url = "https://dashboard.gomeat.io/api/v1/get-all-stores/25";
        $response = Http::get($url);
        $data = $response->json();
        $currentPage = request()->get('page', 1); // Get the current page number from the request
        $perPage = 12; // Number of items per page
        $storesCollection = collect($data); // Convert array to collection
        
        // Slice the data to get the items for the current page
        $currentPageStores = $storesCollection->slice(($currentPage - 1) * $perPage, $perPage)->values();
        
        // Create the paginator
        $paginatedStores = new LengthAwarePaginator(
            $currentPageStores,
            $storesCollection->count(),
            $perPage,
            $currentPage,
            ['path' => request()->url(), 'query' => request()->query()]
        );
        
        return view('restaurant.index', ['restaurants' => $paginatedStores]);
    }

    public function restaurantDetails($prettyName)
    {
        //
        if (empty($prettyName)) {
            return redirect()->back();
        }
        // $restaurant = Store::with('items.category')->where('country_id', 25)->where('pretty_name', $prettyName)->where('active', 1)->first();
        $url = "https://dashboard.gomeat.io/api/v1/get-store-items/".urlencode($prettyName);
        $response = Http::get($url);
        $jsonResponse = $response->json();
        $restaurant = $jsonResponse['restaurant'];
        $items = $jsonResponse['items'];
        $currentPage = request()->get('page', 1); // Get the current page number from the request
        $perPage = 12; // Number of items per page
        $itemsCollection = collect($items); // Convert array to collection
        
        // Slice the data to get the items for the current page
        $currentPageStores = $itemsCollection->slice(($currentPage - 1) * $perPage, $perPage)->values();
        
        // Create the paginator
        $paginatedItems = new LengthAwarePaginator(
            $currentPageStores,
            $itemsCollection->count(),
            $perPage,
            $currentPage,
            ['path' => request()->url(), 'query' => request()->query()]
        );
        $data['restaurant'] = $restaurant;
        $data['restaurantItems'] = $paginatedItems;
        $data['pretty_name'] = $restaurant['name'];
        
        return view('restaurant.details', $data);
    }

    public function delivery()
    {
        //
        // $data['restaurants'] = DB::table('stores')->where('country_id', 25)->where('delivery', 1)->where('active', 1)->paginate(18);
        $url = "https://dashboard.gomeat.io/api/v1/get-stores/25/delivery";
        $response = Http::get($url);
        $data = $response->json();
        $currentPage = request()->get('page', 1); // Get the current page number from the request
        $perPage = 12; // Number of items per page
        $storesCollection = collect($data); // Convert array to collection
        
        // Slice the data to get the items for the current page
        $currentPageStores = $storesCollection->slice(($currentPage - 1) * $perPage, $perPage)->values();
        
        // Create the paginator
        $paginatedStores = new LengthAwarePaginator(
            $currentPageStores,
            $storesCollection->count(),
            $perPage,
            $currentPage,
            ['path' => request()->url(), 'query' => request()->query()]
        );
        $data['restaurants'] = $paginatedStores;
        $data['delivery_meta_tags'] = <<<EOT
            <!-- Meta Title --> 
            <title>Delivery Service | GoFeast.io - Fast and Reliable Online Food & Grocery Delivery in USA</title> 

            <!-- Meta Description --> 
            <meta name="description" content="Enjoy fast and reliable Online Food & Grocery delivery with GoFeast.io. Order online and have fresh products delivered straight to your door in USA."> 

            <!-- Meta Keywords --> 
            <meta name="keywords" content="GoFeast.io delivery service, Online Food & Grocery, grocery delivery, online food delivery, USA, fast delivery, reliable grocery delivery, meat groceries  "> 

            <!-- Meta Robots --> 
            <meta name="robots" content="index, follow"> 

            <!-- Open Graph Tags --> 
            <meta property="og:title" content="Delivery Service | GoFeast.io - Fast and Reliable Online Food & Grocery Delivery in USA"> 
            <meta property="og:description" content="Enjoy fast and reliable Online Food & Grocery delivery with GoFeast.io. Order online and have fresh products delivered straight to your door in USA."> 
            <meta property="og:url" content="https://www.gofeast.io/delivery"> 
            <meta property="og:type" content="website"> 
            <meta property="og:image" content="https://www.gofeast.io/assets/images/delivery-banner.jpg"> 

            <!-- Twitter Card Tags --> 
            <meta name="twitter:card" content="summary_large_image"> 
            <meta name="twitter:title" content="Delivery Service | GoFeast.io - Fast and Reliable Online Food & Grocery Delivery in USA"> 
            <meta name="twitter:description" content="Enjoy fast and reliable Online Food & Grocery delivery with GoFeast.io. Order online and have fresh products delivered straight to your door in USA."> 
            <meta name="twitter:image" content="https://www.gofeast.io/assets/images/delivery-banner.jpg"> 
        EOT;
        return view('restaurant.index', $data);
    }

    public function pickup()
    {
        // take away ON
        // $data['restaurants'] = DB::table('stores')->where('country_id', 25)->where('take_away', 1)->where('active', 1)->paginate(18);
        $url = "https://dashboard.gomeat.io/api/v1/get-stores/25/pickup";
        $response = Http::get($url);
        $data = $response->json();
        $currentPage = request()->get('page', 1); // Get the current page number from the request
        $perPage = 12; // Number of items per page
        $storesCollection = collect($data); // Convert array to collection
        
        // Slice the data to get the items for the current page
        $currentPageStores = $storesCollection->slice(($currentPage - 1) * $perPage, $perPage)->values();
        
        // Create the paginator
        $paginatedStores = new LengthAwarePaginator(
            $currentPageStores,
            $storesCollection->count(),
            $perPage,
            $currentPage,
            ['path' => request()->url(), 'query' => request()->query()]
        );
        $data['restaurants'] = $paginatedStores;
        $data['pickup_meta_tags'] = <<<EOT
            <!-- Meta Title --> 
            <title>Pickup Service | GoFeast.io - Online Food & Grocery Pickup in USA</title> 
            
            <!-- Meta Description --> 
            <meta name="description" content="Choose GoFeast.io's easy pickup service for Online Food & Grocery. Order online and pick up your fresh products at our convenient location in USA."> 
            
            <!-- Meta Keywords --> 
            <meta name="keywords" content="GoFeast.io pickup service, Online Food & grocery pickup, USA pickup, online food order pickup, convenient grocery pickup, meat  GoFeast.io pickup location"> 
            
            <!-- Meta Robots --> 
            <meta name="robots" content="index, follow"> 
            
            <!-- Open Graph Tags --> 
            <meta property="og:title" content="Pickup Service | GoFeast.io - Online Food & Grocery Pickup in USA"> 
            <meta property="og:description" content="Choose GoFeast.io's easy pickup service for Online Food & Grocery. Order online and pick up your fresh products at our convenient location in USA."> 
            <meta property="og:url" content="https://www.gofeast.io/pickup"> 
            <meta property="og:type" content="website"> 
            <meta property="og:image" content="https://www.gofeast.io/assets/images/pickup-banner.jpg"> 
            
            <!-- Twitter Card Tags --> 
            <meta name="twitter:card" content="summary_large_image"> 
            <meta name="twitter:title" content="Pickup Service | GoFeast.io - Convenient Online Food & Grocery Pickup in USA"> 
            <meta name="twitter:description" content="Choose GoFeast.io's easy pickup service for Online Food & Grocery. Order online and pick up your fresh products at our convenient location in USA."> 
            <meta name="twitter:image" content="https://www.gofeast.io/assets/images/pickup-banner.jpg">
        EOT;
        return view('restaurant.index', $data);
    }

    public function homeChef()
    {
        //
        // $data['restaurants'] = DB::table('stores')->where('country_id', 25)->where('home_chef', 1)->where('active', 1)->paginate(18);
        $url = "https://dashboard.gomeat.io/api/v1/get-stores/25/homechef";
        $response = Http::get($url);
        $data = $response->json();
        $currentPage = request()->get('page', 1); // Get the current page number from the request
        $perPage = 12; // Number of items per page
        $storesCollection = collect($data); // Convert array to collection
        
        // Slice the data to get the items for the current page
        $currentPageStores = $storesCollection->slice(($currentPage - 1) * $perPage, $perPage)->values();
        
        // Create the paginator
        $paginatedStores = new LengthAwarePaginator(
            $currentPageStores,
            $storesCollection->count(),
            $perPage,
            $currentPage,
            ['path' => request()->url(), 'query' => request()->query()]
        );
        $data['restaurants'] = $paginatedStores;
        return view('restaurant.index', $data);
    }

    public function featured()
    {
        //
        $data['restaurants'] = DB::table('stores')->where('country_id', 25)->where('featured', 1)->where('active', 1)->paginate(18);
        return view('restaurant.index', $data);
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

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class HomeController extends Controller
{
    public function home() 
    {
        return Inertia::render('welcome');
    }

    public function about() 
    {
        return Inertia::render('about');
    }

    public function blog() 
    {
        return Inertia::render('blog');
    }

    public function blogDetails($id)
    {
        $post = collect([
             [
            'id' => 'how-to-optimize-listings',
            'title' => '5 Ways to Optimize Your Product Listings for More Sales',
            'author' => 'Marketing Team',
            'date' => 'June 5, 2025',
            'category' => 'Seller Tips',
            'imageUrl' => 'https://via.placeholder.com/1200x600/FF5733/FFFFFF?text=Product+Optimization+Detail',
            'content' => '',
            ],
            [
                'id' => 'meet-our-community-stars',
                'title' => 'Meet Our Community Stars: Featuring Sarah from "Crafty Corner"',
                'author' => 'Community Relations',
                'date' => 'May 28, 2025',
                'category' => 'Community',
                'imageUrl' => 'https://via.placeholder.com/1200x600/33FF57/FFFFFF?text=Community+Story+Detail',
                'content' => '<p class="mb-4">Today, we\'re thrilled to introduce you...</p>',
            ]
        ])->firstWhere('id', $id);
        // dd($post);
        if (!$post) {
            abort(404); // Or return Inertia::render('Error', ['status' => 404]);
        }

        return Inertia::render('blog-details', [ // Assumes BlogPostDetailsPage.jsx is in 'resources/js/Pages'
            'post' => $post,
        ]);
    }

}

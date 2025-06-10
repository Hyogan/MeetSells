import React from 'react'
import { heroBg } from "@/types/image"

const Features = () => {
  return (
    <section className="py-16 rounded-lg bg-white">
  <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div className="text-center mb-12">
      <h2 className="text-3xl font-extrabold text-indigo-700 tracking-tight sm:text-4xl">
        Discover Unique Finds: Featured Listings
      </h2>
      <p className="mt-4 text-lg text-gray-600">
        Explore a curated selection of exceptional products from our talented sellers.
      </p>
    </div>

    <div className="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
      {/* Featured Product Card 1 */}
      <div className="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300">
        <div className="relative aspect-w-4 aspect-h-3">
          <img className="object-cover w-full h-full" src={heroBg} alt="Featured Product 1" />
          <span className="absolute top-2 left-2 bg-indigo-500 text-white text-xs font-semibold rounded-full px-2 py-1">New</span>
        </div>
        <div className="p-4">
          <h3 className="text-lg font-semibold text-gray-800 truncate">Awesome Handmade Item</h3>
          <p className="mt-1 text-sm text-gray-600">$29.99</p>
          <button className="mt-2 w-full bg-indigo-100 text-indigo-700 hover:bg-indigo-200 py-2 rounded-md text-sm font-semibold transition duration-200">View Details</button>
        </div>
      </div>

      {/* Featured Product Card 2 */}
      <div className="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300">
        <div className="relative aspect-w-4 aspect-h-3">
          <img className="object-cover w-full h-full" src={heroBg} alt="Featured Product 2" />
          {/* No "New" badge here */}
        </div>
        <div className="p-4">
          <h3 className="text-lg font-semibold text-gray-800 truncate">Unique Vintage Find</h3>
          <p className="mt-1 text-sm text-gray-600">$45.00</p>
          <button className="mt-2 w-full bg-indigo-100 text-indigo-700 hover:bg-indigo-200 py-2 rounded-md text-sm font-semibold transition duration-200">View Details</button>
        </div>
      </div>

      {/* Featured Product Card 3 */}
      <div className="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300">
        <div className="relative aspect-w-4 aspect-h-3">
          <img className="object-cover w-full h-full" src={heroBg} alt="Featured Product 3" />
          <span className="absolute top-2 left-2 bg-green-500 text-white text-xs font-semibold rounded-full px-2 py-1">Popular</span>
        </div>
        <div className="p-4">
          <h3 className="text-lg font-semibold text-gray-800 truncate">Limited Edition Craft</h3>
          <p className="mt-1 text-sm text-gray-600">$79.99</p>
          <button className="mt-2 w-full bg-indigo-100 text-indigo-700 hover:bg-indigo-200 py-2 rounded-md text-sm font-semibold transition duration-200">View Details</button>
        </div>
      </div>

      {/* Add more featured product cards here */}
    </div>

    <div className="mt-8 text-center">
      <a href="/shop" className="inline-block bg-indigo-500 hover:bg-indigo-600 text-white font-semibold py-3 px-8 rounded-md transition duration-200">
        Browse All Listings
      </a>
    </div>
  </div>
</section>
  )
}

export default Features
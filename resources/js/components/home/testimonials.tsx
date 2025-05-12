import { heroBg } from "@/types/image"
import React from 'react'

const Testimonials = () => {
  return (
    <section className="py-16 bg-gray-100">
  <div className="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
    <div className="text-center mb-12">
      <h2 className="text-3xl font-extrabold text-green-600 tracking-tight sm:text-4xl">
        What Buyers and Sellers Are Saying
      </h2>
      <p className="mt-4 text-lg text-gray-600">
        Join a thriving community built on trust and positive experiences.
      </p>
    </div>

    <div className="grid grid-cols-1 md:grid-cols-2 gap-8">
      {/* Testimonial Card 1 */}
      <div className="bg-white rounded-lg shadow-md p-6">
        <div className="flex items-center mb-4">
          <img className="w-12 h-12 rounded-full object-cover mr-4" src={heroBg} alt="User A" />
          <div>
            <h4 className="text-lg font-semibold text-gray-800">Sarah M.</h4>
            <p className="text-sm text-gray-500">Buyer</p>
          </div>
        </div>
        <blockquote className="text-gray-700 italic">
          "I absolutely love MeetSells! It's so easy to connect with sellers directly and find unique, high-quality items. The communication is fantastic, and I feel confident in my purchases."
        </blockquote>
      </div>

      {/* Testimonial Card 2 */}
      <div className="bg-white rounded-lg shadow-md p-6">
        <div className="flex items-center mb-4">
          <img className="w-12 h-12 rounded-full object-cover mr-4" src={heroBg} alt="Seller B" />
          <div>
            <h4 className="text-lg font-semibold text-gray-800">John B.</h4>
            <p className="text-sm text-gray-500">Seller</p>
          </div>
        </div>
        <blockquote className="text-gray-700 italic">
          "MeetSells has been a game-changer for my small business. I can connect directly with customers, understand their needs, and build real relationships. Sales have definitely increased!"
        </blockquote>
      </div>

      <div className="bg-white rounded-lg shadow-md p-6">
        <div className="flex items-center mb-4">
          <img className="w-12 h-12 rounded-full object-cover mr-4" src={heroBg} alt="Seller B" />
          <div>
            <h4 className="text-lg font-semibold text-gray-800">John B.</h4>
            <p className="text-sm text-gray-500">Seller</p>
          </div>
        </div>
        <blockquote className="text-gray-700 italic">
          "MeetSells has been a game-changer for my small business. I can connect directly with customers, understand their needs, and build real relationships. Sales have definitely increased!"
        </blockquote>
      </div>

      {/* Add more testimonial cards here */}
    </div>

    <div className="mt-8 text-center">
      <p className="text-gray-600">
        Join our community of happy buyers and successful sellers.
      </p>
      {/* Optional: Link to a community page or signup */}
    </div>
  </div>
</section>
  )
}

export default Testimonials
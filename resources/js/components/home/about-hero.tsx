import { heroBg } from '@/types/image';
import React from 'react'
import AppNavbar from '../app-navbar';

function AboutHero() {
  return (
     <section className="relative w-full rounded-lg p-8 min-h-[300px] h-[40vh] max-h-[500px] overflow-hidden">
      {/* Background Image with a subtle overlay */}
      <img
        className="absolute inset-0 w-full h-full object-cover rounded-lg z-0"
        src={heroBg} // You might consider a different, more subdued image or a pattern here
        alt="About Us background"
      />
      {/* Optional: A subtle gradient overlay to differentiate from the main hero */}
      <div className="absolute inset-0 bg-gradient-to-t from-gray-900/60 to-transparent z-0 rounded-lg"></div>

      <AppNavbar />

      {/* Centered content for the About page */}
      <div className="relative z-10 flex flex-col items-center justify-center h-full text-white text-center px-4">
        <h1 className="text-5xl sm:text-7xl font-bold mb-2">About Us</h1>
        <p className="text-lg sm:text-xl font-medium max-w-2xl">
          Discover the story behind MeetSells and our mission to connect sellers and buyers.
        </p>
      </div>
    </section>
  );
}

export default AboutHero
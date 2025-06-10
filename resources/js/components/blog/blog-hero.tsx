// src/components/BlogHero.jsx
import React from 'react';
import AppNavbar from '../app-navbar'; // Assuming AppNavbar is in src/components
import { heroBg } from '@/types/image'; // Ensure this path is correct for your project

const BlogHero = () => {
  return (
    <section className="relative w-full rounded-lg p-8 min-h-[300px] h-[40vh] max-h-[500px] overflow-hidden">
      {/* Background Image - consistent with your brand */}
      <img
        className="absolute inset-0 w-full h-full object-cover rounded-lg z-0"
        src={heroBg}
        alt="Blog page background"
      />
      {/* Optional: A subtle gradient overlay, perhaps slightly less intense than the main hero */}
      <div className="absolute inset-0 bg-gradient-to-t from-gray-900/60 to-transparent z-0 rounded-lg"></div>

      <AppNavbar />

      {/* Centered content for the Blog page */}
      <div className="relative z-10 flex flex-col items-center justify-center h-full text-white text-center px-4">
        <h1 className="text-5xl sm:text-7xl font-bold mb-2">Our Blog</h1>
        <p className="text-lg sm:text-xl font-medium max-w-2xl">
          Insights, tips, and stories from the MeetSells community.
        </p>
      </div>
    </section>
  );
};

export default BlogHero;
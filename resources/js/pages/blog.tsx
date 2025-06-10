// src/pages/BlogPage.jsx
import AppFooter from '@/components/app-footer';
import BlogHero from '@/components/blog/blog-hero';
import BlogPostCard from '@/components/blog/blog-post-card';
import { Post } from '@/types/data';
import { heroBg } from '@/types/image';
import React from 'react';
// --- Dummy Data (Replace with real data fetching in a production app) ---
const dummyBlogPosts : Post[] = [
  {
    id: 'how-to-optimize-listings',
    title: '5 Ways to Optimize Your Product Listings for More Sales',
    excerpt: 'Learn essential tips to make your products stand out and attract more buyers on MeetSells. From compelling descriptions to eye-catching images, we cover it all.',
    imageUrl: heroBg,
    date: 'June 5, 2025',
    category: 'Seller Tips',
  },
  {
    id: 'meet-our-community-stars',
    title: 'Meet Our Community Stars: Featuring Sarah from "Crafty Corner"',
    excerpt: 'Discover the inspiring story of Sarah, a MeetSells seller who turned her passion for handmade crafts into a thriving business. Get her insights on connecting with buyers.',
    imageUrl: heroBg,
    date: 'May 28, 2025',
    category: 'Community',
  },
  {
    id: 'security-best-practices',
    title: 'Staying Safe: Best Practices for Secure Transactions',
    excerpt: 'Your safety is our priority. Read our guide on how to identify and avoid common scams, ensuring smooth and secure transactions on MeetSells.',
    imageUrl: heroBg,
    date: 'May 20, 2025',
    category: 'Safety',
  },
  {
    id: 'new-feature-spotlight',
    title: 'New Feature Spotlight: Enhanced Messaging for Sellers',
    excerpt: 'We\'re excited to announce our latest update! Our new messaging system makes communication with buyers even more efficient and user-friendly. Check it out!',
    imageUrl: heroBg,
    date: 'May 15, 2025',
    category: 'Updates',
  },
  {
    id: 'sustainable-selling-guide',
    title: 'The Green Path: A Guide to Sustainable Selling',
    excerpt: 'Explore how MeetSells empowers sellers to adopt eco-friendly practices, from packaging to sourcing, making a positive impact on the planet.',
    imageUrl: heroBg,
    date: 'May 10, 2025',
    category: 'Guides',
  },
  {
    id: 'unleash-your-inner-entrepreneur',
    title: 'Unleash Your Inner Entrepreneur with MeetSells',
    excerpt: 'Thinking of starting your own online business? MeetSells provides the tools and community support to help you get started and succeed.',
    imageUrl: heroBg,
    date: 'May 3, 2025',
    category: 'Inspiration',
  },
];
// --- End Dummy Data ---

const BlogPage = () => {
  return (
    <div className="min-h-screen flex flex-col bg-gray-50">
      {/* Blog Hero Section */}
      <BlogHero />

      {/* Main Blog Content Area */}
      <main className="flex-grow container mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <h2 className="text-4xl font-extrabold text-gray-900 text-center mb-10">
          Latest Articles
        </h2>

        {/* Blog Post Grid */}
        {dummyBlogPosts.length > 0 ? (
          <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            {dummyBlogPosts.map((post) => (
              <BlogPostCard key={post.id} post={post} />
            ))}
          </div>
        ) : (
          <p className="text-center text-gray-600 text-xl py-10">
            No blog posts found. Check back soon!
          </p>
        )}

        {/* Pagination (Placeholder - implement with state/API in real app) */}
        <div className="flex justify-center mt-12">
          <button className="px-6 py-3 mr-4 border border-gray-300 rounded-lg text-gray-700 hover:bg-gray-100 transition-colors">
            Previous
          </button>
          <button className="px-6 py-3 bg-[#dc530e] text-white rounded-lg hover:bg-[#c34824] transition-colors">
            Next
          </button>
        </div>

        {/* Optional: Categories/Tags Section */}
        <div className="mt-20 border-t border-gray-200 pt-12">
          <h3 className="text-3xl font-bold text-gray-900 text-center mb-8">
            Explore by Category
          </h3>
          <div className="flex flex-wrap justify-center gap-4">
            {['Seller Tips', 'Community', 'Safety', 'Updates', 'Guides', 'Inspiration'].map((category) => (
              <span
                key={category}
                className="px-6 py-2 bg-orange-100 text-orange-800 rounded-full text-lg font-medium cursor-pointer hover:bg-orange-200 transition-colors"
              >
                {category}
              </span>
            ))}
          </div>
        </div>
      </main>

      <AppFooter />
    </div>
  );
};

export default BlogPage;
// src/pages/BlogPostDetailsPage.jsx
import React, { FC } from 'react';
import { Head, Link } from '@inertiajs/react'; // <--- Import Head and Link from Inertia
import AppNavbar from '@/components/app-navbar';
import {BlogPostProps } from '@/types/data';
import { heroBg } from '@/types/image';
import AppFooter from '@/components/app-footer';

const allBlogPosts = [
  {
    id: 'how-to-optimize-listings',
    title: '5 Ways to Optimize Your Product Listings for More Sales',
    author: 'Marketing Team',
    date: 'June 5, 2025',
    category: 'Seller Tips',
    imageUrl: 'https://via.placeholder.com/1200x600/FF5733/FFFFFF?text=Product+Optimization+Detail',
    content: `
      <p class="mb-4">Welcome to the definitive guide on supercharging your product listings on MeetSells! In today's competitive marketplace, making your products shine is crucial. Here are five actionable strategies to help you convert more views into sales.</p>
      
      <h2 class="text-3xl font-bold text-gray-900 mb-4 mt-8">1. Compelling Product Titles</h2>
      <p class="mb-4">Your title is the first thing buyers see. Make it clear, concise, and descriptive. Include keywords buyers might search for, but avoid keyword stuffing. Think about what makes your product unique.</p>
      <ul class="list-disc list-inside mb-4 ml-4">
        <li><strong>Be Specific:</strong> Instead of "Dress," try "Handmade Bohemian Summer Dress."</li>
        <li><strong>Highlight Key Features:</strong> "Wireless Noise-Cancelling Headphones with 30-Hour Battery."</li>
        <li><strong>Use Emojis (Sparingly):</strong> A small, relevant emoji can catch the eye.</li>
      </ul>

      <h2 class="text-3xl font-bold text-gray-900 mb-4 mt-8">2. High-Quality Images & Video</h2>
      <p class="mb-4">A picture is worth a thousand words, especially in e-commerce. Professional, well-lit photos from multiple angles are non-negotiable. Consider adding a short video to showcase product features or demonstrations.</p>
      <p class="mb-4"><em>Tip:</em> Use all available image slots. Show details, scale (e.g., product in hand), and lifestyle shots.</p>

      <h2 class="text-3xl font-bold text-gray-900 mb-4 mt-8">3. Detailed and Benefit-Oriented Descriptions</h2>
      <p class="mb-4">Beyond features, tell buyers how your product benefits them. What problem does it solve? What experience does it offer? Use bullet points for readability and break up long paragraphs.</p>
      <p class="mb-4">Focus on the "why" and "how" the product improves their life.</p>

      <h2 class="text-3xl font-bold text-gray-900 mb-4 mt-8">4. Strategic Keyword Integration</h2>
      <p class="mb-4">While titles are key, don't forget to naturally weave relevant keywords into your product description. This helps with search engine optimization (SEO) within MeetSells and external search engines.</p>
      <p class="mb-4">Think like a buyer: What phrases would you use to find this product?</p>

      <h2 class="text-3xl font-bold text-gray-900 mb-4 mt-8">5. Competitive Pricing & Transparent Shipping</h2>
      <p class="mb-4">Research similar products to set a competitive price. Be transparent about shipping costs and delivery times upfront. Hidden fees are a major turn-off.</p>
      <p class="mb-4">Offering different shipping options can also be a plus.</p>

      <p class="mt-8 mb-4">By implementing these five strategies, you'll be well on your way to crafting product listings that not only look great but also drive significant sales. Happy selling!</p>
    `,
  },
  {
    id: 'meet-our-community-stars',
    title: 'Meet Our Community Stars: Featuring Sarah from "Crafty Corner"',
    author: 'Community Relations',
    date: 'May 28, 2025',
    category: 'Community',
    imageUrl: 'https://via.placeholder.com/1200x600/33FF57/FFFFFF?text=Community+Story+Detail',
    content: `
      <p class="mb-4">Today, we're thrilled to introduce you to Sarah, the creative mind behind "Crafty Corner," a beloved shop on MeetSells. Sarah specializes in handmade personalized gifts, and her dedication to unique creations and excellent customer service has made her a true community star.</p>

      <h2 class="text-3xl font-bold text-gray-900 mb-4 mt-8">Sarah's Journey</h2>
      <p class="mb-4">"I started Crafty Corner as a hobby," Sarah shares. "I loved making custom gifts for friends and family, and soon realized there was a demand for truly personalized items. MeetSells provided the perfect platform for me to reach a wider audience without the overhead of a traditional store."</p>
      
      <h2 class="text-3xl font-bold text-gray-900 mb-4 mt-8">The Crafty Corner Difference</h2>
      <p class="mb-4">What sets Crafty Corner apart is Sarah's meticulous attention to detail and her commitment to sourcing sustainable materials. "Every item has a piece of my heart in it," she says. "From custom pet portraits to engraved wooden keepsakes, I ensure quality and uniqueness."</p>

      <h2 class="text-3xl font-bold text-gray-900 mb-4 mt-8">Advice for New Sellers</h2>
      <p class="mb-4">When asked for advice for aspiring MeetSells entrepreneurs, Sarah emphasized consistency and communication. "Engage with your customers, be responsive, and consistently deliver high-quality products. Your passion will shine through!"</p>

      <p class="mt-8 mb-4">We're incredibly proud to have sellers like Sarah in our community. Visit Crafty Corner today and discover her beautiful creations!</p>
    `,
  },
];

const content = `<p class="mb-4">Welcome to the definitive guide on supercharging your product listings on MeetSells! In today's competitive marketplace, making your products shine is crucial. Here are five actionable strategies to help you convert more views into sales.</p>
      
      <h2 class="text-3xl font-bold text-gray-900 mb-4 mt-8">1. Compelling Product Titles</h2>
      <p class="mb-4">Your title is the first thing buyers see. Make it clear, concise, and descriptive. Include keywords buyers might search for, but avoid keyword stuffing. Think about what makes your product unique.</p>
      <ul class="list-disc list-inside mb-4 ml-4">
        <li><strong>Be Specific:</strong> Instead of "Dress," try "Handmade Bohemian Summer Dress."</li>
        <li><strong>Highlight Key Features:</strong> "Wireless Noise-Cancelling Headphones with 30-Hour Battery."</li>
        <li><strong>Use Emojis (Sparingly):</strong> A small, relevant emoji can catch the eye.</li>
      </ul>

      <h2 class="text-3xl font-bold text-gray-900 mb-4 mt-8">2. High-Quality Images & Video</h2>
      <p class="mb-4">A picture is worth a thousand words, especially in e-commerce. Professional, well-lit photos from multiple angles are non-negotiable. Consider adding a short video to showcase product features or demonstrations.</p>
      <p class="mb-4"><em>Tip:</em> Use all available image slots. Show details, scale (e.g., product in hand), and lifestyle shots.</p>

      <h2 class="text-3xl font-bold text-gray-900 mb-4 mt-8">3. Detailed and Benefit-Oriented Descriptions</h2>
      <p class="mb-4">Beyond features, tell buyers how your product benefits them. What problem does it solve? What experience does it offer? Use bullet points for readability and break up long paragraphs.</p>
      <p class="mb-4">Focus on the "why" and "how" the product improves their life.</p>

      <h2 class="text-3xl font-bold text-gray-900 mb-4 mt-8">4. Strategic Keyword Integration</h2>
      <p class="mb-4">While titles are key, don't forget to naturally weave relevant keywords into your product description. This helps with search engine optimization (SEO) within MeetSells and external search engines.</p>
      <p class="mb-4">Think like a buyer: What phrases would you use to find this product?</p>

      <h2 class="text-3xl font-bold text-gray-900 mb-4 mt-8">5. Competitive Pricing & Transparent Shipping</h2>
      <p class="mb-4">Research similar products to set a competitive price. Be transparent about shipping costs and delivery times upfront. Hidden fees are a major turn-off.</p>
      <p class="mb-4">Offering different shipping options can also be a plus.</p>

      <p class="mt-8 mb-4">By implementing these five strategies, you'll be well on your way to crafting product listings that not only look great but also drive significant sales. Happy selling!</p>
`;

// In an Inertia app, `post` would be passed directly as a prop from the Laravel controller
const BlogPostDetailsPage: FC<BlogPostProps> = ({ post }) => {
  // If `post` is null or undefined (e.g., if a Laravel controller didn't find the post),
  // you might render a 404 page or a loading state. Inertia usually handles this
  // by directing to a 404 page directly from Laravel if the resource isn't found.
  if (!post) {
    return (
      <div className="min-h-screen flex flex-col items-center justify-center bg-gray-50">
        <AppNavbar />
        <p className="text-xl text-gray-700">Blog post not found.</p>
        <Link
          href="/blog" // Use Inertia Link
          className="mt-4 px-6 py-2 bg-[#dc530e] text-white rounded-lg hover:bg-[#c34824] transition-colors"
        >
          Back to Blog
        </Link>
      </div>
    );
  }

  return (
    <div className="min-h-screen flex flex-col bg-gray-50">
      <Head title={`${post.title} | MeetSells Blog`} /> {/* <--- Inertia Head component for SEO */}

      <AppNavbar />

      <main className="flex-grow container mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <article className="bg-white rounded-lg shadow-md p-6 md:p-10 lg:p-12 mb-8">
          {/* Post Header */}
          <header className="mb-8">
            <h1 className="text-4xl md:text-5xl font-extrabold text-gray-900 leading-tight mb-4">
              {post.title}
            </h1>
            <div className="text-gray-600 text-lg mb-4">
              By <span className="font-semibold">{post.author}</span> on{' '}
              <span className="font-semibold">{post.date}</span>
              {post.category && (
                <span className="ml-4 px-3 py-1 bg-orange-100 text-orange-800 rounded-full text-sm font-medium">
                  {post.category}
                </span>
              )}
            </div>
            {post.imageUrl && (
              <img
                src={heroBg}
                alt={post.title}
                className="w-full h-auto max-h-96 object-cover rounded-lg mt-6 mb-8 shadow-sm"
              />
            )}
          </header>

          {/* Post Content */}
          <div
            className="prose prose-lg max-w-none text-gray-800 leading-relaxed"
            dangerouslySetInnerHTML={{ __html: content }}
          >
            {/* The actual blog post content will be injected here */}
          </div>
        </article>

        {/* Back to Blog Button */}
        <div className="text-center mt-10">
          <Link
            href="/blog" // <--- Use Inertia Link component
            className="inline-flex items-center px-8 py-3 bg-[#dc530e] text-white rounded-lg font-semibold hover:bg-[#c34824] transition-colors duration-300 shadow-md"
          >
            &larr; Back to Blog
          </Link>
        </div>
      </main>
      <AppFooter />

    </div>
  );
};

export default BlogPostDetailsPage;
import { ProductItem } from "@/types";
import { heroBg } from "@/types/image";
import React, { useState } from 'react';
import { GlassmorphicCard, NeumorphicButton } from "../glassmorphic";

// Sample data for best-selling products (replace with your actual data fetching)
const bestSellers = [
  {
    id: 1,
    name: 'Translucent Wireless Earbuds',
    image: heroBg,
    price: 129.99,
    rating: 4.7,
    reviewCount: 92,
  },
  {
    id: 2,
    name: 'Soft-Touch Ergonomic Mouse',
    image: heroBg,
    price: 49.00,
    rating: 4.6,
    reviewCount: 75,
  },
  {
    id: 3,
    name: 'Frosted Glass Water Bottle',
    image: heroBg,
    price: 25.00,
    rating: 4.9,
    reviewCount: 110,
  },
];

// Sample featured product data
const featuredProduct = {
  id: 'featured',
  name: 'The Ultimate Smart Speaker with Ambient Display',
  image: heroBg,
  price: 299.00,
  discount: 0.15, // 15% discount
  rating: 4.8,
  reviewCount: 215,
  description:
    'Experience crystal-clear audio and a vibrant ambient display with our latest smart speaker. Integrates seamlessly with your smart home ecosystem.',
};

const ProductCard = ({ product }: { product: ProductItem }) => {
  const [isHovered, setIsHovered] = useState(false);

  return (
    <div
      className={`relative rounded-lg overflow-hidden transition-shadow duration-300 shadow-md hover:shadow-lg ${isHovered ? 'scale-105 transition-transform duration-500' : 'scale-100  transition-transform duration-500'}`}
      onMouseEnter={() => setIsHovered(true)}
      onMouseLeave={() => setIsHovered(false)}
    >
      <div className="relative aspect-w-3 aspect-h-2">
        <img src={product.image} alt={product.name} className="w-full h-full object-cover" />
        <div className="absolute inset-0 bg-black/20 opacity-0 transition-opacity duration-300 hover:opacity-100 flex items-center justify-center">
          <NeumorphicButton>View</NeumorphicButton>
        </div>
      </div>
      <div className="bg-gray-50 p-4">
        <h3 className="text-sm font-semibold text-gray-800 mb-1">{product.name}</h3>
        <p className="text-gray-700 font-bold text-sm">${product.price.toFixed(2)}</p>
        <div className="flex items-center mt-1 text-xs text-gray-500">
          {[...Array(Math.floor(product.rating))].map((_, i) => (
            <svg key={i} className="w-3 h-3 text-yellow-500 fill-current mr-1/2" viewBox="0 0 20 20">
              <path d="M10 15l-5.878 3.09 1.176-6.545L.587 6.951h6.545L10 0l2.868 6.951h6.545L14.7 11.545l1.176 6.545z" />
            </svg>
          ))}
          <span>({product.reviewCount})</span>
        </div>
      </div>
    </div>
  );
};

const FeaturedProductCard = ({ product }: { product: typeof featuredProduct }) => {
  return (
    <GlassmorphicCard className="relative overflow-hidden md:col-span-2">
      <div className="relative aspect-w-16 aspect-h-9 md:aspect-h-4">
        <img src={product.image} alt={product.name} className="w-full h-full object-cover" />
        {product.discount && (
          <div className="absolute top-4 left-4 bg-gradient-to-br from-purple-600 to-indigo-600 text-white text-sm font-semibold rounded-md px-3 py-1 shadow-md">
            -{Math.round(product.discount * 100)}%
          </div>
        )}
      </div>
      <div className="absolute bottom-0 left-0 right-0 bg-white/30 backdrop-blur-md p-6">
        <h2 className="text-xl font-bold text-gray-900 mb-2">{product.name}</h2>
        <p className="text-gray-700 text-sm mb-3 line-clamp-2">{product.description}</p>
        <div className="flex items-center justify-between">
          <div>
            <p className="text-lg font-bold text-indigo-700">${(product.price * (1 - (product.discount || 0))).toFixed(2)} <span className="line-through text-gray-500 text-sm">${product.price.toFixed(2)}</span></p>
            <div className="flex items-center mt-1 text-sm text-gray-500">
              {[...Array(Math.floor(product.rating))].map((_, i) => (
                <svg key={i} className="w-4 h-4 text-yellow-500 fill-current mr-1/2" viewBox="0 0 20 20">
                  <path d="M10 15l-5.878 3.09 1.176-6.545L.587 6.951h6.545L10 0l2.868 6.951h6.545L14.7 11.545l1.176 6.545z" />
                </svg>
              ))}
              <span>({product.reviewCount})</span>
            </div>
          </div>
          <NeumorphicButton className="hover:bg-greenish hover:text-white">Details</NeumorphicButton>
        </div>
      </div>
    </GlassmorphicCard>
  );
};

const BestSellersWithFeatured = () => (
  <div className="bg-gray-100 py-10">
    <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <h2 className="text-2xl font-bold text-gray-900 mb-6">Featured & Best Sellers</h2>
      <div className="grid grid-cols-1 md:grid-cols-3 gap-6">
        <FeaturedProductCard product={featuredProduct} />
        <div className="grid grid-cols-1 sm:grid-cols-2 gap-4">
          {bestSellers.map((product) => (
            <ProductCard key={product.id} product={product} />
          ))}
        </div>
      </div>
      <div className="mt-8 text-center">
        <NeumorphicButton>Explore All</NeumorphicButton>
      </div>
    </div>
  </div>
);

export default BestSellersWithFeatured;
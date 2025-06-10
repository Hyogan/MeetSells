    // src/components/BlogPostCard.jsx
    import React from 'react';
    import Link from '../link';
    import { BlogPostCardProps } from '@/types/data';


    const BlogPostCard : React.FC<BlogPostCardProps> = ( {post}) => {
    const { id, title, excerpt, imageUrl, date, category } = post;

    return (
        <div className="bg-white rounded-lg shadow-md hover:shadow-xl transition-shadow duration-300 overflow-hidden">
        <Link href={`/blog/${id}`} className="block">
            <img
            src={imageUrl}
            alt={title}
            className="w-full h-48 object-cover rounded-t-lg"
            />
            <div className="p-6">
            {category && (
                <span className="text-sm text-gray-500 font-semibold uppercase mb-2 block">
                {category}
                </span>
            )}
            <h3 className="text-2xl font-bold text-gray-900 mb-3 leading-tight">
                {title}
            </h3>
            <p className="text-gray-700 mb-4 text-base line-clamp-3">
                {excerpt}
            </p>
            <div className="flex justify-between items-center text-gray-600 text-sm">
                <span>{date}</span>
                <span className="font-semibold text-[#dc530e] hover:underline">
                Read more &rarr;
                </span>
            </div>
            </div>
        </Link>
        </div>
    );
    };

    export default BlogPostCard;
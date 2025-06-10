// src/components/AppFooter.jsx
import React from 'react';
import { FaFacebookF, FaTwitter, FaInstagram, FaLinkedinIn } from 'react-icons/fa';
import { Link } from '@inertiajs/react'; // For Inertia.js links

const AppFooter = () => {
  return (
    <footer className="bg-gray-800 text-gray-300 py-10">
      <div className="container mx-auto px-4 sm:px-6 lg:px-8">
        <div className="grid grid-cols-1 md:grid-cols-4 gap-8 mb-8">
          {/* Column 1: Logo & Tagline */}
          <div className="flex flex-col items-center md:items-start text-center md:text-left">
            <Link href="/" className="text-3xl font-bold text-white mb-2">
              MeetSells
            </Link>
            <p className="text-sm text-gray-400">
              Connecting sellers and buyers, one joyful transaction at a time.
            </p>
          </div>

          {/* Column 2: Quick Links */}
          <div>
            <h3 className="text-xl font-semibold text-white mb-4 text-center md:text-left">Quick Links</h3>
            <ul className="text-center md:text-left space-y-2">
              <li>
                <Link href="/" className="hover:text-[#dc530e] transition-colors duration-200 text-lg">
                  Home
                </Link>
              </li>
              <li>
                <Link href="/about" className="hover:text-[#dc530e] transition-colors duration-200 text-lg">
                  About Us
                </Link>
              </li>
              <li>
                <Link href="/blog" className="hover:text-[#dc530e] transition-colors duration-200 text-lg">
                  Blog
                </Link>
              </li>
              <li>
                <Link href="/contact" className="hover:text-[#dc530e] transition-colors duration-200 text-lg">
                  Contact
                </Link>
              </li>
            </ul>
          </div>

          {/* Column 3: Legal & Resources */}
          <div>
            <h3 className="text-xl font-semibold text-white mb-4 text-center md:text-left">Resources</h3>
            <ul className="text-center md:text-left space-y-2">
              <li>
                <Link href="/terms" className="hover:text-[#dc530e] transition-colors duration-200 text-lg">
                  Terms of Service
                </Link>
              </li>
              <li>
                <Link href="/privacy" className="hover:text-[#dc530e] transition-colors duration-200 text-lg">
                  Privacy Policy
                </Link>
              </li>
              <li>
                <Link href="/faq" className="hover:text-[#dc530e] transition-colors duration-200 text-lg">
                  FAQs
                </Link>
              </li>
              <li>
                <Link href="/sellers-guide" className="hover:text-[#dc530e] transition-colors duration-200 text-lg">
                  Seller's Guide
                </Link>
              </li>
            </ul>
          </div>

          {/* Column 4: Social Media & Contact */}
          <div className="text-center md:text-left">
            <h3 className="text-xl font-semibold text-white mb-4">Connect With Us</h3>
            <div className="flex justify-center md:justify-start space-x-6 mb-4">
              <a href="https://facebook.com/meetsells" target="_blank" rel="noopener noreferrer" aria-label="Facebook">
                <FaFacebookF size={24} className="hover:text-[#dc530e] transition-colors duration-200" />
              </a>
              <a href="https://twitter.com/meetsells" target="_blank" rel="noopener noreferrer" aria-label="Twitter">
                <FaTwitter size={24} className="hover:text-[#dc530e] transition-colors duration-200" />
              </a>
              <a href="https://instagram.com/meetsells" target="_blank" rel="noopener noreferrer" aria-label="Instagram">
                <FaInstagram size={24} className="hover:text-[#dc530e] transition-colors duration-200" />
              </a>
              <a href="https://linkedin.com/company/meetsells" target="_blank" rel="noopener noreferrer" aria-label="LinkedIn">
                <FaLinkedinIn size={24} className="hover:text-[#dc530e] transition-colors duration-200" />
              </a>
            </div>
            <p className="text-sm">Email: <a href="mailto:info@meetsells.com" className="hover:text-[#dc530e] transition-colors duration-200">info@meetsells.com</a></p>
          </div>
        </div>

        {/* Copyright */}
        <div className="border-t border-gray-700 pt-6 text-center text-gray-500 text-sm">
          &copy; {new Date().getFullYear()} MeetSells. All rights reserved.
        </div>
      </div>
    </footer>
  );
};

export default AppFooter;
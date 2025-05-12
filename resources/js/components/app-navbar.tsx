import React, { useState } from 'react'
import {FaRegHeart, FaSearch, FaShoppingCart} from "react-icons/fa";
import {FiMenu} from "react-icons/fi"
// import {HiOutlin}
interface AppNavItem {
  id: number,
  title: string,
  href: string
}
const AppNavbar = () => {

  const [isMobileMenuOpen,setIsMobileMenuOpen] = useState<boolean>(false);
  const [cartItemCount, setCartItemCount] = useState(4);
  const toggleMobileMenu = () => {
    setIsMobileMenuOpen(!isMobileMenuOpen);
  };

  const urls: AppNavItem[] = [
      {id: 1, title: 'home', href: 'home'},
      {id: 2, title: 'shop', href: 'home'},
      {id: 3, title: 'about', href: 'home'},
      {id: 4, title: 'blog', href: 'home'},
  ]
  return (
    <div className="
         flex max-w-full 
        bg-[#eeeeee]  rounded-full px-4 py-2 relative z-10 top-2">
        <div className="desktop-menu hidden  w-full sm:flex px-4  items-center justify-between ">
          <div className="left-side w-fit flex items-center gap-4">
                    <h1 className="font-semibold text-xl text-gray-800">Meet<span className="text-greenish font-bold">Sells</span></h1>
                    <ul className="flex items-center gap-4">
                      {urls.map(link => (
                        <li key={link.id} className="text-greenish hover:text-secondary-o text-lg">
                          <a href={link.href}>
                            {link.title}
                          </a>
                        </li>
                      ))}
                    </ul>
          </div>
          <div className="right-side text-greenish icons flex items-center gap-4">
            <a href="login" className="">log in</a>
            <FaSearch size={20} className="mr-1 text-greenish font-extralight"/>
            <div className="flex items-center">
              <FaRegHeart size={20} className="mr-1" />
              <div className="relative">
                  {/* Shopping cart icon */}
                  <FaShoppingCart size={20} className="mr-1" />
                  {/* Cart item count badge */}
                  {cartItemCount > 0 && (
                    <span className="absolute top-[-10px] right-[-10px] w-6 h-6 text-center rounded-full text-white bg-greenish text-xs flex items-center justify-center">
                      {cartItemCount}
                    </span>
                  )}
              </div>
            </div>
          </div>
        </div>
        <div className="mobile-menu w-full flex sm:hidden  items-center justify-between">
          <h1>MEETSELLS</h1>
          <div className="flex items-center gap-2">
              <span className="w-6  h-6 text-center rounded-full text-white bg-greenish">0</span>
              {/* Replaced FaHamburger with HiOutlineMenu and added toggle functionality */}
              <div className="cursor-pointer" onClick={toggleMobileMenu}>
                <FiMenu
                  size={24}
                  className={`text-greenish transition-transform duration-300 ${
                    isMobileMenuOpen ? 'transform rotate-90' : ''
                  }`}
                />
              </div>
          </div>
        </div>
        <div
        className={`absolute top-full left-0 w-full bg-[#eeeeee]  rounded-lg shadow-md overflow-hidden transition-max-h duration-300 ease-in-out ${
          isMobileMenuOpen ? 'max-h-96 py-4' : 'max-h-0 py-0'
        }`}
      >
        <ul className="flex flex-col items-center gap-4 p-4">
          {urls.map(link => (
            <li key={link.id} className="text-greenish hover:text-secondary-o text-lg">
              <a href={link.href}>{link.title}</a>
            </li>
          ))}
          {/* Added mobile-specific links and icons */}
          <div className="flex flex-col items-center gap-4 mt-4">
            <a href="login" className="block py-2">
              log in
            </a>
            <div className="flex items-center">
              <FaSearch size={20} className="mr-1 font-extralight" />
            </div>
              {/* Item count and shopping cart */}
              <div className="flex items-center">
                <FaRegHeart size={20} className="mr-1" />
                <div className="relative">
                  {/* Shopping cart icon */}
                  <FaShoppingCart size={20} className="mr-1" />
                  {/* Cart item count badge */}
                  {cartItemCount > 0 && (
                    <span className="absolute top-[-8px] right-[-8px] w-6 h-6 text-center rounded-full text-white bg-greenish text-xs flex items-center justify-center">
                      {cartItemCount}
                    </span>
                  )}
                </div>
            </div>
          </div>
        </ul>
      </div>
    
    </div>
  )
}

export default AppNavbar
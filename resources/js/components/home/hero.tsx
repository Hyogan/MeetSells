import React from 'react'
import AppNavbar from "../app-navbar"
import { heroBg } from "@/types/image"
import { FaShoppingCart } from "react-icons/fa"

const Hero = () => {
  return (
    // <div className="w-full rounded-lg relative p-8 bg-gradient-to-r min-h-screen from-[#c34824] via-[#cd4f1e] to-[#dc530e] h-full min-w-full">
    <section className="w-full rounded-lg relative p-8 min-h-screen h-full min-w-full">
        <AppNavbar />
        <img className="absolute inset-0 w-full  h-full object-cover rounded-lg z-0" src={heroBg}></img>
        <div className="text-white absolute z-1 bottom-20 left-2 md:left-14 flex flex-col gap-2">
              <h1 className="text-7xl sm:text-9xl font-bold">MeetSells</h1>
              <p className="text-white font-semibold  text-lg sm:text-xl">
                We're Bringing Back the Joy of Connecting with Sellers.
              </p>
              <p className="text-white font-medium text-md sm:text-lg">Connect directly, sell effortlessly, and grow your business.</p>
              <button className="w-fit cursor-pointer flex items-center gap-1 font-semibold hover:border-greenish transition duration-700 hover:bg-greenish hoover:text-white text-white border border-white rounded-lg px-14 py-2 text-center">
                <FaShoppingCart size={20}/>
                Shop now
              </button>
        </div>
    </section>
  )
}

export default Hero
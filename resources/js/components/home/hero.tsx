import React from 'react'
import AppNavbar from "../app-navbar"
import { heroBg } from "@/types/image"

const Hero = () => {
  return (
    // <div className="w-full rounded-lg relative p-8 bg-gradient-to-r min-h-screen from-[#c34824] via-[#cd4f1e] to-[#dc530e] h-full min-w-full">
    <div className="w-full rounded-lg relative p-8 min-h-screen h-full min-w-full">
        <AppNavbar />
        <img className="absolute inset-0 w-full  h-full object-cover rounded-lg z-0" src={heroBg}></img>
        <div className="text-white absolute z-1 bottom-20 left-2 md:left-14 gap-2">
              <h1 className="text-7xl sm:text-9xl font-bold">Shine On</h1>
              <p className="text-white font-semibold  text-lg sm:text-xl">Beauty that reflects your spirit</p>
              <button className="cursor-pointer font-semibold hover:border-greenish transition duration-700 hover:bg-greenish hoover:text-white text-white border border-white rounded-lg px-14 py-2 text-center">Shop now</button>
        </div>
    </div>
  )
}

export default Hero
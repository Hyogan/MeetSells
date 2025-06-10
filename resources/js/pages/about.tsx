import AboutHero from '@/components/home/about-hero';
import AddedValue from '@/components/home/added-value';
import Benefits from '@/components/home/benefits';
import Features from '@/components/home/features';
import Hero from '@/components/home/hero';
import React from 'react'

function About() {
  return (
     <div className="w-full bg-gray-300 p-4 md:p-6">
            <div className="relative h-full min-w-full">
                <AboutHero />
            </div>
            <Benefits />
            <AddedValue />
            
            {/* <Features /> */}
            {/* <Testimonials /> */}
        </div>
  )
}

export default About;
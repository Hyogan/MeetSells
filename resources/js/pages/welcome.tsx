// import { type SharedData } from '@/types';
// import { Head, Link, usePage } from '@inertiajs/react';

// import { AppHeader } from "@/components/app-header";
import BestSellers from "@/components/home/best-sellers";
import Hero from "@/components/home/hero";
// import Hero from "@/components/home/hero";

export default function Welcome() {
    // const { auth } = usePage<SharedData>().props;

    return (
        <div className="w-full bg-gray-300 p-4 md:p-6">
            <div className="relative  min-h-screen h-full min-w-full">
                <Hero />
            </div>
            <BestSellers />
        </div>
    );
}

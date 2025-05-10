// import { type SharedData } from '@/types';
// import { Head, Link, usePage } from '@inertiajs/react';

// import { AppHeader } from "@/components/app-header";
import Hero from "@/components/home/hero";
// import Hero from "@/components/home/hero";

export default function Welcome() {
    // const { auth } = usePage<SharedData>().props;

    return (
        <>
            <div className="w-full p-4 relative bg-gray-300 min-h-screen  h-full min-w-full">
                <Hero />
            </div>
        </>
    );
}

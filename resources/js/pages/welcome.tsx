// import { type SharedData } from '@/types';
// import { Head, Link, usePage } from '@inertiajs/react';

import { AppHeader } from "@/components/app-header";
import Hero from "@/components/home/hero";

export default function Welcome() {
    // const { auth } = usePage<SharedData>().props;

    return (
        <>
            <div className="w-full min-h-full min-w-full">
                <AppHeader />
                <Hero />
            </div>
        </>
    );
}

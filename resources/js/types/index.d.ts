import { LucideIcon } from 'lucide-react';
import type { Config } from 'ziggy-js';

interface Auth {
    user: User;
}

interface BreadcrumbItem {
    title: string;
    href: string;
}

interface NavGroup {
    title: string;
    items: NavItem[];
}

interface NavItem {
    title: string;
    href: string;
    icon?: LucideIcon | null;
    isActive?: boolean;
}

interface SharedData {
    name: string;
    quote: { message: string; author: string };
    auth: Auth;
    ziggy: Config & { location: string };
    sidebarOpen: boolean;
    [key: string]: unknown;
}

interface User {
    id: number;
    name: string;
    email: string;
    avatar?: string;
    email_verified_at: string | null;
    created_at: string;
    updated_at: string;
    [key: string]: unknown; // This allows for additional properties...
}



interface ProductItem {
    id: number, 
    name: string,
    price: number,
    rating: number,
    reviewCount: number,
    image: string
}



export {
    ProductItem,
    BreadcrumbItem,SharedData,NavGroup
}
  
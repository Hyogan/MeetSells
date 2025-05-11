import { MouseEventHandler, ReactNode } from "react";

interface GlassmorphicCardProps {
    children: ReactNode;
    className?: string;
    onMouseEnter?: React.MouseEventHandler<HTMLDivElement>;
    onMouseLeave?: React.MouseEventHandler<HTMLDivElement>;
}

interface NeumorphicButtonProps {
    children: ReactNode;
    onClick?: MouseEventHandler<HTMLButtonElement>; // Make onClick optional
    className?: string; // Make className optional
}

  
  const GlassmorphicCard = ({ children, className, onMouseEnter, onMouseLeave }: GlassmorphicCardProps) => (
    <div
      className={`bg-white/20 backdrop-blur-md cursor-pointer rounded-xl shadow-lg border border-white/30 ${className}`}
      onMouseEnter={onMouseEnter}
      onMouseLeave={onMouseLeave}
    >
      {children}
    </div>
  );
  
  const NeumorphicButton = ({ children, onClick,className }: NeumorphicButtonProps) => (
    <button
      onClick={onClick}
      className={`bg-gray-100 cursor-pointer rounded-md shadow-md hover:shadow-lg focus:outline-none active:shadow-sm transition duration-200 
                    ease-in-out px-4 py-2 text-gray-700 font-semibold ${className ?? ''}`}
    >
      {children}
    </button>
);

  
export {
    NeumorphicButton,
    GlassmorphicCard
}
import React from 'react';

interface LinkProps extends React.AnchorHTMLAttributes<HTMLAnchorElement> {
  href: string;
  children: React.ReactNode;
}

/**
 * A basic Link component similar to Next.js's <Link>, 
 * without any routing system. Just wraps an anchor tag.
 */
const Link: React.FC<LinkProps> = ({
  href,
  children,
  target,
  rel,
  ...props
}) => {
  const isExternal = /^https?:\/\//.test(href) || href.startsWith('mailto:') || href.startsWith('tel:');

  const finalRel = target === '_blank' && !rel?.includes('noopener') ? 'noopener noreferrer' : rel;

  return (
    <a
      href={href}
      target={target}
      rel={finalRel}
      {...props}
    >
      {children}
    </a>
  );
};

export default Link;

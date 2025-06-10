export interface Post  {
    id: string,
    title: string,
    excerpt: string,
    imageUrl: string,
    date: string,
    category: string
}
export interface BlogPostProps {
        post: Post & { author: string, content: string}
}


export interface BlogPostCardProps  {
    post: Post ;
}

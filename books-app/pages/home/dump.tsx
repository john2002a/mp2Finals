import type { InferGetStaticPropsType, GetStaticProps } from 'next'
 
type Repo = {
  name: string
  stargazers_count: number
}
 
export const getStaticProps: GetStaticProps<{
  repo: Repo
}> = async () => {
  const res = await fetch('https://api.github.com/repos/vercel/next.js')
  const repo = await res.json()
  return { props: { repo } }
}
 
export default function Home({
  repo,
}: InferGetStaticPropsType<typeof getStaticProps>) {
//   return repo.stargazers_count
console.log(repo)
}
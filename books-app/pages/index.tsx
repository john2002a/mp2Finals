import Home from "./home/index";
import useSWR from 'swr';
import fetcher from "@/lib/fetcher";
import { formatBooks } from "@/formatters/books";


export default function Index(){
    const { data, error } = useSWR('http://localhost:8000/api/findAll', fetcher)
    return(
        <Home books={formatBooks(data)}/>
    )
}

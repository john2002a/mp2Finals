import { Button } from "../atoms/button/Button"
import Link from 'next/link'

export default function NavBar(){
    return(
        <>
            <div className="navbar bg-base-100 bg-gradient-to-r from-[#520091] via-[#bf00a5] to-[#57005c] py-0">
                <div className="flex-col place-items-start pl-8">
                    <figure className="w-4/6 pl-3"><img src="/images/BOOK.png" alt="car!"/></figure>
                    <div className="text-3xl font-semibold text-white pl-8">Get lost in a great book <br></br> and explore a new world!</div>
                    <div className="pt-10 text-lg text-white pl-8">Looking for an escape from reaity? Our books offer 
                        <br></br>a gateway to a new an exciting worlds filled with
                        <br></br>adventure, mystery, and wonder.
                    </div>
                </div>
                <figure className="w-4/6 justify-self-end"><img src="/images/bg2.png" alt="car!"/></figure>
            </div>
        </>
    )
}
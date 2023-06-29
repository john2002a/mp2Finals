import Navbar from "./navbar";
import {ReactNode} from 'react';
import Footer from "./foooter";

interface LayoutProps {
    children?: ReactNode
}

export default function Layout({ children }: LayoutProps) {
    return(
        <>
            <Navbar />
            <main>{children}</main>
            <Footer/>
        </>
    )
}

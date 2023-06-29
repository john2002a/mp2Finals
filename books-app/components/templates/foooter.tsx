

export default function Footer(){
    return(
        <>
           <footer className="footer p-10 bg-base-200 bg-gradient-to-r from-[#4a0982] to-[#1e0451] text-base-content">
                <div>
                    <figure className="w-1/5 pl-3"><img src="/images/booklogo.png" alt="car!"/></figure>
                    <div className="text-white pl-4">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        <br></br>Numquam debitis corrupti magnam nisi deleniti, rerum
                        <br></br>cumque nostrum quod nesciunt non. Laudantium beatae,
                        <br></br>aliquam quaerat magnam libero aut atque deserunt molestiae?
                    </div>
                </div>
                <div>
                    <span className="footer-title text-white">Resources</span> 
                    <a className="link link-hover text-white">&gt; Branding</a> 
                    <a className="link link-hover text-white">&gt; Design</a> 
                    <a className="link link-hover text-white">&gt; Marketing</a> 
                    <a className="link link-hover text-white">&gt; Advertisement</a>
                </div> 
                <div>
                    <span className="footer-title text-white">Company</span> 
                    <a className="link link-hover text-white">&gt; Careers</a> 
                    <a className="link link-hover text-white">&gt; About us</a> 
                    <a className="link link-hover text-white">&gt; Contact Us</a> 
                    <a className="link link-hover text-white">&gt; Store Finder</a>
                    <a className="link link-hover text-white">&gt; Testimonial</a>
                </div> 
                <div>
                    <span className="footer-title text-white">Social Media</span> 
                    <div className="md:place-self-center md:justify-self-end">
                        <div className="grid grid-flow-col gap-4">
                        <a><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 16 16" className="fill-white"><path d="M15.545 6.558a9.42 9.42 0 0 1 .139 1.626c0 2.434-.87 4.492-2.384 5.885h.002C11.978 15.292 10.158 16 8 16A8 8 0 1 1 8 0a7.689 7.689 0 0 1 5.352 2.082l-2.284 2.284A4.347 4.347 0 0 0 8 3.166c-2.087 0-3.86 1.408-4.492 3.304a4.792 4.792 0 0 0 0 3.063h.003c.635 1.893 2.405 3.301 4.492 3.301 1.078 0 2.004-.276 2.722-.764h-.003a3.702 3.702 0 0 0 1.599-2.431H8v-3.08h7.545z"></path></svg></a>
                        <a><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" className="fill-white"><path d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z"></path></svg></a>
                        <a><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" className="fill-white"><path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"></path></svg></a> 
                        <a><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 16 16" className="fill-white"><path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z"></path></svg></a>
                        
                        </div>
                    </div>
                </div>
            </footer> 
        </>
    )
}
import { NextApiRequest, NextApiResponse } from "next";

export default async function handler(request: NextApiRequest, response: NextApiResponse) {
    try {
        // const body = JSON.parse(request.body)
        const req = await fetch('http://localhost:8000/api/findAll')
        // if (!req.ok){
        //     throw new Error(req.statusText)
        // }
        const json = await req.json()
        // console.log(json)
        response.status(200).json(json)
        //response.status(200).json({ name: 'John Doe' })
    } catch (error) {
        
    }
}
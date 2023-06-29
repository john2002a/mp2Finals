import type { NextApiRequest, NextApiResponse } from 'next'

type Data = {
  name: string
}

export default function handler(
  req: NextApiRequest,
  res: NextApiResponse<Data>
) {
  res.status(200).json({ name: 'John Doe' })
}

//Displays all data
export async function book(){
  const response =  await fetch("http://localhost:8000/api/findAll");
  const data = await response.json();
  console.log(data);
  return data;
}

//Display data by Id
export async function findById(id: any){
  const emp_id = id;
  const response = await fetch('http://localhost:8000/api/findById', {
    method: 'POST',
      body: JSON.stringify({
        id: emp_id,
      }),
      headers: {
        'Content-type': 'application/json; charset=UTF-8',
      },
    })
     .then((response) => response.json())
     .then((data) => {
        console.log(data);
     })
     .catch((err) => {
        console.log(err.message);
     });
}

//Displays data by genre
export async function findByGenre(genre: any){
  const emp_id = genre;
  const response = await fetch('http://localhost:8000/api/findByGenre', {
    method: 'POST',
      body: JSON.stringify({
        genre: emp_id,
      }),
      headers: {
        'Content-type': 'application/json; charset=UTF-8',
      },
    })
     .then((response) => response.json())
     .then((data) => {
        console.log(data);
        const newData = JSON.stringify(data[0].title);
        // console.log(JSON.stringify(newData));
        console.log(newData);
        // console.log(newData);
     })
     .catch((err) => {
        console.log(err.message);
     });

}



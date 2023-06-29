import { useEffect, useState } from "react";

function Books() {
  const [data, setData] = useState([]);

  const fetchData = () => {
    fetch("http://localhost:8000/api/findAll")
      .then((response) => response.json())
      .then((actualData) => {
        console.log(actualData);
        setData(actualData);
      })
      .catch((err) => {
        console.log(err.message);
      });
  };

  useEffect(() => {
    fetchData();
  }, []);

  const booksview = () => {
    
  };

  return (
    
    <>
      {data.map((book) => (
          <div key={book.id} className="card w-96 bg-base-100">
            <figure>
              <img
                src={`https://covers.openlibrary.org/b/isbn/${book.isbn}-M.jpg`}
                alt="Book Cover"
              />
            </figure>
            <div className="card-body">
              <h2 className="card-title">{book.title}</h2>
              <p>by: {book.author}</p>
            </div>
          </div>
      ))}
    </>
  );
}

export default Books;
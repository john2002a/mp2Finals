export function formatBooks(books){
    return books && books.map((book)=>({
        id: book.id,
        isbn: book.isbn,
        author: book.author,
        title: book.title,
        length: book.length
    }))
}
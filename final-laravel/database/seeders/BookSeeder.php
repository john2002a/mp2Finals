<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Book;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    public function run(): void
    {
        $books = array([
            [
                'title'=> "The Drover's Wife",
                'author'=> 'Leah Purcell',
                'publisher'=> 'Penguin Books Australia',
                'publication_date'=> '2019-10-01',
                'isbn'=> '9780143787244',
                'price'=> 14.99,
                'genre'=> json_encode(['Historical', 'Drama']),
                'summary'=> "A retelling of the classic Australian short story 'The Drover's Wife' by Henry Lawson, with a focus on the resilience and strength of Indigenous women.",
                'quantity'=> 5
            ],
            [
                'title'=> 'The Great Gatsby',
                'author'=> 'F. Scott Fitzgerald',
                'publisher'=> "Charles Scribner's Sons",
                'publication_date'=> '1925-04-10',
                'isbn'=> '978-0-7432-7356-5',
                'price'=> 10.99,
                'genre'=> 'Drama',
                'summary'=> "The story of Jay Gatsby and his ill-fated love for Daisy Buchanan, set against the backdrop of the roaring twenties in America.",
                'quantity'=> 10
            ],
            [
                'title'=> 'To Kill a Mockingbird',
                'author'=> 'Harper Lee',
                'publisher'=> "J. B. Lippincott & Co.",
                'publication_date'=> '1960-07-11',
                'isbn'=> '978-0-06-112008-4',
                'price'=> 12.99,
                'genre'=> 'Drama',
                'summary'=> "The story of Scout Finch and her family, who live in a small town in Alabama during the Great Depression. Scout's father, a lawyer, defends a black man accused of rape, and the trial becomes a major event in the town.",
                'quantity'=> 8
            ],
            [
                'title'=> '1984',
                'author'=> 'George Orwell',
                'publisher'=> 'Secker & Warburg',
                'publication_date'=> '1949-06-08',
                'isbn'=> '978-0-452-28423-4',
                'price'=> 9.99,
                'genre'=> 'Sci-Fi',
                'summary'=> "In a dystopian future, a man named Winston Smith rebels against the oppressive regime of the Party and falls in love with a fellow rebel, only to be brutally punished for his actions.",
                'quantity'=> 12
            ],
            [
                'title'=> 'Pride and Prejudice',
                'author'=> 'Jane Austen',
                'publisher'=> 'T. Egerton, Whitehall',
                'publication_date'=> '1813-01-28',
                'isbn'=> '978-1-84603-419-9',
                'price'=> 8.99,
                'genre'=> 'Drama',
                'summary'=> "The story of Elizabeth Bennet and her relationships with various suitors, including the wealthy and proud Mr. Darcy.",
                'quantity'=> 6
            ],
            [
                'title'=> 'The Catcher in the Rye',
                'author'=> 'J. D. Salinger',
                'publisher'=> 'Little, Brown and Company',
                'publication_date'=> '1951-07-16',
                'isbn'=> '978-0-316-76948-8',
                'price'=> 7.99,
                'genre'=> 'Drama',
                'summary'=> "The story of Holden Caulfield, a young man who has been expelled from prep school and is struggling to find his place in the world.",
                'quantity'=> 15
            ],
            [
                'title'=> 'Animal Farm',
                'author'=> 'George Orwell',
                'publisher'=> 'Secker and Warburg',
                'publication_date'=> '1945-08-17',
                'isbn'=> '978-0-14-103613-7',
                'price'=> 6.99,
                'genre'=> 'Drama',
                'summary'=> "A political allegory that tells the story of a group of farm animals who rebel against their human farmer and try to create a society where the animals can be equal and free.",
                'quantity'=> 18
            ],
            [
                'title'=> 'Lord of the Flies',
                'author'=> 'William Golding',
                'publisher'=> 'Faber and Faber',
                'publication_date'=> '1954-09-17',
                'isbn'=> '978-0-571-24306-3',
                'price'=> 9.99,
                'genre'=> 'Adventure',
                'summary'=> "The story of a group of boys who are stranded on an uninhabited island and attempt to govern themselves, but their efforts ultimately descend into violence and chaos.",
                'quantity'=> 5
            ],
            [
                'title'=> 'Brave New World',
                'author'=> 'Aldous Huxley',
                'publisher'=> 'Chatto & Windus',
                'publication_date'=> '1932-06-20',
                'isbn'=> '978-0-06-085052-4',
                'price'=> 8.99,
                'genre'=> 'Sci-Fi',
                'summary'=> "A dystopian novel set in a future society where people are genetically engineered and conditioned to be content with their assigned roles in life.",
                'quantity'=> 3
            ],
            [
                'title'=> 'Frankenstein',
                'author'=> 'Mary Shelley',
                'publisher'=> 'Lackington, Hughes, Harding, Mavor, & Jones',
                'publication_date'=> '1818-01-01',
                'isbn'=> '978-0-06-284716-6',
                'price'=> 11.99,
                'genre'=> 'Horror',
                'summary'=> "The story of Victor Frankenstein, a young scientist who creates a monster from dead body parts and is horrified by what he has done.",
                'quantity'=> 20
            ],
            [

                'title'=> 'Dracula',
                'author'=> 'Bram Stoker',
                'publisher'=> 'Archibald Constable and Company',
                'publication_date'=> '1897-05-26',
                'isbn'=> '978-1-61592-134-0',
                'price'=> 13.99,
                'genre'=> 'Horror',
                'summary'=> "The story of Count Dracula, a vampire who seeks to spread his curse to others, and the group of people who band together to stop him.",
                'quantity'=> 14
            ],
            [

                'title'=> 'The Shining',
                'author'=> 'Stephen King',
                'publisher'=> 'Doubleday',
                'publication_date'=> '1977-01-28',
                'isbn'=> '978-0-385-12167-5',
                'price'=> 12.99,
                'genre'=> 'Horror',
                'summary'=> "The story of Jack Torrance, a struggling writer who takes a job as the winter caretaker of the isolated Overlook Hotel, and his descent into madness.",
                'quantity'=> 9
            ],
            [

                'title'=> 'The Stand',
                'author'=> 'Stephen King',
                'publisher'=> 'Doubleday',
                'publication_date'=> '1978-09-01',
                'isbn'=> '978-0-385-12168-2',
                'price'=> 14.99,
                'genre'=> 'Horror',
                'summary'=> "The story of a superflu virus that wipes out most of the world's population, and the battle between the forces of good and evil that takes place in the aftermath.",
                'quantity'=> 11
            ],
            [

                'title'=> 'The Da Vinci Code',
                'author'=> 'Dan Brown',
                'publisher'=> 'Doubleday',
                'publication_date'=> '2003-03-18',
                'isbn'=> '978-0-385-50420-1',
                'price'=> 10.99,
                'genre'=> 'Thriller',
                'summary'=> "The story of Robert Langdon, a symbologist who becomes involved in a conspiracy involving the Catholic Church and the search for the Holy Grail.",
                'quantity'=> 16
            ],
            [

                'title'=> 'Angels & Demons',
                'author'=> 'Dan Brown',
                'publisher'=> 'Pocket Books',
                'publication_date'=> '2000-05-01',
                'isbn'=> '978-0-671-02735-3',
                'price'=> 8.99,
                'genre'=> 'Thriller',
                'summary'=> "The story of Robert Langdon's investigation into the Illuminati, a secret society that is trying to destroy the Catholic Church.",
                'quantity'=> 7
            ],
            [

                'title'=> 'The Girl with the Dragon Tattoo',
                'author'=> 'Stieg Larsson',
                'publisher'=> 'Norstedts Förlag',
                'publication_date'=> '2005-08-01',
                'isbn'=> '978-0-307-47484-7',
                'price'=> 11.99,
                'genre'=> 'Mystery',
                'summary'=> "The story of journalist Mikael Blomkvist and hacker Lisbeth Salander as they investigate a decades-old disappearance and uncover dark secrets about a wealthy family.",
                'quantity'=> 13
            ],
            [

                'title'=> 'Gone Girl',
                'author'=> 'Gillian Flynn',
                'publisher'=> 'Crown Publishing Group',
                'publication_date'=> '2012-06-05',
                'isbn'=> '978-0-307-58836-4',
                'price'=> 9.99,
                'genre'=> 'Thriller',
                'summary'=> "The story of Nick and Amy Dunne, a couple whose marriage is falling apart, and the mysterious disappearance of Amy on their fifth wedding anniversary.",
                'quantity'=> 8
            ],
            [

                'title'=> 'The Hound of the Baskervilles',
                'author'=> 'Arthur Conan Doyle',
                'publisher'=> 'George Newnes Ltd.',
                'publication_date'=> '1902-04-25',
                'isbn'=> '978-0-7538-2635-5',
                'price'=> 7.99,
                'genre'=> 'Mystery',
                'summary'=> "The story of Sherlock Holmes and Dr. Watson's investigation into the legend of a cursed hound that is said to haunt the Baskerville family.",
                'quantity'=> 6
            ],
            [

                'title'=> 'The Adventures of Sherlock Holmes',
                'author'=> 'Arthur Conan Doyle',
                'publisher'=> 'George Newnes Ltd.',
                'publication_date'=> '1892-10-14',
                'isbn'=> '978-1-9998317-5-5',
                'price'=> 8.99,
                'genre'=> 'Mystery',
                'summary'=> "A collection of twelve short stories featuring Sherlock Holmes and Dr. Watson, including 'A Scandal in Bohemia' and 'The Adventure of the Speckled Band.'",
                'quantity'=> 10
            ],
            [

                'title'=> 'Murder on the Orient Express',
                'author'=> 'Agatha Christie',
                'publisher'=> 'Collins Crime Club',
                'publication_date'=> '1934-01-01',
                'isbn'=> '978-0-00-819657-2',
                'price'=> 10.99,
                'genre'=> 'Mystery',
                'summary'=> "The story of detective Hercule Poirot's investigation into the murder of a wealthy American on the luxurious Orient Express train.",
                'quantity'=> 4
            ],
            [

                'title'=> 'The Complete Adventures of Tintin',
                'author'=> 'Hergé',
                'publisher'=> 'Casterman',
                'publication_date'=> '1929-01-10',
                'isbn'=> '978-1-4050-7203-1',
                'price'=> 19.99,
                'genre'=> 'Adventure',
                'summary'=> "A collection of all 24 Tintin comic books, following the adventures of the young Belgian reporter and his faithful dog Snowy as they travel the world and solve mysteries.",
                'quantity'=> 22
            ],
            [

                'title'=> 'The Hobbit',
                'author'=> 'J.R.R. Tolkien',
                'publisher'=> 'Allen & Unwin',
                'publication_date'=> '1937-09-21',
                'isbn'=> '978-0-618-00221-9',
                'price'=> 9.99,
                'genre'=> 'Fantasy',
                'summary'=> "The story of hobbit Bilbo Baggins as he embarks on a quest to reclaim the lost treasure of the dwarves from the dragon Smaug.",
                'quantity'=> 5
            ],
            [

                'title'=> 'The Lord of the Rings',
                'author'=> 'J.R.R. Tolkien',
                'publisher'=> 'Allen & Unwin',
                'publication_date'=> '1954-07-29',
                'isbn'=> '978-0-618-05702-6',
                'price'=> 29.99,
                'genre'=> 'Fantasy',
                'summary'=> "The story of hobbit Frodo Baggins as he sets out on a perilous journey to destroy the One Ring and save Middle-earth from the evil Sauron.",
                'quantity'=> 8
            ],
            [

                'title'=> 'A Game of Thrones',
                'author'=> 'George R.R. Martin',
                'publisher'=> 'Bantam Spectra',
                'publication_date'=> '1996-08-01',
                'isbn'=> '978-0-553-10354-0',
                'price'=> 11.99,
                'genre'=> 'Fantasy',
                'summary'=> "The first book in the 'A Song of Ice and Fire' series, which follows the struggle for the Iron Throne of the Seven Kingdoms of Westeros.",
                'quantity'=> 12
                ],
                [

                'title'=> "Harry Potter and the Philosopher's Stone",
                'author'=> 'J.K. Rowling',
                'publisher'=> 'Bloomsbury',
                'publication_date'=> '1997-06-26',
                'isbn'=> '978-1-4088-5589-8',
                'price'=> 14.99,
                'genre'=> 'Fantasy',
                'summary'=> "The first book in the 'Harry Potter' series, following the titular character as he learns about the wizarding world and attends Hogwarts School of Witchcraft and Wizardry.",
                'quantity'=> 15
                ],
                [

                'title'=> 'The Name of the Wind',
                'author'=> 'Patrick Rothfuss',
                'publisher'=> 'DAW Books',
                'publication_date'=> '2007-03-27',
                'isbn'=> '978-0-7564-0407-9',
                'price'=> 13.99,
                'genre'=> 'Fantasy',
                'summary'=> "The first book in 'The Kingkiller Chronicle' series, which follows the story of Kvothe, a legendary figure in a world of magic and adventure.",
                'quantity'=> 7
                ],
                [

                'title'=> 'The Lies of Locke Lamora',
                'author'=> 'Scott Lynch',
                'publisher'=> 'Gollancz',
                'publication_date'=> '2006-06-27',
                'isbn'=> '978-0-575-07744-5',
                'price'=> 10.99,
                'genre'=> 'Fantasy',
                'summary'=> "The first book in 'The Gentlemen Bastards' series, which follows a group of clever thieves as they navigate the criminal underworld of a city inspired by medieval Venice.",
                'quantity'=> 9
                ],
                [

                'title'=> 'American Gods',
                'author'=> 'Neil Gaiman',
                'publisher'=> 'William Morrow',
                'publication_date'=> '2001-06-19',
                'isbn'=> '978-0-380-97365-5',
                'price'=> 12.99,
                'genre'=> 'Fantasy',
                'summary'=> "The story of ex-convict Shadow and his journey through a hidden America of ancient gods, mythic creatures, and supernatural forces.",
                'quantity'=> 11
                ],
                [

                'title'=> 'The Color of Magic',
                'author'=> 'Terry Pratchett',
                'publisher'=> 'Colin Smythe',
                'publication_date'=> '1983-11-24',
                'isbn'=> '978-0-575-02968-9',
                'price'=> 8.99,
                'genre'=> 'Fantasy',
                'summary'=> "The first book in the 'Discworld' series, which takes place on a flat world balanced on the backs of four elephants who themselves stand on the back of a giant turtle, and follows the misadventures of wizard Rincewind and tourist Twoflower.",
                'quantity'=> 6
            ],
            [

                'title'=> 'The Final Empire',
                'author'=> 'Brandon Sanderson',
                'publisher'=> 'Tor Books',
                'publication_date'=> '2006-07-17',
                'isbn'=> '978-0-7653-1481-1',
                'price'=> 9.99,
                'genre'=> 'Fantasy',
                'summary'=> "The first book in the 'Mistborn' trilogy, which follows a group of rebels as they attempt to overthrow a seemingly invincible ruler known as the Lord Ruler.",
                'quantity'=> 8
            ],
            [

                'title'=> 'The Way of Kings',
                'author'=> 'Brandon Sanderson',
                'publisher'=> 'Tor Books',
                'publication_date'=> '2010-08-31',
                'isbn'=> '978-0-7653-2636-2',
                'price'=> 14.99,
                'genre'=> 'Fantasy',
                'summary'=> "The first book in 'The Stormlight Archive' series, which takes place on the world of Roshar and follows a group of characters as they attempt to prevent the return of the Desolation, a time of immense destruction and chaos.",
                'quantity'=> 10
            ],
            [

                'title'=> 'The Eye of the World',
                'author'=> 'Robert Jordan',
                'publisher'=> 'Tor Books',
                'publication_date'=> '1990-01-15',
                'isbn'=> '978-0-8125-4812-8',
                'price'=> 11.99,
                'genre'=> 'Fantasy',
                'summary'=> "The first book in 'The Wheel of Time' series, which follows a group of young people as they journey across a world on the brink of cataclysmic change.",
                'quantity'=> 12
            ],
            [

                'title'=> 'The Gunslinger',
                'author'=> 'Stephen King',
                'publisher'=> 'Grant',
                'publication_date'=> '1982-06-10',
                'isbn'=> '978-1-4391-6809-9',
                'price'=> 9.99,
                'genre'=> 'Fantasy',
                'summary'=> "The first book in 'The Dark Tower' series, which follows the gunslinger Roland Deschain as he searches for the mysterious Dark Tower, a structure that holds the key to the universe's existence.",
                'quantity'=> 15
            ],
            [

                'title'=> "Assassin's Apprentice",
                'author'=> 'Robin Hobb',
                'publisher'=> 'Spectra Books',
                'publication_date'=> '1995-04-01',
                'isbn'=> '978-0-553-57347-0',
                'price'=> 8.99,
                'genre'=> 'Fantasy',
                'summary'=> "The first book in 'The Farseer Trilogy' series, which follows a royal bastard named FitzChivalry as he becomes an assassin in service to his king.",
                'quantity'=> 9
            ],
            [

                'title'=> 'The Blade Itself',
                'author'=> 'Joe Abercrombie',
                'publisher'=> 'Gollancz',
                'publication_date'=> '2006-05-04',
                'isbn'=> '978-0-575-07753-7',
                'price'=> 10.99,
                'genre'=> 'Fantasy',
                'summary'=> "The first book in 'The First Law' trilogy, which follows a diverse cast of characters as they navigate a world of war, politics, and magic.",
                'quantity'=> 11
            ],
            [

                'title'=> 'The Lies of Locke Lamora',
                'author'=> 'Scott Lynch',
                'publisher'=> 'Gollancz',
                'publication_date'=> '2006-06-27',
                'isbn'=> '978-0-575-07744-5',
                'price'=> 10.99,
                'genre'=> 'Fantasy',
                'summary'=> "The first book in the 'Gentleman Bastards' series, which follows a group of skilled thieves led by the charismatic Locke Lamora as they pull off elaborate heists in the city of Camorr.",
                'quantity'=> 13
            ],
            [

                'title'=> 'The Name of the Wind',
                'author'=> 'Patrick Rothfuss',
                'publisher'=> 'DAW Books',
                'publication_date'=> '2007-03-27',
                'isbn'=> '978-0-7564-0403-9',
                'price'=> 12.99,
                'genre'=> 'Fantasy',
                'summary'=> "The first book in 'The Kingkiller Chronicle' series, which tells the story of Kvothe, a legendary magician and musician, as he recounts his life to a chronicler.",
                'quantity'=> 14
            ],
            [

                'title'=> 'The Final Empire',
                'author'=> 'Brandon Sanderson',
                'publisher'=> 'Tor Books',
                'publication_date'=> '2006-07-25',
                'isbn'=> '978-0-7653-1426-1',
                'price'=> 11.99,
                'genre'=> 'Fantasy',
                'summary'=> "The first book in 'Mistborn' series, which takes place in a world where magic users known as 'Allomancers' can consume and burn various metals to gain superhuman abilities.",
                'quantity'=> 7
            ],
            [

                'title'=> 'Elantris',
                'author'=> 'Brandon Sanderson',
                'publisher'=> 'Tor Books',
                'publication_date'=> '2005-05-01',
                'isbn'=> '978-0-7653-5857-0',
                'price'=> 10.99,
                'genre'=> 'Fantasy',
                'summary'=> "The first standalone novel by Brandon Sanderson, which takes place in a city called Elantris where once powerful magic users have been transformed into undead beings.",
                'quantity'=> 8
            ],
            [

                'title'=> 'The City We Became',
                'author'=> 'N.K. Jemisin',
                'publisher'=> 'Orbit',
                'publication_date'=> '2020-03-24',
                'isbn'=> '978-0-356-51009-2',
                'price'=> 13.99,
                'genre'=> 'Fantasy',
                'summary'=> "The first book in a new series by N.K. Jemisin, which follows a group of people as they try to save New York City from a Lovecraftian horror that threatens to destroy it.",
                'quantity'=> 6
            ],
            [

                'title'=> 'American Gods',
                'author'=> 'Neil Gaiman',
                'publisher'=> 'William Morrow',
                'publication_date'=> '2001-06-19',
                'isbn'=> '978-0-380-97365-3',
                'price'=> 9.99,
                'genre'=> 'Fantasy',
                'summary'=> "The first book in 'The American Gods' series, which follows the ex-convict Shadow Moon as he becomes embroiled in a war between the old gods of mythology and the new gods of technology.",
                'quantity'=> 9
            ],
            [

                'title'=> 'Jonathan Strange & Mr Norrell',
                'author'=> 'Susanna Clarke',
                'publisher'=> 'Bloomsbury',
                'publication_date'=> '2004-09-08',
                'isbn'=> '978-1-58234-416-4',
                'price'=> 14.99,
                'genre'=> json_encode(['Historical', 'Fantasy']),
                'summary'=> "An alternate history novel set in early 19th century England, which explores the revival of practical magic and the relationship between two rival magicians.",
                'quantity'=> 12
            ],  
            [

                'title'=> 'The Lies of Locke Lamora',
                'author'=> 'Scott Lynch',
                'publisher'=> 'Gollancz',
                'publication_date'=> '2006-06-27',
                'isbn'=> '978-0-575-07886-5',
                'price'=> 10.99,
                'genre'=> 'Fantasy',
                'summary'=> "The first book in the 'Gentleman Bastards' series, which follows a group of skilled thieves led by the charismatic Locke Lamora as they pull off elaborate heists in the city of Camorr.",
                'quantity'=> 13
            ],
            [

                'title'=> 'The Name of the Wind',
                'author'=> 'Patrick Rothfuss',
                'publisher'=> 'DAW Books',
                'publication_date'=> '2007-03-27',
                'isbn'=> '978-0-7564-0403-9',
                'price'=> 12.99,
                'genre'=> 'Fantasy',
                'summary'=> "The first book in 'The Kingkiller Chronicle' series, which tells the story of Kvothe, a legendary magician and musician, as he recounts his life to a chronicler.",
                'quantity'=> 14
            ],
            [

                'title'=> 'The Final Empire',
                'author'=> 'Brandon Sanderson',
                'publisher'=> 'Tor Books',
                'publication_date'=> '2006-07-25',
                'isbn'=> '978-0-7653-1426-1',
                'price'=> 11.99,
                'genre'=> 'Fantasy',
                'summary'=> "The first book in 'Mistborn' series, which takes place in a world where magic users known as 'Allomancers' can consume and burn various metals to gain superhuman abilities.",
                'quantity'=> 7
            ],
            [

                'title'=> 'Elantris',
                'author'=> 'Brandon Sanderson',
                'publisher'=> 'Tor Books',
                'publication_date'=> '2005-05-01',
                'isbn'=> '978-0-7653-5857-0',
                'price'=> 10.99,
                'genre'=> 'Fantasy',
                'summary'=> "The first standalone novel by Brandon Sanderson, which takes place in a city called Elantris where once powerful magic users have been transformed into undead beings.",
                'quantity'=> 8
            ],
            [

                'title'=> 'The City We Became',
                'author'=> 'N.K. Jemisin',
                'publisher'=> 'Orbit',
                'publication_date'=> '2020-03-24',
                'isbn'=> '978-0-356-51009-2',
                'price'=> 13.99,
                'genre'=> 'Fantasy',
                'summary'=> "The first book in a new series by N.K. Jemisin, which follows a group of people as they try to saveNew York City from an ancient evil that is trying to destroy it.",
                'quantity'=> 9
            ],
            [

                'title'=> 'The Night Circus',
                'author'=> 'Erin Morgenstern',
                'publisher'=> 'Doubleday',
                'publication_date'=> '2011-09-13',
                'isbn'=> '978-0-385-53696-5',
                'price'=> 9.99,
                'genre'=> 'Fantasy',
                'summary'=> "A novel about two young magicians who are bound together in a magical competition that takes place in a mysterious circus that only appears at night.",
                'quantity'=> 11
            ],
            [

                'title'=> 'American Gods',
                'author'=> 'Neil Gaiman',
                'publisher'=> 'William Morrow',
                'publication_date'=> '2001-06-19',
                'isbn'=> '978-0-06-257211-0',
                'price'=> 12.99,
                'genre'=> 'Fantasy',
                'summary'=> "A novel that explores the idea of what happens to gods when people stop believing in them, as an ex-convict named Shadow becomes embroiled in a conflict between ancient gods and new gods.",
                'quantity'=> 15
            ],
            [

                'title'=> 'The Once and Future King',
                'author'=> 'T.H. White',
                'publisher'=> 'Collins',
                'publication_date'=> '1958-11-18',
                'isbn'=> '978-0-06-120047-4',
                'price'=> 8.99,
                'genre'=> 'Fantasy',
                'summary'=> "A retelling of the story of King Arthur, from his childhood as a squire to his eventual downfall and death, with a focus on the themes of power, justice, and love.",
                'quantity'=> 6
            ],
            [

                'title'=> 'The Broken Earth Trilogy',
                'author'=> 'N.K. Jemisin',
                'publisher'=> 'Orbit',
                'publication_date'=> '2015-08-04',
                'isbn'=> '978-0-316-22928-9',
                'price'=> 29.99,
                'genre'=> 'Fantasy',
                'summary'=> "A trilogy of novels set in a world where natural disasters called 'Seasons' are controlled by a group of people with magical abilities known as 'Orogenes'. The series follows a woman named Essun as she tries to save her daughter and confront the dark forces that threaten to destroy the world.",
                'quantity'=> 10
            ],
            [

                'title'=> 'The First Law Trilogy',
                'author'=> 'Joe Abercrombie',
                'publisher'=> 'Gollancz',
                'publication_date'=> '2006-05-04',
                'isbn'=> '978-0-575-07719-6',
                'price'=> 24.99,
                'genre'=> 'Fantasy',
                'summary'=> "A trilogy of novels set in a dark and violent world where magic is rare and brutal warfare is common. The series follows a diverse group of characters as they navigate political intrigue, betrayal, and war.",
                'quantity'=> 12
            ],
            [

                'title'=> 'The Stormlight Archive',
                'author'=> 'Brandon Sanderson',
                'publisher'=> 'Tor Books',
                'publication_date'=> '2010-08-31',
                'isbn'=> '978-0-7653-2636-2',
                'price'=> 34.99,
                'genre'=> 'Fantasy',
                'summary'=> "A planned ten-volume epic fantasy series set in the world of Roshar, where magic is based on the power of 'stormlight'. The series follows a cast of characters as they become embroiled in the politics and wars of different kingdoms and struggle to prevent a catastrophic event known as the 'Desolation'.",
                'quantity'=> 8
            ],
            [

                'title'=> 'The Malazan Book of the Fallen',
                'author'=> 'Steven Erikson',
                'publisher'=> 'Tor Books',
                'publication_date'=> '1999-04-27',
                'isbn'=> '978-0-7653-1699-7',
                'price'=> 49.99,
                'genre'=> 'Fantasy',
                'summary'=> "A ten-volume series set in a sprawling, complex world where multiple storylines and characters intersect. The series features epic battles, complex magic systems, and themes of morality, philosophy, and politics.",
                "quantity"=> 6
            ],
            [

                'title'=> 'The Book of Dust',
                'author'=> 'Philip Pullman',
                'publisher'=> 'Alfred A. Knopf',
                'publication_date'=> '2017-10-19',
                'isbn'=> '978-0-553-52383-5',
                'price'=> 14.99,
                'genre'=> 'Fantasy',
                'summary'=> "A planned trilogy of novels set in the same universe as the His Dark Materials trilogy. The first book, La Belle Sauvage, follows an 11-year-old boy named Malcolm as he tries to protect a baby named Lyra from a group of dangerous people.",
                'quantity'=> 13
            ],
            [

                'title'=> 'The Dark Tower',
                'author'=> 'Stephen King',
                'publisher'=> 'Donald M. Grant, Publisher, Inc.',
                'publication_date'=> '1982-06-10',
                'isbn'=> '978-1-882947-13-8',
                'price'=> 19.99,
                'genre'=> 'Fantasy',
                'summary'=> "A series of eight novels that blends elements of fantasy, science fiction, and westerns. The series follows Roland Deschain, the last gunslinger in a post-apocalyptic world, as he searches for the Dark Tower, a structure that holds the key to saving his world.",
                'quantity'=> 9
            ],
            [

                'title'=> 'The Bartimaeus Sequence',
                'author'=> 'Jonathan Stroud',
                'publisher'=> 'Doubleday',
                'publication_date'=> '2003-09-30',
                'isbn'=> '978-0-7868-5112-5',
                'price'=> 17.99,
                'genre'=> 'Fantasy',
                'summary'=> "A series of novels set in an alternate version of London where magicians summon spirits to do their bidding. The series follows the djinni Bartimaeus and his master, Nathaniel, as they become embroiled in a conflict that threatens the stability of the British Empire.",
                'quantity'=> 14
            ],
            [

                'title'=> 'The Inheritance Cycle',
                'author'=> 'Christopher Paolini',
                'publisher'=> 'Alfred A. Knopf',
                'publication_date'=> '2002-08-26',
                'isbn'=> '978-0-375-82668-2',
                'price'=> 25.99,
                'genre'=> 'Fantasy',
                'summary'=> "A series of four novels set in the fictional world of Alagaësia, where a young farm boy named Eragon discovers a dragon egg and becomes embroiled in a struggle against an evil king. The series features a detailed magic system and themes of loyalty, friendship, and sacrifice.",
                'quantity'=> 7
            ],
            [

                'title'=> 'The Black Company',
                'author'=> 'Glen Cook',
                'publisher'=> 'Tor Books',
                'publication_date'=> '1984-05-01',
                'isbn'=> '978-0-8125-4863-6',
                'price'=> 12.99,
                'genre'=> 'Fantasy',
                'summary'=> "A series of ten novels that follows the mercenary group known as the Black Company as they become embroiled in conflicts between various factions of wizards, demons, and gods. The series is known for its gritty, realistic portrayal of military life and its morally ambiguous characters.",
                'quantity'=> 5
            ],
            [

                'title'=> 'The Chronicles of Narnia',
                'author'=> 'C. S. Lewis',
                'publisher'=> 'Geoffrey Bles',
                'publication_date'=> '1950-10-16',
                'isbn'=> '978-0-06-024488-0',
                'price'=> 21.99,
                'genre'=> 'Fantasy',
                'summary'=> "A series of seven novels set in the magical world of Narnia. The series follows various children as they become embroiled in conflicts between the forces of good and evil, and features Christian themes and allegories.",
                'quantity'=> 12
            ],
            [

                'title'=> 'The Farseer Trilogy',
                'author'=> 'Robin Hobb',
                'publisher'=> 'Spectra Books',
                'publication_date'=> '1996-03-01',
                'isbn'=> '978-0-553-56509-8',
                'price'=> 15.99,
                'genre'=> 'Fantasy',
                'summary'=> "A trilogy of novels that follows the life of FitzChivalry Farseer, a bastard son of a prince who becomes trained as an assassin and becomes embroiled in political intrigue and magical conflict. The series is known for its complex characters and detailed world-building.",
                'quantity'=> 9
            ],
            [

                'title'=> 'The Gentleman Bastard Sequence',
                'author'=> 'Scott Lynch',
                'publisher'=> 'Gollancz',
                'publication_date'=> '2006-06-01',
                'isbn'=> '978-0-575-07798-2',
                'price'=> 16.99,
                'genre'=> 'Fantasy',
                'summary'=> "A planned series of seven novels that follows the adventures of a group of thieves known as the Gentleman Bastards as they pull off elaborate heists in a fictional city called Camorr. The series is known for its witty dialogue and intricate plots.",
                'quantity'=> 6
            ],
            [

                'title'=> 'The Powder Mage Trilogy',
                'author'=> 'Brian McClellan',
                'publisher'=> 'Orbit Books',
                'publication_date'=> '2013-04-16',
                'isbn'=> '978-0-316-21956-9',
                'price'=> 13.99,
                'genre'=> 'Fantasy',
                'summary'=> "A trilogy of novels set in a world where certain individuals have the ability to control gunpowder through magic. The series follows several characters, including a young officer in the military and a powerful sorceress, as they become embroiled in political and military conflicts. The series is known for its well-developed characters and its unique blend of magic and technology.",
                'quantity'=> 10
            ],
            [

                'title'=> 'The First Law Trilogy',
                'author'=> 'Joe Abercrombie',
                'publisher'=> 'Gollancz',
                'publication_date'=> '2006-05-04',
                'isbn'=> '978-0-575-07793-7',
                'price'=> 14.99,
                'genre'=> 'Fantasy',
                'summary'=> "A trilogy of novels that takes place in a dark, violent world filled with morally ambiguous characters. The series follows several characters, including a barbarian warrior, a torturer, and a crippled inquisitor, as they become embroiled in political and military conflicts. The series is known for its gritty realism and its subversion of traditional fantasy tropes.",
                'quantity'=> 8
            ],
            [

                'title'=> 'The Malazan Book of the Fallen',
                'author'=> 'Steven Erikson',
                'publisher'=> 'Bantam Press',
                'publication_date'=> '1999-04-27',
                'isbn'=> '978-0-553-81311-0',
                'price'=> 19.99,
                'genre'=> 'Fantasy',
                'summary'=> "A series of ten novels that takes place in a complex, epic fantasy world filled with numerous characters, races, and cultures. The series follows a vast array of characters, including soldiers, assassins, gods, and dragons, as they become embroiled in conflicts that threaten the fate of the world. The series is known for its intricate plotting and its expansive world-building.",
                'quantity'=> 15
            ],
            [

                'title'=> 'The Realm of the Elderlings',
                'author'=> 'Robin Hobb',
                'publisher'=> 'Harper Voyager',
                'publication_date'=> '1995-05-04',
                'isbn'=> '978-0-00-736026-5',
                'price'=> 20.99,
                'genre'=> 'Fantasy',
                'summary'=> "A series of sixteen novels that takes place in a detailed, intricate fantasy world. The series follows several characters, including an assassin, a young girl with magical powers, and a dragon, as they become embroiled in conflicts that threaten the fate of the world. The series is known for its well-developed characters and its emotionally impactful storytelling.",
                'quantity'=> 20
            ]
        ]);
        foreach ($books as $key => $book) {
            DB::table('books')->insert($book);
        }
    }
}

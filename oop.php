<?php

class Book {
    // Private properties
    private $title;
    private $availableCopies;

    // Constructor to initialize properties
    public function __construct($title, $availableCopies) {
        $this->title = $title;
        $this->availableCopies = $availableCopies;
    }

    // Method to get the title of the book
    public function getTitle() {
        return $this->title;
    }

    // Method to get the number of available copies
    public function getAvailableCopies() {
        return $this->availableCopies;
    }

    // Method to borrow a book
    public function borrowBook() {
        if ($this->availableCopies > 0) {
            $this->availableCopies--;
            return true;
        } else {
            return false;
        }
    }

    // Method to return a book
    public function returnBook() {
        $this->availableCopies++;
    }
}

class Member {
    // Private properties
    private $name;

    // Constructor to initialize properties
    public function __construct($name) {
        $this->name = $name;
    }

    // Method to get the name of the member
    public function getName() {
        return $this->name;
    }

    // Method for the member to borrow a book
    public function borrowBook(Book $book) {
        if ($book->borrowBook()) {
            echo "{$this->getName()} successfully borrowed '{$book->getTitle()}'." . PHP_EOL;
        } else {
            echo "{$this->getName()} could not borrow '{$book->getTitle()}'. No copies available." . PHP_EOL;
        }
    }

    // Method for the member to return a book
    public function returnBook(Book $book) {
        $book->returnBook();
        echo "{$this->getName()} successfully returned '{$book->getTitle()}'." . PHP_EOL;
    }
}

// Usage

// Create 2 books
$book1 = new Book("The Great Gatsby", 5);
$book2 = new Book("To Kill a Mockingbird", 3);

// Create 2 members
$member1 = new Member("John Doe");
$member2 = new Member("Jane Smith");

// Members borrow books
$member1->borrowBook($book1);
$member2->borrowBook($book2);

// Print available copies with their names
echo "Available Copies of '{$book1->getTitle()}': {$book1->getAvailableCopies()}" . PHP_EOL;
echo "Available Copies of '{$book2->getTitle()}': {$book2->getAvailableCopies()}" . PHP_EOL;
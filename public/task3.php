<?php
    $result3 = [
        'authors' => [
            '2@2.com' => ['fio' => 'John Doe', 'email' => '2@2.com', 'birthDate' => '11.12.1976'],
            '1@2.com' => ['fio' => 'John Connor', 'email' => '1@2.com', 'birthDate' => '1.10.1979'],
            '3@2.com' => ['fio' => 'Daniel Wallace', 'email' => '3@2.com', 'birthDate' => '1.10.1979'],
        ],
        'books' => [
            ['title' => 'Donkey', 'authorEmail' => '2@2.com'],
            ['title' => 'True faith', 'authorEmail' => '1@2.com'],
            ['title' => 'Dokey Kong', 'authorEmail' => '2@2.com'],
            ['title' => 'False faith', 'authorEmail' => '1@2.com'],
            ['title' => 'Big fish', 'authorEmail' => '3@2.com'],
        ]
    ];
    $books = $result3['books'];
    $authors = $result3['authors'];

    function getBooks($authors, $books) {
        for($i = 0; $i < count($books); $i++) {
            $book = $books[$i]['title'];
            $email = $books[$i]['authorEmail'];
            $fullName = $authors[$email]['fio'];
            $birth = $authors[$email]['birthDate'];
            echo "Книга $book, ее написал $fullName $birth ($email)<br/>";
        }
    }

    getBooks($authors, $books);
    shuffle($books);
    getBooks($authors, $books);

<?php
    $title = 'Title of this page.';
    $red = (bool) rand(0, 1);
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

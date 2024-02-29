<?php

    class Tweet {
        private string $texto;
        private string $autor;
        private string $username;


        public function __construct(string $autor, string $username, string $texto) {
            $this->autor = $autor;
            $this->username = $username;
            $this->texto = $texto;
        }

        //el & modifica el array orginal, no trabaja con una copia del mismo
        function ponerTweet(&$tweetsArray, $tweetObject) {
            array_unshift($tweetsArray, $tweetObject);
        }

        function convertArray() {
            $array = [
                "texto" => $this-> texto,
                "autor" => $this-> autor,
                "username" => $this-> username
            ];

            return $array;
        }


        //GETTERS Y SETTERS
        public function getAutor(): string {
            return $this->autor;
        }

        public function setAutor(string $autor): void {
            $this->autor = $autor;
        }

        public function getUsername(): string {
            return $this->username;
        }

        public function setUsername(string $username): void {
            $this->username = $username;
        }

        public function getTexto(): string {
            return $this->texto;
        }

        public function setTexto(string $texto): void {
            $this->texto = $texto;
        }
    }
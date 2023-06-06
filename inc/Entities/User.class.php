<?php

class User {
    private int $userId;
    private string $username;
    private string $password;
    private string $email;
    private string $picture;

	public function getUserId() {
		return $this->userId;
	}

	public function setUserId(int $userId) {
		$this->userId = $userId;
	}

    public function getUsername() {
        return $this->username;
    }

    public function setUsername(string $username) {
        $this->username = $username;
    }

    public function getPassword() {
        return $this->password;
    }

    public function setPassword(string $password) {
        $this->password = $password;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setEmail(string $email) {
        $this->email = $email;
    }

    public function getPicture(){
        return $this->picture;
    }

    public function setPicture(string $picture) {
        $this->picture = $picture;
    }

    public function passwordValidate( string $password ) : bool {
        if ( password_verify($password,$this->getPassword()) ) {
            return true;
        } else {
            return false;
        }
    }
}
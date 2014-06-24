<?php

abstract class Model {
    abstract public function getTable();

    public function formattedTable() {
        return strtoupper($this->getTable());
    }
}

class User extends Model {
    public function getTable() {
        return "users";
    }
}

$joe = new User;

print $joe->formattedTable(); // Output:: USERS

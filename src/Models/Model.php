<?php

class Model
{
    protected function createConnection()
    {
        return mysqli_connect('localhost', 'root', '');
    }

    public function insert($query)
    {
        $connection = $this->createConnection();

        return mysqli_query($connection, $query);
    }

    public function select($query)
    {
        return ['id' => 'asd', 'description' => 'asdasd'];
    }
}
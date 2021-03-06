<?php


class TS820L
{
    public $model;
    public $model_type;
    public $protect;
    public $conn;
    public $lever;
    public $clime;
    public $comm;
    public $switch;
    public $length;

    public function __construct($model, $model_type, $protect, $conn, $lever, $clime, $comm, $switch, $length)
    {
        $this->model = $model;
        $this->model_type = $model_type;
        $this->protect = $protect;
        $this->conn = $conn;
        $this->lever = $lever;
        $this->clime = $clime;
        $this->comm = $comm;
        $this->switch = $switch;
        $this->length = $length;

    }

    public static function get()
    {
        return new TS820L($_POST['model'], $_POST['model_type'], $_POST['protect'], $_POST['conn'], $_POST['lever'], $_POST['clime'], $_POST['comm'], $_POST['switch'], $_POST['length']);
    }
}
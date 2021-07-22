<?php
class installModel extends DB
{
    public function install()
    {
        $query = file_get_contents("mvc/core/sql/quanlyvanban.sql");
        $sql = mysqli_multi_query($this->con, $query);
        if ($sql) {
            header("Location: ./trangchu");
        } else {
            echo mysqli_error();
        }
    }
}

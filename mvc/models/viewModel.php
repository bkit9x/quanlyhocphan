<?php
class viewModel extends DB
{
    public function post(int $id)
    {
        $query = 'SELECT p.`id`, p.`title`, p.`code`, p.`description`, p.`content`, p.`date_of_signature`, p.`date`, p.`view`, c.category, c.id as idc, u.name FROM `post` as p, user as u, category as c WHERE p.delete_at IS NULL AND p.user = u.user AND p.category = c.id AND p.id = '.$id;
        $result = mysqli_query($this->con, $query);
        if (mysqli_num_rows($result)>0) {
            return $result;
        } else {
            return false;
        }
    }
}

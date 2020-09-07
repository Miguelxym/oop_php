<?php
class ViewUsers extends User
{
    public function showAllUsers()
    {
        $datas = $this->getAllUsers();
        if(is_array($datas))
            foreach ($datas as $data) {
                echo $data['id']."</br>".$data['firstName']."</br>".$data['lastName']."</br>".$data['age']."</br>";
            }
        return $datas;
    }
}

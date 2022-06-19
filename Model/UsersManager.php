
<?php

class UsersManager {
    private $bddPDO;

    //CONSTRUCT
    public function __construct(PDO $bddPDO){
        $this->bddPDO = $bddPDO;
    }

    public function insert(Users $User){
        $query = $this->bddPDO->prepare('INSERT INTO users(name, email, password) VALUES(:name, :email, :password)');

        $query->bindvalue(':name', $User->getName());
        $query->bindvalue(':email', $User->getEmail());
        $query->bindvalue(':password', $User->getPassword());

        $query->execute();
    }
    

    public function getListUsers() {
        $query = $this->bddPDO->query('SELECT * FROM users ORDER BY name ASC');
        $query->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'Users'); 
        $listUsers = $query->fetchAll();
        $query->closeCursor();  
        return $listUsers;
    }

    public function getUser($ID){
        $query = $this->bddPDO->prepare('SELECT * FROM users WHERE id = :id');
        $query->bindValue(':id',(int) $ID);
        $query->execute();

        $query->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'Users');
        $User = $query->fetch();

        return $User;
    }

    public function udapteUser(Users $User){
        $query = $this->bddPDO->prepare('UPDATE users SET name = :name, email = :email, password = :password WHERE id = :id');

        $query->bindValue(':id', $User->getId());
        $query->bindvalue(':name', $User->getName());
        $query->bindvalue(':email', $User->getEmail());
        $query->bindvalue(':password', $User->getPassword());
        
        $query->execute();
    }

    public function deleteUser (Users $User){
        $query = $this->bddPDO->prepare(('DELETE users SET name = :name, email = :email, password = :password WHERE id =:id'));

        $query->bindValue(':id', $User->getId());
        $query->bindvalue(':name', $User->getName());
        $query->bindvalue(':email', $User->getEmail());
        $query->bindvalue(':password', $User->getPassword());
        
        $query->execute();
    }


    
    //SETTER
    public function setBddPDO($bddPDO){
        $this->bddPDO = $bddPDO;
    }

    //GETTER
    public function getBddPDO(){
        return $this->bddPDO;
    }
}
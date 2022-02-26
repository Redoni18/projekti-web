<?php
    require_once '../views/user.php';
    require_once '../config/Database.php';

    class DashboardController{
        public $db;

        public function __construct(){
            $this->db = new Database;
        }

        //READ data from database

        public function readData(){
            $query = $this->db->pdo->query('SELECT * from produktet');

            return $query->fetchAll();
        }

        //READ products with category = "Technology"

        public function readTechProducts(){
            $query = $this->db->pdo->query("SELECT * from produktet WHERE product_category LIKE 'Technology'");
            
            return $query->fetchAll();
        }

        //READ products with category = "Apparel"

        public function readApparelProducts(){
            $query = $this->db->pdo->query("SELECT * from produktet WHERE product_category LIKE 'Apparel'");

            return $query->fetchAll();
        }

        //READ products with cateogry = "Sports&Entertainment"

        public function readSEProducts(){
            $query = $this->db->pdo->query("SELECT * from produktet WHERE product_category LIKE 'Sports&Entertainment'");

            return $query->fetchAll();
        }

        //READ products with category = "Home&Garden"

        public function readHGProducts(){
            $query = $this->db->pdo->query("SELECT * from produktet WHERE product_category LIKE 'Home&Garden'");

            return $query->fetchAll();
        }


        //INSERT data to database

        public function insertData($request){
            $request['image'] = './resources/' . $request['image'];

            $query = $this->db->pdo->prepare('INSERT INTO produktet (product_image, product_name, product_description, product_category, product_quantity, product_price) VALUES (:product_image, :product_name, :product_description, :product_category, :product_quantity, :product_price)');

            $query->bindParam(':product_image', $request['image']);
            $query->bindParam(':product_name', $request['name']);
            $query->bindParam(':product_description', $request['description']);
            $query->bindParam(':product_category', $request['category']);
            $query->bindParam(':product_quantity', $request['quantity']);
            $query->bindParam(':product_price', $request['price']);


            $query->execute();

            return header('Location: productDashboard.php');
        }

        //EDIT data

        public function editData($id){
            $query = $this->db->pdo->prepare('SELECT * from produktet WHERE id = :id');

            $query->bindParam(':id', $id);

            $query->execute();
            return $query->fetch();
        }

        public function updateData($request, $id){
            $request['image'] = './resources/' . $request['image'];
            $query = $this->db->pdo->prepare('UPDATE produktet SET product_image = :product_image, product_name = :product_name, product_description = :product_description, product_category = :product_category, product_quantity = :product_quantity, product_price = :product_price WHERE id = :id');

            $query->bindParam(':product_image', $request['image']);
            $query->bindParam(':product_name', $request['name']);
            $query->bindParam(':product_description', $request['description']);
            $query->bindParam(':product_category', $request['category']);
            $query->bindParam(':product_quantity', $request['quantity']);
            $query->bindParam(':product_price', $request['price']);
            $query->bindParam(':id', $id);

            $query->execute();

            return header('Location: productDashboard.php');
        }

        //DELETE data form database

        public function deleteData($id){
            $query = $this->db->pdo->prepare('DELETE from produktet WHERE id = :id');

            $query->bindParam(':id', $id);
            $query->execute();
            return header('Location: productDashboard.php');
        }

        //SEND message to database

        public function sendMessage($request){
            $query = $this->db->pdo->prepare('INSERT INTO mesazhet (sender_name, sender_email, sender_message) VALUES (:sender_name, :sender_email, :sender_message)');

            $query->bindParam(':sender_name', $request['name']);
            $query->bindParam(':sender_email', $request['email']);
            $query->bindParam(':sender_message', $request['message']);

            $query->execute();
            return header('Loacation: contact-us.php');
        }


        public function readMessages(){
            $query = $this->db->pdo->query('SELECT * from mesazhet');

            return $query->fetchAll();
        }

        public function deleteMessage($id){
            $query = $this->db->pdo->prepare('DELETE from mesazhet WHERE id = :id');

            $query->bindParam(':id', $id);
            $query->execute();
            return header('Location: messagesDashboard.php');
        }

        //Stafi 

        public function readStaf(){
            $query = $this->db->pdo->query('SELECT * from stafi');
    
            return $query->fetchAll();
        }
        public function insertStaf($request){
            $request['image'] = '../resources/about-us/our team/' . $request['image'];
            $query = $this->db->pdo->prepare('INSERT INTO stafi (staff_image,staff_name,staff_position)
            VALUES (:staff_image,:staff_name, :staff_position)');
    
            $query->bindParam(':staff_image',$request['image']);
            $query->bindParam(':staff_name',$request['name']);
            $query->bindParam(':staff_position',$request['position']);
            $query->execute();
    
            return header('Location: stafiDashboard.php');
        }
        public function editStaf($id){
            $query = $this->db->pdo->prepare('SELECT * from stafi WHERE id = :id');
    
            $query->bindParam(':id', $id);
    
            $query->execute();
            return $query->fetch();
        }
        public function updateStaf($request,$id){
            $query=$this->db->pdo->prepare('UPDATE stafi SET staff_image = :staff_image, staff_name = :staff_name,
             staff_position = :staff_position WHERE id= :id');
            $query->bindParam(':staff_image',$request['image']); 
            $query->bindParam(':staff_name',$request['name']); 
            $query->bindParam(':staff_position',$request['position']);
            $query->bindParam(':id',$id);
            
            $query->execute();
    
            return header('Location: stafiDashboard.php');
        }
        public function deleteStaf($id){
            $query = $this->db->pdo->prepare('DELETE from stafi WHERE id=:id');
            $query->bindParam(':id',$id);
            $query->execute();
    
            return header('Location: stafiDashboard.php');
        }

        //User

        public function readUser(){
            $query = $this->db->pdo->query("SELECT * from user");

            return $query->fetchAll();
        }

        public function insertUser(\User $request){
        
        // $user = new User;
        $email=$request->getEmail();
        $username = $request->getUsername();
        $password=password_hash($request->getPassword(), PASSWORD_BCRYPT);
        $role=$request->getRole();

        $query = $this->db->pdo->prepare('INSERT INTO user (email,username,user_password,user_role)
        VALUES (:email,:username, :user_password, :user_role)');

        $query->bindParam(':email',$email);
        $query->bindParam(':username',$username);
        $query->bindParam(':user_password',$password);
        $query->bindParam(':user_role',$role);
        $query->execute();

        return header('Location: login.php');
        }

        public function editUser($id){
            $query = $this->db->pdo->prepare('SELECT * from user WHERE id = :id');
    
            $query->bindParam(':id', $id);
    
            $query->execute();
            return $query->fetch();
        }
        public function updateUser($request,$id){
            $query=$this->db->pdo->prepare('UPDATE user SET email = :user_email, username = :username,
             user_role = :user_role WHERE id= :id');
            $query->bindParam(':user_email',$request['email']); 
            $query->bindParam(':username',$request['username']); 
            $query->bindParam(':user_role',$request['user_role']);
            $query->bindParam(':id',$id);
            
            $query->execute();
    
            return header('Location: userDashboard.php');
        }

        public function deleteUser($id){
            $query = $this->db->pdo->prepare('DELETE from user WHERE id=:id');
            $query->bindParam(':id',$id);
            $query->execute();
    
            return header('Location: userDashboard.php');
        }
    }
?>
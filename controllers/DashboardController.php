<?php
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
    }
?>
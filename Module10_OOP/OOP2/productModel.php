<?php

class productModel extends Database {

    public $table = "t3h_oop1";

    public function __construct($idDb, $userDb, $passDb, $DbName)
    {   
        // truy xuất thuộc tính cố định của parent
        // __construct là hàm thuộc tính cố định
        parent::__construct($idDb, $userDb, $passDb, $DbName);
    }

     /**
     * Lấy ra tất các bản ghi từ bảng products
     */
    public function index() {
        $sqlSelect = "SELECT * FROM " .$this->table;
        $result = $this->connect->query($sqlSelect);
        return $result;  
    }

    
    /**
     * không cần cái key id array('product_name' => 'son môi')
     * Lấy ra tất các bản ghi từ bảng products
     * @param $data: chính là mảng truyền vào chứa dữ liệu để tạo 1 bản ghi mới
     */
    public function create($data) {
        // $this->connection

        if(isset($data['product_name']) && isset($data['product_desc']) && isset($data['created'])) {
            $productName = $data['product_name'];
            $productDesc = $data['product_desc'];
            $created = $data['created'];

            $queryInsert = "INSERT INTO " . $this->table . "(product_name, product_desc, created) 
            VALUES ('$productName', '$productDesc', '$created') ";

            return $this->connection->query($queryInsert);
            
        }

    }

    /**
     * Lấy ra tất các bản ghi từ bảng products
     * @param $data: chính là mảng chứa dữ liệu để tạo 1 bản ghi mới
     * @param $data: cần đủ các cột trong CSDL của bảng products
     */
    public function edit($data) {
        // $this->connection
    }

     /**
     * Xóa
     * @param $prodcut_id
     */
    public function delete($prodcut_id) {
    }

}

?>
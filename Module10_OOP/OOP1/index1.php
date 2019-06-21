<?php
/**
 * class ( lớp )
 * object ( đối tượng )
 * instance ( thể hiện của 1 class ) đối tượng cụ thể
 * class Người
 * đối tượng hay instance là tuấn
 */

class student
{
    /**
     * Thuộc tính trong hướng đối tượng là tính chất của class đó
     * 
     */

    public $name;
    public $age;
    public $location;
    public $point;

    /**
     * Phương thức đầu tiên của class
     * phương thức khởi tạo __construct()
     * phương thức này nó sẽ chạy ngay khi khởi tạo đối tượng
     * từ class mà không cần gọi trực tiếp
     * Hàm thì nằm ngoài class
     * Còn phương thức method nằm trong class
     * method chính là hàm bên trong class
     */

    public function __construct($name, $age, $location)
    {
        /**
         * Gán tham số truyền vào thuộc tính của class
         * Trong class để gọi đến chính class thì ta dùng từ khóa $this
         * để gọi thuộc tính $this->tên_thuộc_tính nhưng chú ý là tên thuộc tính
         * không có $
         * $this->$name ( viết sai )
         * $this->name ( viết đúng )
         */

        $this->name = $name;
        $this->age = $age;
        $this->location = $location;

        /**
         * __METHOD__ là magic method cho ta biết
         * phương thức nào đang được gọi
         */
        echo "<br> __METHOD__ " . __METHOD__;
    }

    /**
     * Xây dựng phương thức khác
     */

    /* 
        In ra thông tin
     */
    public function printInfo()
    {
        echo "<bre> __METHOD__" . __METHOD__;
        echo "<br> ten sv: " . $this->name;
        echo "<br> tuoi sv: " . $this->age;
        echo "<br> que quan sv: " . $this->location;
    }

    /* 
        TÍnh điểm
    */
    public function calculatePoint($point_arr_param)
    {
        /**
         * is_array() kiểm tra biến có phải 1 mảng hay không
         * !empty() check không rỗng
         * empty() check rỗng
         * ! toán tử ! phủ định người lại
         */

         if(is_array($point_arr_param) && !empty($point_arr_param)) {
                $count = 0; 
                $total = 0;
                foreach($point_arr_param as $key=>$value) {
                     $total += $value;
                     $count ++;   
                }
                $this->point = $total / $count;
         }
         return false;
    }
}

/**
 * Khởi tạo đối tượng cụ thể của class
 * Sử dụng từ khóa new tên_class()
 */

 $anTake = new student("Do Van An", 21, "Ha Noi");
 
 echo "<br> Gọi đến method printInfo() ";
/**
 * Gọi 1 phương thức
 */
 $anTake->printInfo();

 /**
 * Gọi 1 số thuộc tính bên trong class
 */

echo "<br> In ra tên của sinh viên bên ngoài class " . $anTake->name;
echo "<br> In ra tuoi của sinh viên bên ngoài class " . $anTake->age;
echo "<br> In ra que quan của sinh viên bên ngoài class " . $anTake->location;

echo "<br> In ra cấu trúc của class";
/**
 * Xem cấu trúc của 1 class
 * thì sử dụng hàm print_r()
 */
echo "<pre>";
print_r($anTake);
echo "</pre>";

// Gọi đến phương thức calculatePoint()
$pont1 = array('toan' => 10,
                'ly' => 7,
                'hoa' => 1,
                'van' => 8,
                'anh' => 3,
                'su' => 2,
                'dia' => 8 );
           
$anTake->calculatePoint($pont1);
echo "<br>diem trung binh : " . $anTake->point;



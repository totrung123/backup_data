<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<form name="form1" action="xuly_sua_loaitin.php" method = "post">
<?php
    require_once 'dbcon.php';

    // B2. Thuc thi Truy van
    try{
        $id = $_GET['id'];
        $sql = "SELECT * FROM loaitin WHERE maloai='$id'";
        $stmt = $conn->prepare($sql); //MySQL hãy chuẩn bị thực thi
        //$stmt->bindParam(':id',$id,PDO::PARAM_STR);
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
    }catch(PDOException $e){
        echo $sql;
        echo $e->getMessage();
    }
    ?>
<div class="container">
        <div class="row">
            <div class="col-md-10">
                <h3>Sửa loại tin</h3>
            <form action="xuly_sua_loaitin.php" method="post">
                <div class="mb-3">
                    <label for="txtCatID" class="form-label">Mã:</label>
                    <input type="text" class="form-control bg-secondary" name="txtCatID" value="<?php echo $row['maloai']; ?>" readonly>
                </div>
                <div class="mb-3">
                    <label for="txtCatName" class="form-label">Tên :</label>
                    <input type="text" class="form-control" name="txtCatName" value="<?php echo $row['tenloai']; ?>">
                </div>
                <div class="mb-3">
                    <label for="txtCatID" class="form-label">Trạng thái:</label>
                    <input type="text" class="form-control bg-secondary" name="txtCat" value="<?php echo $row['trangthai']; ?>" >
                </div>
                
                <button type="submit" class="btn btn-primary">Lưu lại</button>
                </form>
            </div>
        </div>
    </div>


</form>

<!--Abyan Ardiatama-->
<!--24060120140161-->
<!--Praktikum PBP 4-->
<html>
<head>
    <meta charset="utf-8">
    <title>add_customer</title>
    <link rel="stylesheet" href="bootstrap.min.css">
    </style>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
    
    <?php
    //File        : add_customer.php
    //Deskripsi   : menampilkan form tambah data customer dan menambahkan ke database
    //session_start();
    require_once('db_login.php');
    $id = $_GET['id'];//mendapatkan customerid yang dilewatkan url
    
    //menngecek apakah user belum menekan tombol submit
    /*if (!isset($_POST["submit"])){
        $query = " SELECT * FROM customers WHERE customerid=" .$id. " ";
        //execute the query
        $result = $db->query($query);
        if (!$result){
            die ("Could not the query database: <br />" . $db->error);
        } else {
            while ($row = $result->fetch_object()){
                $name = $row->name;
                $address = $row->address;
                $city = $row->city;
            }
        }
    }else{
        $valid = TRUE; //flag validasi
        $name = test_input($_POST['name']);
        if($name == ''){
            $error_name = "Name is required";
            $valid = FALSE;
        }elseif(!preg_match("/^[a-zA-Z ]*$/",$name)){
            $error_name = "Only letters and white space allowed";
            $valid = FALSE;
        }

        $address = test_input($_POST['address']);
        if($address == ''){
            $error_address = "Address is required";
            $valid = FALSE;
        }

        $city = $_POST['city'];
        if($city == '' || $city == 'none'){
            $error_city = "City is required";
            $valid = FALSE;
        }

        //update data into database
        if($valid){
            //assign a query
            $query = "INSERT INTO customers VALUES ('".$name."','".$address."','".$city."')";
            //execute the query
            $result = $db->query($query);
            if(!$result){
                die ("Could not query the database: <br />". $db->error);
            }else{
                echo 'Data has been updated. <br />';
                echo '<a href="index.php">Back</a>';
                $db->close();
                exit;
            }
        }
    }*/
    ?>
    
    <div class="container"><br>
    <div class="card">
    <div class="card-header">Tambah Customer</div> 
    <div class="card-body">
    
    <div class="form-group">
        <label for="name">Nama:</label>
        <input type="text" class="form-control" id="name" name="name" value="<?php echo $name;?>">
        <!-- Fungsi isset() memeriksa apakah suatu variabel disetel, yang berarti variabel tersebut harus dideklarasikan dan bukan NULL. -->
        <div class="text-danger"><?php if (isset($error_name)) echo $error_name;?></div>
    </div>
    <div class="form-group">
        <label for="address">Address:</label>
        <textarea class="form-control" id="address" name="address" rows="5"><?php echo $address;?></textarea>
        <div class="text-danger"><?php if (isset($error_address)) echo $error_address;?></div>
    </div>
    <div class="form-group">
        <label for="city">City:</label>
        <select name="city" id="city" class="form-control" required>
            <option value="none" <?php if (isset($city)) echo 'selected="true"';?>>--Select a city--</option>
            <option value="Airport West" <?php if (isset($city) && $city=="Airport West") echo 'selected="true"';?>>Airport West</option>
            <option value="Box Hill" <?php if (isset($city) && $city=="Box Hill") echo 'selected="true"';?>>Box Hill</option>
            <option value="Yarravile" <?php if (isset($city) && $city=="Yarravile") echo 'selected="true"';?>>Yarravile</option>
        </select>
        <div class="text-danger"><?php if(isset($error_city)) echo $error_city;?></div>
    </div>
    <br>
    <button type="submit" class="btn btn-primary" name="submit" value="submit">Submit</button>
    <a href="view_customer.php" class="btn btn-secondary">Cancel</a>
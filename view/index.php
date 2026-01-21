<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product-page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body style="margin:0; font-family: Arial, sans-serif;">

    <div style="width:100%; padding-top:20px;">
        <div>
            <div style="
                width:50%;
                margin:auto;
                border:2px solid #0d6efd;
                padding:20px;
            ">

                <form action="insert.php" method="POST" enctype="multipart/form-data">

                    <div style="margin-bottom:15px;">
                        <p style="
                            text-align:center;
                            font-weight:bold;
                            font-size:24px;
                            color:#ffc107;
                        ">Product Detail:</p>
                    </div>

                    <div style="margin-bottom:15px;">
                        <label style="display:block; margin-bottom:5px;">
                            Product Name:
                        </label>
                        <input type="text" placeholder="Enter product name"
                               style="
                                   width:100%;
                                   padding:8px;
                                   font-size:16px;
                                   border:1px solid #ccc;
                               " name="pname">
                    </div>

                    <div style="margin-bottom:15px;">
                        <label style="display:block; margin-bottom:5px;">
                            Product Price:
                        </label>
                        <input type="text" placeholder="Enter product price"
                               style="
                                   width:100%;
                                   padding:8px;
                                   font-size:16px;
                                   border:1px solid #ccc;
                               " name="pprice">
                    </div>

                    <div style="margin-bottom:15px;">
                        <label style="display:block; margin-bottom:5px;">
                            Add product image:
                        </label>
                        <input type="file"
                               style="
                                   width:100%;
                                   padding:6px;
                                   border:1px solid #ccc;
                               " name="pimage">
                    </div>

                    <div style="margin-bottom:15px;">
                        <label style="display:block; margin-bottom:5px;">
                            Select page category:
                        </label>
                        <select style="
                            width:100%;
                            padding:8px;
                            font-size:16px;
                            border:1px solid #ccc;
                        " name="pages">
                            <option value="Home">Home</option>
                            <option value="Ladies">Ladies Item</option>
                            <option value="Gents">Gents Item</option>
                        </select>
                    </div>

                    <button type="submit" style="
                        width:100%;
                        background-color:#dc3545;
                        color:white;
                        font-size:20px;
                        font-weight:bold;
                        padding:10px;
                        border:none;
                        cursor:pointer;
                        margin-top:15px;
                    " name="submit">
                        Upload
                    </button>

                </form>

            </div>
        </div>
    </div>
          <!-- fetch data -->
<div class="container">
    <div class="row">
        <div class="col-md-10 m-auto">

            <table class="table table-hover border my-5">
                <thead>
                    
                        <th>Id</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Image</th>
                        <th>Category</th>
                        <th>Delete</th>
                
                </thead>

                <tbody>
                <?php
                include 'Config.php';

                $Record = mysqli_query($con, "SELECT * FROM `tdlproduct` ");

                while ($row = mysqli_fetch_array($Record)) {
                    echo "
                    <tr>
                        <td>{$row['Id']}</td>
                        <td>{$row['PName']}</td>
                        <td>{$row['PPrice']}</td>
                        <td>
                            <img src='{$row['PImage']}' height='90px' width='120px'>
                        </td>
                        <td>{$row['PCategory']}</td>
                        <td>
                            <a href='delete.php?id={$row['Id']}'>Delete</a>
                        </td>
                    </tr>
                    ";
                }
                ?>
                </tbody>

            </table>

        </div>
    </div>
</div>


</body>

</html>
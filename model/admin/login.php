<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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

                <form action="login1.php" method="POST" >

                    <div style="margin-bottom:15px;">
                        <p style="
                            text-align:center;
                            font-weight:bold;
                            font-size:24px;
                            color:#ffc107;
                        ">Login:</p>
                    </div>

                    <div style="margin-bottom:15px;">
                        <label style="display:block; margin-bottom:5px;">
                            Name:
                        </label>
                        <input type="text" placeholder="Enter username"
                               style="
                                   width:100%;
                                   padding:8px;
                                   font-size:16px;
                                   border:1px solid #ccc;
                               " name="username">
                    </div>

                    <div style="margin-bottom:15px;">
                        <label style="display:block; margin-bottom:5px;">
                            Password:
                        </label>
                        <input type="password" placeholder="Enter password"
                               style="
                                   width:100%;
                                   padding:8px;
                                   font-size:16px;
                                   border:1px solid #ccc;
                               " name="userpassword">
                    </div>

                    

                    <button  style="
                        width:100%;
                        background-color:#dc3545;
                        color:white;
                        font-size:20px;
                        font-weight:bold;
                        padding:10px;
                        border:none;
                        cursor:pointer;
                        margin-top:15px;
                    " >
                        Login 
                    </button>

                </form>

            </div>
        </div>
    </div>
</body>
</html>
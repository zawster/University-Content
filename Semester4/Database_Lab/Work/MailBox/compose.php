<html>
<head>
    <title>New</title>
</head>
<body>
    <?php 
        $a = $_POST['email'];
        $b = $_POST['subject'];
        $c = $_POST['msg'];
        echo $a;
        echo $b;
        echo $c;
     ?>
</body>
</html>


<!--html>
<head>
    <title>Mail System</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <style>
        body{
            background-color: #D3D3D3;
        }
        input[type=text]{
          width: 60%;
          padding: 12px 20px;
          margin: 8px 0;
          display: inline-block;
          border: 2px solid #ccc;
          border-radius: 4px;
        }
        .compose{
            padding-top: 0px;
            padding-right: 5px;
            padding-bottom: 30px;
            position: relative;
        }
        .sidebar{
            padding-top: 20px;
            margin-top: 20px;
            padding: 10px;
            margin: 10px;
            width: 300px;
            height: 100%;
            border-right: 1px solid black;
            
        }
        
        


    </style>
</head>
<body>
        
    <div class="inner-addon right-addon" align="center">
        <i class="glyphicon glyphicon-search"></i>      
        <input type="text"  placeholder="Search mail" />
    </div>
    <div class="row">
        <div class="sidebar col col-md-4" align="left">
            <div  align="center" class="compose">
                <button type="button" class="glyphicon glyphicon-plus btn btn-default btn-lg btn-primary" data-toggle="modal" data-target="#myModal">Compose Email</button>
            </div>
         <hr>

             <ul class="nav nav-pills nav-stacked">
                <li>
                    <a href="#">
                        <i class="glyphicon glyphicon-inbox"> Inbox</i> <span class="label label-danger pull-right">0</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="glyphicon glyphicon-star"> Started</i>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <i class="glyphicon glyphicon-send"> Sent</i>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <i class="glyphicon glyphicon-file"> Drafts</i> <span class="label label-danger pull-right">0</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="glyphicon glyphicon-envelope"> All-Mail</i>
                    </a>
                </li>

            </ul><hr>
            
            <h5 class="nav-email-subtitle">More</h5>
        <ul class="nav nav-pills nav-stacked  ">
            <li>
                <a href="#">
                    <i class="glyphicon glyphicon-heart"> Promotions</i> <span class="label label-danger pull-right">3</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="  glyphicon glyphicon-list-alt"> Job list</i> 
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="glyphicon glyphicon-hdd"> Backup</i>
                </a>
            </li>
        </ul>
        </div>
        <div class="col inbox col-md-8" align="right">        Main div   

 




        </div>
        
</body>
</html>

    <!--//-----------///////////////////////////////////////////-->
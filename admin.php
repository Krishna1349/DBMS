<?php
	$servername="localhost";
	$uname="root";
	$pswd="sagar@123";
	$conn=mysqli_connect($servername,$uname,$pswd,"college");
	if(!$conn){
		echo "Connection failed";
	}
	else{
      ?>
      <html>
      <head>
        <style>
        footer {
          padding: 1em;
          color: white;
          background-color: black;
          clear: left;
          text-align: center;
      }
      ul {
          list-style-type: none;
          margin: 0;
          padding: 0;
          overflow: hidden;
          background-color: black;
      }

      li {
          float: left;
      }

      li a {
          display: block;
          color: white;
          text-align: center;
          padding: 16px;
          text-decoration: none;
      }

      li a:hover {
          background-color: red;
      }
      .mySlides {display:none;}


      /* Full-width input fields */
      input[type=text], input[type=password] {
          width: 100%;
          padding: 12px 20px;
          margin: 8px 0;
          display: inline-block;
          border: 1px solid #ccc;
          box-sizing: border-box;
      }

      /* Set a style for all buttons */
      button {
          background-color: #4CAF50;
          color: white;
          padding: 14px 20px;
          margin: 8px 0;
          border: none;
          cursor: pointer;
          width: 100%;
      }

      button:hover {
          opacity: 0.8;
      }

      /* Extra styles for the cancel button */
      .cancelbtn {
          width: auto;
          padding: 10px 18px;
          background-color: #f44336;
      }

      /* Center the image and position the close button */
      .imgcontainer {
          text-align: center;
          margin: 24px 0 12px 0;
          position: relative;
      }

      img.avatar {
          width: 40%;
          border-radius: 50%;
      }

      .container {
          padding: 16px;
      }

      span.psw {
          float: right;
          padding-top: 16px;
      }

      /* The Modal (background) */
      .modal {
          display: none; /* Hidden by default */
          position: fixed; /* Stay in place */
          z-index: 1; /* Sit on top */
          left: 0;
          top: 0;
          width: 100%; /* Full width */
          height: 100%; /* Full height */
          overflow: auto; /* Enable scroll if needed */
          background-color: rgb(0,0,0); /* Fallback color */
          background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
          padding-top: 60px;
      }

      /* Modal Content/Box */
      .modal-content {
          background-color: #fefefe;
          margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
          border: 1px solid #888;
          width: 80%; /* Could be more or less, depending on screen size */
      }

      /* The Close Button (x) */
      .close {
          position: absolute;
          right: 25px;
          top: 0;
          color: #000;
          font-size: 35px;
          font-weight: bold;
      }

      .close:hover,
      .close:focus {
          color: red;
          cursor: pointer;
      }

      /* Add Zoom Animation */
      .animate {
          -webkit-animation: animatezoom 0.6s;
          animation: animatezoom 0.6s
      }

      @-webkit-keyframes animatezoom {
          from {-webkit-transform: scale(0)}
          to {-webkit-transform: scale(1)}
      }

      @keyframes animatezoom {
          from {transform: scale(0)}
          to {transform: scale(1)}
      }

      /* Change styles for span and cancel button on extra small screens */
      @media screen and (max-width: 300px) {
          span.psw {
             display: block;
             float: none;
          }
          .cancelbtn {
             width: 100%;
          }
      }
      .dropdown {
          float: left;
          overflow: hidden;
      }

      .dropdown .dropbtn {
          font-size: 17px;
          border: none;
          outline: none;
          color: white;
          padding: 14px 16px;
          background-color: inherit;
          font-family: inherit;
          margin: 0;
      }

      .dropdown-content {
          display: none;
          position: absolute;
          background-color: #f9f9f9;
          min-width: 160px;
          box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
          z-index: 1;
      }

      .dropdown-content a {
          float: none;
          color: black;
          padding: 12px 16px;
          text-decoration: none;
          display: block;
          text-align: left;
      }

      .topnav a:hover, .dropdown:hover .dropbtn {
        background-color: #555;
        color: white;
      }

      .dropdown-content a:hover {
          background-color: #ddd;
          color: black;
      }

      .dropdown:hover .dropdown-content {
          display: block;
      }

      @media screen and (max-width: 600px) {
        .topnav a:not(:first-child), .dropdown .dropbtn {
          display: none;
        }
        .topnav a.icon {
          float: right;
          display: block;
        }
      }

      @media screen and (max-width: 600px) {
        .topnav.responsive {position: relative;}
        .topnav.responsive .icon {
          position: absolute;
          right: 0;
          top: 0;
        }
        .topnav.responsive a {
          float: none;
          display: block;
          text-align: left;
        }
        .topnav.responsive .dropdown {float: none;}
        .topnav.responsive .dropdown-content {position: relative;}
        .topnav.responsive .dropdown .dropbtn {
          display: block;
          width: 100%;
          text-align: left;
        }
      }
      #new_std,#updt,#updt_fclty,#new_fclty,#del_fclty
      		{
      			display: none;
            width:65%;

      		}
	  #bx{
		  margin-left:125px;
		  width:40em;
		  font-size: 15px;
	  }
	  #rd{
		  margin-left:40px;
	  }
	body{
background-image: linear-gradient(to top, #fbc2eb 0%, #a6c1ee 100%);
	}
      </style>
      </head>
      <body>
        <ul>
            <div>
            <li><a href ="index.html">Home</a></li>
            <div class="dropdown">
              <button class="dropbtn">Student
                <i class="fa fa-caret-down"></i>
              </button>
              <div class="dropdown-content">
                <a href="#" onclick="new_std()">New student</a>
                <a href="#" onclick="updt()">Update</a>
              </div>
						</div>
						<div class="dropdown">
							<button class="dropbtn">Staff
                <i class="fa fa-caret-down"></i>
              </button>
              <div class="dropdown-content">
                <a href="#" onclick="new_fclty()">New faculty</a>
                <a href="#" onclick="updt_fclty()">Update</a>
				<a href="#" onclick="del_fclty()">Delete</a>
              </div>
            </div>
              <li><a href="logout.php">Logout</a></li>

            </div>
          </ul>

          <div id="new_std">
            <form  method="POST" action="new_std.php" >
                <h3>Enter ssn :</h3><input id="bx" type="text" name="ssn" placeholder="student ssn" required autofocus>
				<h3>Enter Name :</h3><input id="bx" type="text" name="name" placeholder="student name" required autofocus>
                <h3>Enter address :</h3><input id="bx" type="text" name="addrs" placeholder="student address" required autofocus>
                <h3>Enter Gender :</h3><input  id="bx"type="text" name="gender" placeholder="student gender" required autofocus>
                <h3>Enter Ph_no :</h3><input id="bx" type="text" name="p_no" placeholder="student ph_no" required autofocus>
                <h3>Enter DOB :</h3><input id="bx" type="text" name="dob" placeholder="YYYY-MM-DD" required pattern="[0-9]{4}-[0-9]{2}-[0-9]{2}" autofocus>
                <h3>Enter Section :</h3><input id="bx" type="text" name="section" placeholder="student section" required autofocus>
                <h3>Enter sem :</h3><input id="bx" type="text" name="sem" placeholder="student sem" required autofocus>
                <h3>Enter dept_Id :</h3><input id="bx" type="text" name="d_id" placeholder="student d_id" required autofocus>
              <br></br><button style="width:220px; margin-left:30%;" type="submit">submit</button>
            </form>
          </div>
          <div id="updt">
            <form  method="POST" action="admin_updt_std.php" >
                <h3>Enter ssn :</h3> <input id="bx" type="text" name="ssn" placeholder="student ssn" required autofocus>
                <h3>What you wanted to update :</h3>
                ssn :<input style="margin-left:29px" type="radio" name="name" value="ssn">
                name :   <input style="margin-left:25px" type="radio" name="name" value="name"><br>
                dob :    <input style="margin-left:21px" type="radio" name="name" value="dob">

                gender : <input style="margin-left:16px" type="radio" name="name" value="gender"><br>
                p_no : <input style="margin-left:12px" type="radio" name="name" value="p_no" >
                addrs :<input style="margin-left:30px" type="radio" name="name" value="addrs"><br>
                sem :  <input style="margin-left:19px" type="radio" name="name" value="sem">
                section :<input style="margin-left:18px" type="radio" name="name" value="section"><br>
                d_id : <input style="margin-left:16px" type="radio" name="name" value="d_id">
                
                <h3>Enter data which needs to be update :</h3>
               <input id="bx" type="text" name="data" placeholder="value to be update" required autofocus>
              <br></br><button style="width:220px; margin-left:30%;" type="submit">submit</button>
            </form>
          </div>
					<!--  NEW FACULTY-->
					<div id="new_fclty">
            <form  method="POST" action="new_fclty.php" >
                <h3>Enter fid :</h3> <input id="bx" type="text" name="f_id" placeholder="Faculty ID" required autofocus>
                <h3>Enter Name :</h3> <input id="bx" type="text" name="name" placeholder="Faculty name" required autofocus>
                <h3>Enter salary :</h3> <input id="bx" type="text" name="salary" placeholder="Faculty salary" required autofocus>
                <h3>Enter dept_Id :</h3> <input id="bx" type="text" name="d_id" placeholder="dept_id" required autofocus>
              <br></br><button style="width:220px; margin-left:30%;" type="submit">submit</button>
            </form>
          </div>
					<div id="updt_fclty">
            <form  method="POST" action="admin_updt_fclty.php" >
                <h3>Enter fid :</h3> <input id="bx" type="text" name="f_id" placeholder="Faculty ID" required autofocus>
                <h3>What you wanted to update :</h3>
                FID :  <input id="rd" type="radio" name="name" value="f_id">
                Name :   <input style="margin-left:22px;" type="radio" name="name" value="name"><br></br>
                Dept_id :    <input style="margin-left:13px" type="radio" name="name" value="d_id">
								Salary :   <input style="margin-left:18px" type="radio" name="name" value="salary"><br></br>
                <h3>Enter data which needs to be update :</h3>
               <input id="bx" type="text" name="data" placeholder="value to be update" required autofocus>
              <br></br><button style="width:220px; margin-left:30%;" type="submit">submit</button>
            </form>
          </div>
					<div id="del_fclty">
						<form  method="POST" action="admin_del_fclty.php" >
								<h3>Enter fid to delete faculty data : </h3>
								<input id="bx" type="text" name="f_id" placeholder="Faculty ID" required autofocus>
							<button style="width:220px; margin-left:30%;" type="submit">submit</button>
						</form>
					</div>

          <script>
          function new_std(){
              var newstd=document.getElementById("new_std");
              newstd.style.display='block';
              var newstd=document.getElementById("updt");
              newstd.style.display='none';
							var newstd=document.getElementById("updt_fclty");
							newstd.style.display='none';
							var newstd=document.getElementById("new_fclty");
							newstd.style.display='none';
							var newstd=document.getElementById("del_fclty");
							newstd.style.display='none';
            }
            function updt(){
                var newstd=document.getElementById("updt");
                newstd.style.display='block';
                var newstd=document.getElementById("new_std");
                newstd.style.display='none';
								var newstd=document.getElementById("updt_fclty");
								newstd.style.display='none';
								var newstd=document.getElementById("new_fclty");
								newstd.style.display='none';
								var newstd=document.getElementById("del_fclty");
								newstd.style.display='none';
              }
							function new_fclty(){
								var newstd=document.getElementById("updt_fclty");
								newstd.style.display='none';
								var newstd=document.getElementById("new_fclty");
								newstd.style.display='block';
		              var newstd=document.getElementById("new_std");
		              newstd.style.display='none';
		              var newstd=document.getElementById("updt");
		              newstd.style.display='none';
									var newstd=document.getElementById("del_fclty");
									newstd.style.display='none';
		            }
		            function updt_fclty(){
									var newstd=document.getElementById("updt_fclty");
									newstd.style.display='block';
									var newstd=document.getElementById("new_fclty");
									newstd.style.display='none';
										var newstd=document.getElementById("updt");
		                newstd.style.display='none';
		                var newstd=document.getElementById("new_std");
		                newstd.style.display='none';
										var newstd=document.getElementById("del_fclty");
										newstd.style.display='none';
		              }
									function del_fclty(){
										var newstd=document.getElementById("updt_fclty");
										newstd.style.display='none';
										var newstd=document.getElementById("new_fclty");
										newstd.style.display='none';
											var newstd=document.getElementById("updt");
			                newstd.style.display='none';
			                var newstd=document.getElementById("new_std");
			                newstd.style.display='none';
											var newstd=document.getElementById("del_fclty");
											newstd.style.display='block';
			              }
          </script>
<?php
} ?>

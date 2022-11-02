<html>
<head>
 <style>
  @import url('https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap');

*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  list-style: none;
  font-family: 'Josefin Sans', sans-serif;
}

body{
   background-color: #f3f3f3;
}

.wrapper{
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%,-50%);
  max-width: 600px;
  display: flex;
  box-shadow: 0 1px 20px 0 rgba(69,90,100,.08);
}

.wrapper .left{
  width: 35%;
  background: linear-gradient(to right,#01a9ac,#01dbdf);
  padding: 30px 25px;
  border-top-left-radius: 5px;
  border-bottom-left-radius: 5px;
  text-align: center;
  color: #fff;
}

.wrapper .left img{
  border-radius: 5px;
  margin-bottom: 10px;
}

.wrapper .left h4{
  margin-bottom: 10px;
}

.wrapper .left p{
  font-size: 12px;
}

.wrapper .right{
  width: 65%;
  background: #fff;
  padding: 30px 25px;
  border-top-right-radius: 5px;
  border-bottom-right-radius: 5px;
}

.wrapper .right .info,
.wrapper .right .projects{
  margin-bottom: 25px;
}

.wrapper .right .info h3,
.wrapper .right .projects h3{
    margin-bottom: 15px;
    padding-bottom: 5px;
    border-bottom: 1px solid #e0e0e0;
    color: #353c4e;
  text-transform: uppercase;
  letter-spacing: 5px;
}

.wrapper .right .info_data,
.wrapper .right .projects_data{
  display: flex;
  justify-content: space-between;
  
}

.wrapper .right .info_data .data,
.wrapper .right .projects_data .data{
  width: 45%;
  
}

.wrapper .right .info_data .data h4,
.wrapper .right .projects_data .data h4{
    color: #353c4e;
    
    margin-bottom: 5px;
}

.wrapper .right .info_data .data p,
.wrapper .right .projects_data .data p{
  font-size: 13px;
  margin-bottom: 10px;
  
  color: #919aa3;
}



 
 </style>
</head>
<body>

<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>

<div class="wrapper">
    <div class="left">
        <img src="img_avatar.png" alt="user" width="100">
        <h4>Abhishek jagtap</h4>
         
    </div>
    <div class="right">
        <div class="info">
            <h3>Information</h3>
            <div class="info_data">
                 <div class="data">
                    <h4>Email</h4>
                    <p>jagtapabhishek227@gmail.com</p>
     
                    <h4>Address</h4>
                    <p>Shivane,NDA Road,Pune-411023</p>
                 </div>
                 <div class="data" style="margin-left:60px;">
                   <h4>Phone</h4>
                    <p>8745998761</p>
              
                   <h4>DOB</h4>
                   <p>15-12-2000</p>     
              </div>
            </div>
        </div>
      
      <div class="projects"> 
            <h3>Bookings</h3>
            <div class="projects_data">
                 <div class="data">
                    <h4>Recent</h4>
                    <p>1.Kashmir Tour</p>
                    <p>2.Andhra Pradesh Tour</p>
                 </div>
                 <div class="data" style="float:right;">
                   <h4>Date</h4>
                    <p>12-12-2020</p>
                    <p>11-09-2020</p>
              </div>
            </div>
        </div>
      
       
    </div>
</div>

</body></html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>task1</title>
   <style>
    .info-R{
        display: flex; flex-direction: row; width:50%; align-items: center; padding:20px;
    }
    h3 { display: inline; font-size: 16px; font-weight: normal; margin-right: 10px; }
    h2 { font-size: 18px; width: 120px; }
    </style>
</head>
        <body>
           
                <form action="Done.php" method="POST">
            
 
<div class="info-R">
    <h2> First Name: </h2> 
    <br>
    <input type="text" name="First-name" placeholder="write here">
</div>
<div class="info-R">

 <h2> Last Name: </h2>
    <input type="text" name="Last-name" placeholder="write here">
</div>

<div class="info-R">
<h2> Address: </h2>
<textarea name="address" rows="4" cols="30" placeholder="Write your address in details"></textarea>
</div>

<div class= "info-R">
     <h2>Country:  </h2>
    <select name="country">
    <option value="">Select Country</option> 
    <option value="EG">Egypt</option>
    <option value="SA">Saudi Arabia</option>
    <option value="US">USA</option>
    </select>
</div>

<div class= "info-R">
<h2> Gender: </h2>
<input type= "radio" name="gender" value="Male"><h3> Male </h3>
<input type= "radio" name="gender" value="Female"><h3> Female </h3>
</div>

<div class= "info-R">
<h2> Skills: </h2>
<input type="checkbox" name="skills[]"><h3> php </h3>
<input type= "checkbox" name="skills[]"><h3> Js </h3>
<input type= "checkbox" name="skills[]"><h3> MySQlS </h3>
<input type= "checkbox" name="skills[]"><h3> html </h3>
</div>
 
<div class="info-R">
     <h2> User Name:  </h2>
    <input type="text" name="username" placeholder="write your name">
</div>

<div class="info-R">
    <h2> Password: </h2>
    <input type="password" name="password" placeholder="write yourPassword">
</div>
<div class="info-R">
    <h2> Email: </h2>
    <input type="text" name="email" placeholder="example@mail.com">
</div>
<div class="info-R">
    <h2> Department: </h2>
    <input type="text" name="department">
</div>
<div class="info-R">
    <h2> code:sh68so </h2>
    <input type="text" name="copying" placeholder="write the code below">
    </div>

<div style="margin-left: 140px; margin-top: 20px;">
            <button type="submit">Submit</button>
            <button type="reset">Reset</button>
        </div>
</form>
</body>
    </head>



</html>





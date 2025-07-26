<!DOCTYPE html>
<html>
<style>
   
  table{
    background-color: #f0f0f0;
    width: auto;
    margin: 0px;
    padding: 10x;
    border: 1px solid black;
    position: static;
    display: inline-block;
  } 
  .button{
    background-color:blue;
    color: white;
    padding: 5px;
    z-index: 1;
  }
  div {
  background-color: #f0f0f0;
  width: 200px;
  height: 100px;
  border: 1px solid black;
  overflow: scroll;
  outline: 2px solid red;
  margin: 1px;
  
}
#color{
    color:blue;
}

#solid {outline-style: solid;}

</style>
<body style="background-color: lightblue;">
   
   <center>
    <h1 id="color">Bank Management System</h1> 
    <h2 id="color">Your Trusted Financial Partner</h2>
   </center>
   <h3 align="left">Customer Registration form</h3>
   <table>
            <tr>
                <td>Full Name: </td>
                <td><input type="text"></td>
            </tr>
            <tr>
                <td>Death of Birth: </td>
                <td><input type="date"></td>
            </tr>
             <tr>
                <td>Gender:</td>
                <td>
                <input type="radio" name="des">Male
                <input type="radio" name="des">Other
                </td> 
            </tr>
            <tr>
                <td>Marital Status</td>
                <td><select>
                    <option value="Single">Single</option>
                    <option value="Married">Married</option>
                </select></td>
            </tr>
            <tr>
                <td>Account Type:</td>
                <td>
                    <select>
                        <option value="Savings">Savings</option>
                        <option value="Current">Current</option>
                        <option value="Fixed Deposit">Fixed Deposit</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Initial Deposit Account:</td>
                <td><input type="number" ></td>
            </tr>
            <tr>
                <td>Mobile Number:</td>
                <td><input type="number"></td>
            </tr>
            <tr>
                <td>Email Address:</td>
                <td><input type="email"></td>
            </tr>
            <tr>
                <td>Address:</td>
                <td><textarea rows="3" cols="25" ></textarea></td>
            </tr>
            <tr>
                <td>Occupation:</td>
                <td><input type="text"></td>
            </tr>
            <tr>
                <td>National ID (NID):</td>
                <td><input type="text"></td>
            </tr>
            <tr>
                <td>Set Password:</td>
                <td><input type="password"></td>
            </tr>
            <tr>
                <td>Upload ID Proof:</td>
                <td><input type="file"></td>
            </tr>
            <tr>
                <td><input type="checkbox">i agree to the terms and conditions</td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Register" class="button" >  <input type="submit" value="Clear" class="button"> </td>
                
            </tr>
        </table>
        <br>
        <div id="solid">
            <h3>Note:</h3>
            <p>Please ensure all information is accurate before submitting the form. 
            For any assistance, contact our customer support.</p>
        </div>

</body>
</html>
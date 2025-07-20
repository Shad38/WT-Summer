<!DOCTYPE html>
<html> 
    <title>This is a registration form></form></title>
    <body>
        <center>
        <h1 style="color:blue">AIUB</h1>
        <h2 style="color:blue">Registration Form</h2>
        
        </center>
        <h3 align="left">Complete the Registration</h3>
        <table>
            <tr>
                <td>Full Name: </td>
                <td><input type="text"></td>
            </tr>
            <tr>
                <td>Email: </td>
                <td><input type="text"></td>
            </tr>
            <tr>
                <td>Password: </td>
                <td><input type="text"></td>
            </tr>
             <tr>
                <td>Gender:</td>
                <td>
                <input type="radio" name="des">Male
                <input type="radio" name="des">Other
                </td> 
            </tr>
           <tr>
                <td>Language Known:</td>
                <td>
                 <input type="checkbox">English
                 <input type="checkbox">Bangla
                 <input type="checkbox">Hindi
                </td>
            </tr>
           
            <tr>
               <td>Country:</td> 
                <td><select>
                    <option value="Select country">select country</option>
                    <option value="Bangladesh">Bangladesh</option>
                    <option value="India">India</option>
                    <option value="Pakistan">Pakistan</option>
                </select></td>
            </tr>
            <tr>
                <td>Date Of Birth:</td>
                <td><input type="date"></td>
            </tr>
            <tr>
                <td>Upload Photo:</td>
                <td><input type="file"></td>
            </tr>
            <tr>
                <td>Comments:</td>
                <td><textarea rows="5" cols="35"></textarea></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Register"></td>
            </tr>
        </table>
    </body> 
</html>
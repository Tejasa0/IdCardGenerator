<?php

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ID Card Generation</title>
    <style>
        h1 {
            background-color: antiquewhite;
            text-align: center;
        }

        fieldset {
            width: fit-content;
            justify-content: center;
            align-self: center;
        }
    </style>
</head>

<body>
    <h1>ID Card Generator</h1>
    <marquee behavior="" direction="">Welcome to ID Card Generator...You can generate ID card by just filling one form
    </marquee>
    <center>
        <fieldset>
            <form action="index.php" method="post">
                <table>
                    <tr>
                       <td>Enter Id No : </td>
                       <td>
                           <input type="text" name="id">
                       </td>
                    </tr>

                    <tr>
                        <td><label name="nm">Enter full name : </label></td>
                        <td><input type="text" placeholder="LastName FirstName MiddleName" width="full" name="nm"><br>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label>Enter Year :</label>
                        </td>
                        <td>
                            <select name="nm1" id="nm1">
                                <option value="">Select Year</option>
                                <option value="First Year">First Year</option>
                                <option value="Second Yaer">Second Year</option>
                                <option value="Third Year">Third Year</option>
                                <option value="B.E.">B.E.</option>
                            </select><br>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="">Enter the Date of Birth :</label>
                        </td>
                        <td>
                            <input type="date" name="date"><br>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="">Enter the blood group :</label>
                        </td>
                        <td>
                            <select name="blood" id="">
                                <option value="">Select Blood group</option>
                                <option value="O+">O+</option>
                                <option value="A+">A+</option>
                                <option value="B+">B+</option>
                                <option value="AB+">AB+</option>
                                <option value="O-">O-</option>
                                <option value="A-">A-</option>
                                <option value="B-">B-</option>
                                <option value="AB-">AB-</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Drop Passport Photo :
                        </td>
                        <td>
                            <input type="file" id="img" name="im" accept="image/*">
                        </td>
                    </tr>
                    <tr style=>
                        <td>
                            <input type="submit">
                        </td>
                    </tr>






                    <br>

                </table>
            </form>
        </fieldset>
    </center>
</body>

</html>
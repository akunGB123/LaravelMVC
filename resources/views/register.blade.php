<!DOCTYPE html>

<html>
    <head>
        <title>ini form</title>
    </head>
    <body>
   <!-- {{url('welcome')}} -->
    <form action="{{url('welcome')}}" method="POST">
        @csrf
        <h2>Buat Account Baru!</h2>
        <h3>Sign Up Form</h3>
        <label>First name:</label> <br><br>
        <input type="text" name="Fname"> <br><br>
        <label>Last name:</label> <br><br>
        <input type="text" name="Lname"> <br><br>
        <label>Gender:</label> <br><br>
        <input type="radio" name="gender">Male <br>
        <input type="radio" name="gender">Female <br>
        <input type="radio" name="gender">Other <br><br>
        <label>Nationality</label> <br><br>
        <select name="Nationality" id="">
            <option value="Indonesian">Indonesian</option>
            <option value="Singaporean">Singaporean</option>
            <option value="Malaysian">Malaysian</option>
            <option value="Australian">Australian</option>
        </select> <br><br>
        <label>Language Spoken:</label> <br> <br>
        <input type="checkbox" name="lang">Bahasa Indonesia <br>
        <input type="checkbox" name="lang">English <br>
        <input type="checkbox" name="lang">Other <br> <br>
        <label>Bio:</label> <br><br>
        <textarea name="" id="" cols="30" rows="10"></textarea> <br>
        <input type="submit" value="Sign Up" >
    </form>
    </body>
</html>
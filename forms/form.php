<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="send_data.php" method="POST" onsubmit="validate();" enctype="multipart/form-data">
        <fieldset>
            <legend>Registration Form</legend>
            <div>
                <label for="enroll">11 Digit Enroll Number</label>
                <input type="text" id="enroll" name="enroll">
            </div>
            <div>
                <label for="firstName">First Name</label>
                <input type="text" id="firstName" name="firstName">
            </div>
            <div>
                <label for="lastName">Last Name</label>
                <input type="text" id="lastName" name="lastName">
            </div>
            <div>
                <label for="email">Email</label>
                <input type="email" id="email" name="email">
            </div>
            <div>
                <label for="codeWord">Code Word</label>
                <input type="text" id="codeWord" name="codeWord">
            </div>
            <div>
                <label for="branch">Branch : </label>
                <select name="branch" id="branch">
                    <option value="notSet">Click here!</option>
                    <option value="Computer Science Engineering">CSE</option>
                    <option value="Civil Engineering">Civil</option>
                    <option value="Mechanical Engineering">Mechanical</option>
                    <option value="Electrical Engineering">ELEC</option>
                    <option value="Electronics and Communication Engineering">E&C</option>
                </select>
            </div>
            <div>
                <br><label for="gender">Gender</label> <br>
                <label for="male">Male</label>
                <input type="radio" id="male" name="gender" value="male"> <br>
                <label for="female">Female</label>
                <input type="radio" id="female" name="gender" value="female"> <br>
                <label for="libtard">Libtard</label>
                <input type="radio" id="libtard" name="gender" value="libtard"> <br>
            </div>
            <div>
                <p>Exams Appeared For</p>
                <label for="os">OS</label>
                <input type="checkbox" value="Operating Systems" id="sub1" name="sub1"> <br>
                <label for="dbms">DBMS</label>
                <input type="checkbox" value="Database Management System" id="sub2" name="sub2"> <br>
                <label for="coa">COA</label>
                <input type="checkbox" value="Computer Architecture and Organisation" id="sub3" name="sub3"> <br>
                <label for="iwt">IWT</label>
                <input type="checkbox" value="Internet and Web Technology" id="sub4" name="sub4"> <br>
                <label for="dsp">DSP</label>
                <input type="checkbox" value="Digital Signal Processing"  id="sub5" name="sub5">
            </div>
            <div>
                <br><label>Passport Size Photo (Max Size : 1MB - Upload jpg files only)</label> <br>
                <input type="file" name="file" id="file">
            </div>
            <div>
               <br> 
               <button type="submit" name="submit"> Register! </button>
            </div>
        </fieldset>
    </form>
    

    <script src="validation.js"></script>
</body>
</html>
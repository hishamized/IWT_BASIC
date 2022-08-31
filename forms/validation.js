function validate(){
    // Verifying First Name
    var fName = document.getElementById("firstName").value;
    if(fName.length != 0){
        if(fName.length < 3 || fName.length > 20){
            alert("First Name Should be 3 to 20 Characters Long!");
            return false;
        }
    } else {
        alert("First Name cannot be empty!");
        return false;
    }

     // Verifying Last Name
    var lName = document.getElementById("lastName").value;
    if(lName.length != 0){
        if(lName.length < 3 || lName.length > 20){
            alert("Last Name Should be 3 to 20 Characters Long!");
            return false;
        }
    } else {
        alert("Last Name cannot be empty!");
        return false;
    }

    // Check Email Address
    var email = document.getElementById("email").value;
    if(email.length !=0){
       if(email.indexOf('@') > -1 && email.indexOf('.') > -1){
        //   Do Nothing
       }else{
        alert("Incorrect Email Format. Should contain @ symbol and domain name (eg: gulleKaak@gmail.com)");
        return false;
       }
    }else{
        alert("Email Cannot Be Empty!");
        return false;
    }

    // Check Code Word
    var codeWord = document.getElementById("codeWord").value;
    if(codeWord.length !=0 ){
       if(codeWord.length < 8){
        alert("Code Word Should Be At Least 8 Characters Long!");
        return false;
       }
    } else{
       alert("Code Word cannot be empty!");
       return false;
    }

    // Check For Branch
    var branch = document.getElementById("branch").value;
    if(branch === "notSet"){
        alert("Please select a branch!");
        return false; 
    }

    // Check Gender
    var male = document.getElementById("male");
    var female = document.getElementById("female");
    var libtard = document.getElementById("libtard");
    if(male.checked || female.checked || libtard.checked ){
        //  Do nothing
    } else {
        alert("Please Select Your Gender!");
        return false;
    }

    // Check For Subjects
    var sub1 = document.getElementById("sub1");
    var sub2 = document.getElementById("sub2");
    var sub3 = document.getElementById("sub3");
    var sub4 = document.getElementById("sub4");
    var sub5 = document.getElementById("sub5");
    if(sub1.checked || sub2.checked || sub3.checked || sub4.checked || sub5.checked){
        // Do nothing
    } else {
        alert("Kindly select your subjects!");
        return false;
    }

    // Check Image File
    var inputElement = document.getElementById("file");
    var fileLimit = 100; // Size Limit
      var files = inputElement.files; 
      var fileSize = files[0].size; 
      var fileName = inputElement.value;
      var myArray = fileName.split('.');
      var fileExtension = myArray[1];
      var fileSizeInKB = (fileSize/1024);

      if(fileExtension != "jpg" && fileExtension != "png" && fileExtension != "jpeg" && fileExtension != "pdf" && fileExtension != "JPG" && fileExtension != "PNG" && fileExtension != "PDF"){
        alert("Unsupported File Extension! Only jpg, png and pdf files are valid!");
        alert(fileExtension);
        return false;
      }
      
      if(fileSizeInKB < fileLimit){
          //    Do nothing
      } else {
        alert("File Size Too Big!");
        return false;
      }
     

    alert("Form Submitted Successfully!");
    return true;
}
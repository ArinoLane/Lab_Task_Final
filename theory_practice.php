<!DOCTYPE html>
 <html lang="en">
 <head>
    <title>Data Comm Lab Report</title>
    
 </head>
 <body style=" background-color: #ece9f4ff; ">

    
    <center>

        <form onsubmit="return js()">

            <div class="box" id="topBox">
                <label id="mainHeading" style="font-family: Arial, Helvetica, sans-serif; font-weight: 300; font-size: 35px ">Data Comm Lab Report</label>
                <hr> 
                <p>arindom793@gmail.com <a href="#" style="color: #2563eb; text-decoration: underline;">Switch account</a></p>
                <p style="font-size: 14px; color: #4b5563;">The name, email, and photo associated with your Google account will be recorded when you upload files and submit this form</p>
                <hr>
                <p class="red" style="font-size: 14px;">* Indicates required question</p>
            </div>
            
            <div class="box2">
                <label style="font-size: 16px; font-weight: bold;">Email</label><label class="red">*</label>
                <div class="moveUp">
                        <input type="checkbox" class="largeCheckBox" id="record" checked>
                        <label for="record" class="tt" style="font-size: 14px;">Record arindom793@gmail.com as the email to be included with my response</label>
                </div>  
            </div>

            <div class="box2" id="3rdBox">
                <label style="font-size: 16px; font-weight: bold;" >Student Name</label><label class="red">*</label>  <br><br> 
                <input type="text" name="student_name" placeholder="Your answer" class="inputBorder"  id="name" required>
            </div>

            <div class="box2">
                <label style="font-size: 16px; font-weight: bold;">Student ID</label><label class="red">*</label>  <br><br> 
                <input type="text" name="student_id" placeholder="Your answer" id="studentID" class="inputBorder" required>
            </div>

            <div class="box2">
                <label style="font-size: 16px; font-weight: bold;">Submit File here</label><label class="red">*</label>  <br><br>
                <label style="font-size: 12px; color: rgb(170, 170, 170);">Upload 1 supported file: PDF. Max 100 MB.</label><br> <br>
                
                <button type="button" class="file-button">
                    Add file
                </button>
            </div>
            <dev id="error"></dev>
                <dev id="pass"></dev>
            <div style="width: 600px; margin: 15px;">
                <button type="submit" class="submit-button" style="float: left;" onclick="btnClick()">
                    Submit
                </button>
                <p style="font-size: 12px; color: #6b7280; float: right; margin-top: 15px;">Never submit passwords through Google Forms.</p>
                <div style="clear: both;"></div>
               
                
            
            
               </div>
            
        </form>

    </center>






    <link rel="stylesheet" href="style.css">
    <script src="my_script.js"></script> 

 </body>
 </html>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Simple Data Form</title>

  <style>
    form, div {
      position: relative;
      top: 100px;
      left: 40%;
      margin: 10px 0;
    }
    table, th, td {
      border: 1px solid black;
      border-collapse: collapse; 
      padding: 5px 10px;
    } 
  </style>

  <!-- ADDED: WHITE COLOR STYLE -->
  <style id="whiteStyle">
    body, form, label, table, th, td, input {
      color: white !important;
    }
  </style>

</head>
<body>

  <!-- ADDED: DARK MODE TOGGLE BUTTON -->
  <button id="toggleMode" style="position:fixed; top:10px; left:10px;">Toggle Dark Mode</button>
  
  <form id="dataForm" onsubmit="addDataToTable(); return false;"> 
    <label>Name</label>
    <input type="text" id="name" required><br>

    <label>Age</label>
    <input type="number" id="age" required><br>

    <input type="submit" value="Add Data">
  </form>
    
  <label id="error" style="color: red;"></label>
  
  <div>
    <table>
      <thead>
        <tr>
          <th>Name</th>
          <th>Age</th>
        </tr>
      </thead>
      <tbody id="dataTableBody">
        </tbody>
    </table>
  </div>

  <script>
    // FIX 2: Correct ID selection to target the <tbody>
    const tableBody = document.getElementById("dataTableBody"); 
    const nameInput = document.getElementById("name");
    const ageInput = document.getElementById("age");

    function addDataToTable() {
        // A. Get the values the user just typed
        const nameValue = nameInput.value.trim();
        // B. Get the numeric Age value for comparison
        const ageValue = parseInt(ageInput.value.trim()); 
        
        // Ensure both fields are filled (basic check)
        if (nameValue === "" || isNaN(ageValue)) {
            document.getElementById("error").textContent = "Please enter a valid Name and Age.";
            return;
        }
        const nameCheck = /^[a-zA-Z ]+&/;
        if(!nameCheck.test(nameValue)){
          document.getElementById("error").innerHTML = "ERROR, please dont use number in name";
          nameInput.value = "";
          ageInput.value = "";
          return;
        }

        
        let bgcolor;
        // FIX 3: Use the parsed numeric value (ageValue) for the comparison
        if (ageValue > 50) {
            bgcolor = "green";
        } else {
            bgcolor = "red";
        }
        
        // C. Build the entire new row as a single text string (HTML)
        const newRowHTML = `
            <tr>
                <td>${nameValue}</td>
                <td style="background-color: ${bgcolor};">${ageValue}</td>
            </tr>
        `;
        
        // D. Append the new HTML to the existing table body content
        tableBody.innerHTML += newRowHTML;

        // E. Clear the form inputs
        nameInput.value = "";
        ageInput.value = "";
        document.getElementById("error").textContent = ""; // Clear error
    }

    /* ----------------------------------
       ADDED: DARK MODE TOGGLE JS
    ---------------------------------- */
    const toggleBtn = document.getElementById("toggleMode");
    const whiteStyle = document.getElementById("whiteStyle");

    let dark = false;

    toggleBtn.addEventListener("click", () => {
        dark = !dark;

        if (dark) {
            whiteStyle.innerHTML = `
                body, form, label, table, th, td, input {
                    color: white !important;
                    background-color: #1a1a1a !important;
                }
                table, th, td {
                    border-color: white !important;
                }
            `;
        } else {
            whiteStyle.innerHTML = `
                body, form, label, table, th, td, input {
                    color: black !important;
                    background-color: white !important;
                }
                table, th, td {
                    border-color: black !important;
                }
            `;
        }
    });
  </script>
</body>
</html>

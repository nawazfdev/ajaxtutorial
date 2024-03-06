// script.js

function insertRecord() {
    var name = document.getElementById("name").value;
    var email = document.getElementById("email").value;
   var pwd = document.getElementById("pwd").value;

    $.ajax({
        type: "POST",
        url: "insert.php",
        data: { name: name, email: email, pwd:pwd },
        success: function(response) {
            alert("Record inserted successfully!");
            // You can perform additional actions here, such as updating the UI.
        },
        error: function(error) {
            console.error("Error inserting record: ", error);
        }
    });
}

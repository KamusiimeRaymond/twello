/*
// Add Record
function addRecord() {
    // get values
    var fname = $("#fname").val();
    var lname = $("#lname").val();
    var username = $("#username").val();
    var password = $("#password").val();

    // Add record
    $.post("ajax/addRecord.php", {
        fname: fname,
        lname: lname,
        username: username,
        password: password
    }, function (data, status) {
        // close the popup
        $("#add_new_record_modal").modal("hide");

        // read records again
        readRecords();

        // clear fields from the popup
        $("#fname").val("");
        $("#lname").val("");
        $("#username").val("");
        $("#password").val("");
    });
}

// READ records
function readRecords() {
    $.get("ajax/readRecords.php", {}, function (data, status) {
        $(".records_content").html(data);
    });
}


function DeleteUser(id) {
    var conf = confirm("Are you sure, do you really want to delete User?");
    if (conf == true) {
        $.post("ajax/deleteUser.php", {
                id: id
            },
            function (data, status) {
                // reload Users by using readRecords();
                readRecords();
            }
        );
    }
}

function GetUserDetails(id) {
    // Add User ID to the hidden field for furture usage
    $("#hidden_user_id").val(id);
    $.post("ajax/readUserDetails.php", {
            id: id
        },
        function (data, status) {
            // PARSE json data
            var user = JSON.parse(data);
            // Assing existing values to the modal popup fields
            $("#update_fname").val(user.fname);
            $("#update_lname").val(user.lname);
            $("#update_username").val(user.username);
            $("#update_password").val(user.password);
        }
    );
    // Open modal popup
    $("#update_user_modal").modal("show");
}

function UpdateUserDetails() {
    // get values
    var fname = $("#update_fname").val();
    var lname = $("#update_lname").val();
    var username = $("#update_username").val();
    var password = $("#update_password").val();

    // get hidden field value
    var id = $("#hidden_user_id").val();

    // Update the details by requesting to the server using ajax
    $.post("ajax/updateUserDetails.php", {
            id: id,
            fname: fname,
            lname: lname,
            username: username,
            password: password
        },
        function (data, status) {
            // hide modal popup
            $("#update_user_modal").modal("hide");
            // reload Users by using readRecords();
            readRecords();
        }
    );
}

$(document).ready(function () {
    // READ recods on page load
    readRecords(); // calling function
});
*/
$(document).ready(function (){
    //read records on page load
    readRecords(); //calling function
});

// Add Record
function addRecord() {
    // get values
    var fname = $("#fname").val();
    var lname = $("#lname").val();
    var username = $("#username").val();
    var password = $("#password").val();

    // Add record
    $.post("ajax/addRecord.php", {
        fname: fname,
        lname: lname,
        username: username,
        password: password
    }, function (data, status) {
        // close the popup
        $("#add_new_record_modal").modal("hide");

        // read records again
        readRecords();

        // clear fields from the popup
        $("#fname").val("");
        $("#lname").val("");
        $("#username").val("");
        $("#password").val("");
    });
}

// READ records
function readRecords() {
    $.get("ajax/readRecords.php", {}, function (data, status) {
        $(".records_content").html(data);
    });
}

function DeleteUser(id) {
    var conf = confirm("Are you sure you want to delete user?");
    if (conf == true){
        $.post("ajax/deleteUser.php", {id: id},
        function(data, status){
            //reload User by using readRecord(); 
            readRecord();
            }
        );
    }
}

function UpdateUserDetails() {
    // get values
    var fname = $("#update_fname").val();
    var lname = $("#update_lname").val();
    var username = $("#update_username").val();
    var password = $("#update_password").val();

    // get hidden field value
    var id = $("#hidden_user_id").val();

    // Update the details by requesting to the server using ajax
    $.post("ajax/updateUserDetails.php", {
            id: id,
            fname: fname,
            lname: lname,
            username: username,
            password: password
        },
        function (data, status) {
            // hide modal popup
            $("#update_user_modal").modal("hide");
            // reload Users by using readRecords();
            readRecords();
        }
    );
}

function GetUserDetails(id) {
    // Add User ID to the hidden field for furture usage
    $("#hidden_user_id").val(id);
    $.post("ajax/readUserDetails.php", {
            id: id
        },
        function (data, status) {
            // PARSE json data
            var user = JSON.parse(data);
            // Assing existing values to the modal popup fields
            $("#update_fname").val(user.fname);
            $("#update_lname").val(user.lname);
            $("#update_username").val(user.username);
            $("#update_password").val(user.password);
        }
    );
    // Open modal popup
    $("#update_user_modal").modal("show");
}

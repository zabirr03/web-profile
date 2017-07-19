function addRecord() {
    var name = $("#name").val();
    var name_seo = $("#name_seo").val();
   
    $.post("ajax-crud/category_article/addRecord.php", {
        name:name,
        name_seo: name_seo,
       
    }, function (data, status) {
        // close the popup
        $("#add_new_record_modal").modal("hide");

        // read records again
        readRecords();

        // clear fields from the popup
        $("#name").val("");
        $("#name_seo").val("");
    });
}

// READ records
function readRecords() {
    $.get("ajax-crud/category_article/readRecords.php", {}, function (data, status) {
        $(".records_content").html(data);
    });
}


function DeleteCategory(id) {
    // var conf = confirm("Are you sure, do you really want to delete Category?");
    // if (conf == true) {
    //     $.post("ajax-crud/category_article/deleteCategory.php", {
    //             id:id
    //         },
    //         function (data, status) {
    //             // reload Categorys by using readRecords();
    //             readRecords();
    //         }
    //     );
    // }

    bootbox.dialog({
         message: "Anda yakin ingin menghapus?",
         title: "<i class='glyphicon glyphicon-trash'></i> Hapus!",
         buttons: {
        success: {
          label: "Batal",
          className: "btn-success",
          callback: function() {
          $('.bootbox').modal('hide');
          }
        },
        danger: {
          label: "Hapus!",
          className: "btn-danger",
          callback: function() {
           $.post('ajax-crud/category_article/deleteCategory.php', 
            { id:id },

            function (data, status) {
              // reload Categorys by using readRecords();
                 readRecords();
             }

            );
                
          }
        }
         }
       });
    


}


    
function GetCategoryDetails(id) {
    // Add User ID to the hidden field for furture usage
    $("#hidden_category_id").val(id);
    $.post("ajax-crud/category_article/readCategoryDetails.php", {
            id: id
        },
        function (data,status) {
            // PARSE json data
            var category = JSON.parse(data);
            // Assing existing values to the modal popup fields
            $("#update_name").val(category.name);
            $("#update_name_seo").val(category.name_seo);
           
        }
    );
    // Open modal popup
    $("#update_category_modal").modal("show");
}

function UpdateCategoryDetails() {
    // get values
    var name = $("#update_name").val();
    var name_seo = $("#update_name_seo").val();
   
    // get hidden field value
    var id = $("#hidden_category_id").val();

    // Update the details by requesting to the server using ajax
    $.post("ajax-crud/category_article/updateCategoryDetails.php", {
            id: id,
            name: name,
            name_seo: name_seo
           
        },
        function (data, status) {
            // hide modal popup
            $("#update_category_modal").modal("hide");
            // reload Categorys by using readRecords();
            readRecords();
        }
    );
}

$(document).ready(function () {
    // READ recods on page load
    readRecords(); // calling function
});
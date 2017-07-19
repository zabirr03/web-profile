function addRecordPortfolio() {
    var name = $("#name").val();
    var name_seo = $("#name_seo").val();
   
    $.post("ajax-crud/category_portfolio/addRecord.php", {
        name:name,
        name_seo: name_seo,
       
    }, function (data, status) {
        // close the popup
        $("#add_new_record_modal").modal("hide");

        // read records again
        readRecordsPortfolio();

        // clear fields from the popup
        $("#name").val("");
        $("#name_seo").val("");
    });
}

// READ records
function readRecordsPortfolio() {
    $.get("ajax-crud/category_portfolio/readRecords.php", {}, function (data, status) {
        $(".records_content_portfolio").html(data);
    });
}


function DeleteCategoryPortfolio(id) {
    // var conf = confirm("Are you sure, do you really want to delete Category?");
    // if (conf == true) {
    //     $.post("ajax-crud/category_portfolio/deleteCategory.php", {
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
           $.post('ajax-crud/category_portfolio/deleteCategory.php', 
            { id:id },

            function (data, status) {
             
                 readRecordsPortfolio();
             }

            );
                
          }
        }
         }
       });
    


}


    
function GetCategoryDetailsPortfolio(id) {
    
    $("#hidden_portfolio_id").val(id);
    $.post("ajax-crud/category_portfolio/readCategoryDetails.php", {
            id: id
        },
        function (data,status) {
            // PARSE json data
            var category = JSON.parse(data);
            
            $("#update_name").val(category.name);
            $("#update_name_seo").val(category.name_seo);
           
        }
    );
    // Open modal popup
    $("#update_portfolio_modal").modal("show");
}

function UpdateCategoryDetailsPortfolio() {
    // get values
    var name = $("#update_name").val();
    var name_seo = $("#update_name_seo").val();
   
    // get hidden field value
    var id = $("#hidden_portfolio_id").val();

    // Update the details by requesting to the server using ajax
    $.post("ajax-crud/category_portfolio/updateCategoryDetails.php", {
            id: id,
            name: name,
            name_seo: name_seo
           
        },
        function (data, status) {
            // hide modal popup
            $("#update_portfolio_modal").modal("hide");
            // reload Categorys by using readRecords();
            readRecordsPortfolio();
        }
    );
}

$(document).ready(function () {
    // READ recods on page load
    readRecordsPortfolio(); // calling function
});
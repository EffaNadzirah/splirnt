$(document).ready(function () {
    // Function to submit form data via AJAX
    $('#addDataForm').on('submit', function (e) {
        e.preventDefault(); 

        $.ajax({
            type: 'POST',
            url: $(this).attr('action'), 
            data: $(this).serialize(), 
            success: function (response) {
                console.log('Data saved successfully:', response);
                $('#addDataModal').modal('hide'); 
            },
            error: function (error) {
                console.error('Error:', error);
            }
        });
    });

    // DataTable initialization
    $("#example1").DataTable({
        "responsive": true, "lengthChange": false, "autoWidth": false,
        "buttons": ["excel", "pdf", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');

    $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
    });

    // Function to enable editing
    function enableEdit() {
        var inputs = document.getElementsByTagName("input");
        for (var i = 0; i < inputs.length; i++) {
            inputs[i].removeAttribute("disabled");
        }
        document.getElementById("editButton").style.display = "none";
        document.getElementById("saveButton").style.display = "inline-block";

        // Set the id_edit value in the form
        var idEditField = document.getElementById("id_edit");
        var idEditValue = ""; // Set your desired value here
        idEditField.value = idEditValue;
    }

    // Usage example:
    // Trigger enableEdit function when a specific event occurs, e.g., clicking a button
    $('#editButton').on('click', function() {
        enableEdit();
    });
});

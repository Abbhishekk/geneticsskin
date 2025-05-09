$(document).ready(function() {
    
    $(document).on('change', '#type', function () {
        var countryID = $(this).val();
        var formData = {
            'type': countryID,
    
        };
        if (countryID) {
            $.ajax({
                type: 'POST',
                url: 'backend-scripts.php',
                data: formData,
                success: function (result) {
                    
                    $('#treatment').html(result);
                   
                    
    
                }
            });
        } else {
            $('#treatment').html('<option value=""> No Treatment Available</option>');
    
        }
    });
    
  
})


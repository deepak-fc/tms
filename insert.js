$(document).ready(function() {

    $(document).on('click', '.add', function() {
        var html = '';
        html += '<tr>';
        html += '<td><input type="text" name="p_id[]" class="form-control p_id" /></td>';
        html += '<td><input type="text" name="h_name[]" class="form-control h_id" /></td>';
        html += '<td><input type="text" name="stay_period[]" class="form-control stay_period" /></td>';
        html += '<td><button type="button" name="remove" class="btn btn-danger btn-sm remove"><span class="glyphicon glyphicon-minus"></span></button></td></tr>';
        $('#item_table').append(html);
    });

    $(document).on('click', '.remove', function() {
        $(this).closest('tr').remove();
    });

    $('#insert_form').on('submit', function(event) {
        event.preventDefault();
        var error = '';
        $('.p_id').each(function() {
            var count = 1;
            if ($(this).val() == '') {
                error += "<p>Enter Package ID " + count + " Row</p>";
                return false;
            }
            count = count + 1;
        });

        $('.h_name').each(function() {
            var count = 1;
            if ($(this).val() == '') {
                error += "<p>Enter Hotel ID " + count + " Row</p>";
                return false;
            }
            count = count + 1;
        });

        $('.stay_period').each(function() {
            var count = 1;
            if ($(this).val() == '') {
                error += "<p> Enter Stay Period  " + count + " Row</p>";
                return false;
            }
            count = count + 1;
        });
        var form_data = $(this).serialize();
        console.log("outside ajax");
        if (error == '') {
            $.ajax({
                url: "insert.php",
                method: "POST",
                //  console.log("inside ajax");
                data: form_data,
                success: function(data) {
                    console.log(data);
                    if (data == 'ok') {
                        $('#item_table').find("tr:gt(0)").remove();
                        $('#error').html('<div class="alert alert-success">Hotel Details Saved</div>');
                    }
                }
            });
        } else {
            $('#error').html('<div class="alert alert-danger">' + error + '</div>');
        }
    });

});
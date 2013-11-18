<script type="text/javascript">
    $(document).ready( function() {

       $.ajax({

            type: "POST",
            url: 'top.php',
            success: function(data) {
                $('#content').html(data);
            }
            
        });
    });
</script>
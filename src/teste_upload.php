    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <form id="upload-form" enctype="multipart/form-data" action="https://www.nyckel.com/v1/functions/vpj20lceipbwcjjb/invoke">
        <input type="file" name="file" id="file">
        <input type="submit" value="Upload">
    </form>

    <script>
    $(document).ready(function () {
        $('#upload-form').on('submit', function(e) {
            e.preventDefault();

            var formData = new FormData(this);
            
            $.ajax({
                type: 'POST',
                url: '<?php echo $arrConfig['url_site'] . '/src'; ?>/posts/trata_post.php', // Substitua por seu próprio URL
                data: formData,
                contentType: false,
                processData: false,
                success: function(data) {
                    console.log(data); 
                },
                error: function(data) {
                    console.log('Error:', data);
                }
            });
            // Enviar para o servidor externo
            $.ajax({
                type: 'POST',
                url: $(this).attr('action'),
                data: formData,
                contentType: false,
                processData: false,
                success: function(data) {
                    console.log(data); 
                },
                error: function(data) {
                    console.log('Error:', data);
                }
            });

            // Enviar para o seu próprio servidor
        });
    });
    </script>
        
<script type="text/javascript">
    $(document).ready(function() {
        daftar_ormawa();

        //  -----------------------------------------------------------------------------
        //  |       AMBIL DATA KE DATABASE                                              |
        //  -----------------------------------------------------------------------------

        function daftar_ormawa(query){
            $.ajax({
                url   : '<?= base_url("super_admin/Data_Ormawa/daftar_ormawa")?>',
                method:"POST",
                data:{query:query},
                success : function(data){
                    $('#daftar_ormawa').html(data);
                }
 
            });
        }

        $('#search').keyup(function(){
            var search = $(this).val();
            if(search != '') {
                daftar_ormawa(search);
            } else {
                daftar_ormawa();
            }
        });

    });
</script>
        
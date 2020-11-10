


<script type="text/javascript">
/*  Archivo javaScript
    Nombre: script.js
    Autor:  5qphcb
    Fecha de creación: 29/10/2019 
    Función: Se encarga del correcto funcionamiento de los datatables
*/
$(document).ready(function() {
    $('#dataTable').DataTable( {
        "language": {
            "info": "<?php echo $strings['Showing page _PAGE_ of _PAGES_']?>",
            "zeroRecords": "<?php echo $strings['Nothing found']?>",
            "infoEmpty": "<?php echo $strings['No records available']?>",
            "infoFiltered": "<?php echo $strings['(filtered from _MAX_ total records)']?>",
            "sLengthMenu": "<?php echo $strings['Show _MENU_ entries']?>",
            "sSearch": "<?php echo $strings['Search:']?>",
            "paginate": {
                "sFirst": "<?php echo $strings['First']?>",
                "sLast": "<?php echo $strings['Last']?>",
                "sPrevious": "<?php echo $strings['Previous']?>",
                "sNext": "<?php echo $strings['Next']?>",
            },
            
        },
        "sPaginationType": "full_numbers",
    } );
    $('#dataTable2').DataTable( {
        "language": {
            "info": "<?php echo $strings['Showing page _PAGE_ of _PAGES_']?>",
            "zeroRecords": "<?php echo $strings['Nothing found']?>",
            "infoEmpty": "<?php echo $strings['No records available']?>",
            "infoFiltered": "<?php echo $strings['(filtered from _MAX_ total records)']?>",
            "sLengthMenu": "<?php echo $strings['Show _MENU_ entries']?>",
            "sSearch": "<?php echo $strings['Search:']?>",
            "paginate": {
                "sFirst": "<?php echo $strings['First']?>",
                "sLast": "<?php echo $strings['Last']?>",
                "sPrevious": "<?php echo $strings['Previous']?>",
                "sNext": "<?php echo $strings['Next']?>",
            },
            
        },
        "sPaginationType": "full_numbers",
    } );
} );



</script>
<script type="text/javascript">
// Call carousel manually
$('#myCarouselCustom').carousel();

// Go to the previous item
$("#prevBtn").click(function(){
    $("#myCarouselCustom").carousel("prev");
});
// Go to the previous item
$("#nextBtn").click(function(){
    $("#myCarouselCustom").carousel("next");
});
</script>
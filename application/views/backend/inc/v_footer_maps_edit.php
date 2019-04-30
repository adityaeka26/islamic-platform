<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

        <footer class="footer"> © <?php echo date('Y',time()); ?> All rights reserved. Platform designed by <a href="http://islamic-platform.cf">Islamic Platform</a></footer>
        </div>
    </div>
    <script src="<?php echo base_url(); ?>assets/backend/js/lib/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/backend/js/lib/bootstrap/js/popper.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/backend/js/lib/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/backend/js/jquery.slimscroll.js"></script>
    <script src="<?php echo base_url(); ?>assets/backend/js/sidebarmenu.js"></script>
    <script src="<?php echo base_url(); ?>assets/backend/js/lib/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/backend/js/lib/html5-editor/wysihtml5-0.3.0.js"></script>
    <script src="<?php echo base_url(); ?>assets/backend/js/lib/html5-editor/bootstrap-wysihtml5.js"></script>
    <script src="<?php echo base_url(); ?>assets/backend/js/lib/html5-editor/wysihtml5-init.js"></script>
    <script src="<?php echo base_url(); ?>assets/backend/js/custom.min.js"></script>

    <script src="<?php echo base_url(); ?>assets/backend/js/lib/datatables/datatables.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/backend/js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/backend/js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/backend/js/lib/datatables/cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/backend/js/lib/datatables/cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/backend/js/lib/datatables/cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
    <script src="<?php echo base_url(); ?>assets/backend/js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/backend/js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/backend/js/lib/datatables/datatables-init.js"></script>

    <script src="<?php echo base_url(); ?>assets/backend/js/maps/locationpicker.jquery.js"></script>
    <script src="http://maps.google.com/maps/api/js?sensor=false&libraries=places&key=AIzaSyCfZYlnSEcZ7cOU8FET-72EFRfx_UgAtOw" type="text/javascript"></script>
</body>
    <?php foreach($people as $p){ ?>
    <script>
        var usr_lat = <?php echo $p->lat ?>;
        var usr_lon = <?php echo $p->lon ?>;

        $('#us3').locationpicker({

            location: {         
                latitude: usr_lat,
                longitude: usr_lon
            },

            radius: 300,
            zoom: 11,
            inputBinding: {
                latitudeInput: $('#us3-lat'),
                longitudeInput: $('#us3-lon')
            },
            enableAutocomplete: true,
            onchanged: function (currentLocation, radius, isMarkerDropped) {
            }
        });
    </script>
    <?php } ?>
</html>
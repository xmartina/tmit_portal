<footer class="noprint">
    <div class='container-fluid'>
        <p class='text-center' style='color: #666;'>Copyright &#169; <?php echo $year ?> | Product of <a href='<?=$home_url?>'><?=$school_name?></a> | All Rights Reserved</p>
    </div>
</footer>
</div>
<!-- Javascripts-->
<script src="<?=$site_url?>assets/js/jquery-2.1.4.min.js"></script>
<script src="<?=$site_url?>assets/js/bootstrap.min.js"></script>
<script src="<?=$site_url?>assets/js/plugins/pace.min.js"></script>
<script src="<?=$site_url?>assets/js/main.js"></script>
<script type="text/javascript" src="<?=$site_url?>assets/js/plugins/moment.min.js"></script>
<script type="text/javascript" src="<?=$site_url?>assets/js/plugins/jquery-ui.custom.min.js"></script>
<script type="text/javascript" src="<?=$site_url?>assets/js/plugins/fullcalendar.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {

        $('#external-events .fc-event').each(function() {

            // store data so the calendar knows to render an event upon drop
            $(this).data('event', {
                title: $.trim($(this).text()), // use the element's text as the event title
                stick: true // maintain when user navigates (see docs on the renderEvent method)
            });

            // make the event draggable using jQuery UI
            $(this).draggable({
                zIndex: 999,
                revert: true,      // will cause the event to go back to its
                revertDuration: 0  //  original position after the drag
            });

        });

        $('#calendar').fullCalendar({
            header: {
                left: 'prev,next today',
                center: 'title',
                right: 'month,agendaWeek,agendaDay'
            },
            editable: true,
            droppable: true, // this allows things to be dropped onto the calendar
            drop: function() {
                // is the "remove after drop" checkbox checked?
                if ($('#drop-remove').is(':checked')) {
                    // if so, remove the element from the "Draggable Events" list
                    $(this).remove();
                }
            }
        });


    });
</script>
</body>
</html>
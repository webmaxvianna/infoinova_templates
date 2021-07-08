  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Fundação Inova Prudente
    </div>
    InfoInova 2021
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>
<script src="../dist/js/demo.js"></script>

<script src="../plugins/mobiscroll-eventcalendar/js/mobiscroll.jquery.min.js"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="../plugins/chart.js/Chart.min.js"></script>
<script src="../js/dashboard.js"></script>
<script src="../js/pie_chart.js"></script>
<script type="text/javascript">
  mobiscroll.setOptions({
    locale: mobiscroll.localePtBR,
    theme: 'ios',
    themeVariant: 'light',
});

var now = new Date();

$(function () {

    var inst = $('#demo-loading-inline-data').mobiscroll().eventcalendar({
        firstDay: 0,
        view: {
            calendar: { type: 'week' },
            agenda: { type: 'day' }
        },
        // renderEvent: function (data) {
        //     return '<div class="md-full-event">' +
        //                 '<div class="md-full-event-details">' +
        //                     '<div class="md-full-event-title">' + data.title + '</div>' +
        //                     '<div class="md-full-event-location">' +
        //                         '<div class="md-full-event-label">Location</div>' +
        //                         '<div>' + data.original.location + '</div>' +
        //                     '</div>' +
        //                     '<div class="md-full-event-time">' +
        //                         '<div class="md-full-event-label">Time</div>' +
        //                         '<div>' + data.start + '</div>' +
        //                         '<div>' + data.end + '</div>' +                                
        //                         '<div>' + data.allDay + '</div>' +                                
        //                         '<div><a href="usuarios.php">link</a></div>' +
        //                     '</div>' +
        //                 '</div>' +
        //             '</div>';
        // },
        data: [{
                start: '2021-07-08T09:00',
                end: '2021-07-10T18:00',
                title: 'Conferência PHP',
                location:'Sala 1',
                color: '#017406'
            }, {
                start: '2021-07-08T13:00',
                end: '2021-07-08T17:00',
                title: 'Hackathon',
                location:'Laboratório',
                color: '#7bde83'
            }, {
                recurring: {
                    repeat: 'yearly',
                    month: now.getMonth() + 1,
                    day: 08
                },
                allDay: true,
                title: 'Evento Sebrae',
                color: '#37bbe4'
            }, {
                recurring: {
                    repeat: 'weekly',
                    weekDays: 'WE'
                },
                allDay: true,
                title: 'Campus Party',
                location: 'Bloco C',
                color: '#228c73'
            }, {
                start: '2021-07-05T00:00',
                end: '2021-07-09T00:00',
                allDay: true,
                title: 'Workshop de Negócios',
                color: '#ca4747'
            }
        ],
        onEventClick: function (event, inst) {
            mobiscroll.alert({
            title: event.event.title,
            message: 'Sala: ' + event.event.location
        });
        }
    });
});
</script>

</body>
</html>
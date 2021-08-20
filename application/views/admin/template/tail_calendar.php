
                        <footer class="footer">
                            <div class="row g-0 justify-content-between fs--1 mt-4 mb-3">
                                <div class="col-12 col-sm-auto text-center">
                                    <p class="mb-0 text-600">Tafuta Sasa <span class="d-none d-sm-inline-block">| </span><br class="d-sm-none" /> 2021 &copy; </p>
                                </div>
                                <div class="col-12 col-sm-auto text-center">
                                    <p class="mb-0 text-600">v1.0.0</p>
                                </div>
                            </div>
                        </footer>
                    </div>
                </div>
            </main>
            <!-- ===============================================-->
            <!--    End of Main Content-->
            <!-- ===============================================-->

            <!-- ===============================================-->
            <!--    JavaScripts-->
            <!-- ===============================================-->
            <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
            <script src="<?php echo base_url('assets/plugins/popper/popper.min.js'); ?>"></script>
            <script src="<?php echo base_url('assets/plugins/bootstrap/bootstrap.min.js'); ?>"></script>
            <script src="<?php echo base_url('assets/plugins/fontawesome/all.min.js'); ?>"></script>
            <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll'); ?>"></script>

            <script src="<?php echo base_url('assets/plugins/fullcalendar/main.min.js'); ?>"></script>

            <script type="text/javascript">
                document.addEventListener('DOMContentLoaded', function () {

                    var calendarEl = document.getElementById('appCalendar');

                    var calendar = new FullCalendar.Calendar(calendarEl, {
                        headerToolbar: { center: 'dayGridMonth,timeGridWeek,timeGridDay,listMonth' },
                        themeSystem: 'bootstrap',
                        navLinks: true,
                        editable: true,
                        events: [<?php echo $cal;?>]
                    });

                    calendar.render();
                });
            </script>


        </body>
    </html>
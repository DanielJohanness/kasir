          <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
              <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © <a href="#">Daniel Johanness </a><span id="year"></span> 
            <script type="text/javascript">
                document.getElementById("year").innerHTML = new Date().getFullYear();
            </script>
            </span>
            </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="<?=base_url()?>assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="<?=base_url()?>assets/vendors/chart.js/Chart.min.js"></script>
    <script src="<?=base_url()?>assets/vendors/progressbar.js/progressbar.min.js"></script>
    <script src="<?=base_url()?>assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
    <script src="<?=base_url()?>assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="<?=base_url()?>assets/vendors/owl-carousel-2/owl.carousel.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="<?=base_url()?>assets/js/off-canvas.js"></script>
    <script src="<?=base_url()?>assets/js/hoverable-collapse.js"></script>
    <script src="<?=base_url()?>assets/js/misc.js"></script>
    <script src="<?=base_url()?>assets/js/settings.js"></script>
    <script src="<?=base_url()?>assets/js/todolist.js"></script>
    <script src="<?=base_url()?>assets/js/chart.js"></script>
    <script src="<?= base_url() ?>assets/vendors/datatable/jquery.dataTables.min.js"></script>
    <script src="<?= base_url() ?>assets/vendors/datatable/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="<?= base_url() ?>assets/vendors/datatable/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="<?= base_url() ?>assets/vendors/datatable/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="<?= base_url() ?>assets/vendors/datatable/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="<?= base_url() ?>assets/vendors/datatable/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="<?= base_url() ?>assets/vendors/datatable/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="<?= base_url() ?>assets/vendors/datatable/datatables-buttons/js/buttons.print.js"></script>
    <script src="<?= base_url() ?>assets/vendors/datatable/datatables-buttons/js/buttons.colVis.min.js"></script>
    <script src="<?= base_url() ?>assets/vendors/datatable/datatables-select/js/dataTables.select.min.js"></script>
    <script src="<?= base_url() ?>assets/vendors/datatable/jszip/jszip.min.js"></script>
    <script src="<?= base_url() ?>assets/vendors/datatable/pdfmake/pdfmake.min.js"></script>
    <script src="<?= base_url() ?>assets/vendors/datatable/pdfmake/vfs_fonts.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="<?=base_url()?>assets/js/dashboard.js"></script>
    <!-- End custom js for this page -->
    
    <script type="text/javascript">
    // CHART DI DASHBOARD
      var doughnutPieOptions = {
          responsive: true,
          animation: {
            animateScale: true,
            animateRotate: true
          }
      };
      if ($("#dashboardChart").length) {
            var dashboardChartCanvas = $("#dashboardChart").get(0).getContext("2d");
            var dashboardChart = new Chart(dashboardChartCanvas, {
              type: 'pie',
              data: {
                datasets: [{
                  data: [<?=$menu?>, <?= $quantity ?>, <?= $transaksi ?>],
                  backgroundColor: [

                    'rgba(255, 206, 86, 0.5)',
                    'rgba(10, 210, 91, 0.5)',

                    'rgba(143, 95, 232, 0.5)',
                    'rgba(54, 162, 235, 0.5)',
                    
                    'rgba(153, 102, 255, 0.5)',
                    'rgba(255, 159, 64, 0.5)'
                  ],
                  borderColor: [
                    'rgba(255, 206, 86, 1)',
                    'rgba(10, 210, 91, 1)',
                    
                    'rgba(143, 95, 232,1)',
                    'rgba(54, 162, 235, 1)',
                    
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                  ],
                }],

                // These labels appear in the legend and in the tooltips when hovering different arcs
                labels: [
                  'Total Menu',
                  'Total Menu Terjual',
                  'Total Transaksi',
                ]
              },
              options: doughnutPieOptions
            });
      };
    </script>
    
    <script type="text/javascript">
    // CHART DIAGRAM PENJUALAN
      var doughnutPieOptions = {
          responsive: true,
          animation: {
            animateScale: true,
            animateRotate: true
          }
      };
      if ($("#laporanChart").length) {
            var laporanChartCanvas = $("#laporanChart").get(0).getContext("2d");
            var laporanChart = new Chart(laporanChartCanvas, {
              type: 'pie',
              data: {
                datasets: [{
                  data: [<?php 
                    foreach ($quantity as $q):
                      $qty = implode(',', $q);
                      $qt = '"'.$qty.'",';
                      print_r($qt);
                    endforeach
                   ?>],
                  backgroundColor: [

                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)',
                    'rgba(56, 219, 53, 0.2)',
                    'rgba(191, 219, 53,0.2)',
                    'rgba(219, 53, 53,0.2)'
                  ],
                  borderColor: [
                    'rgba(255,99,132,1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)',
                    'rgba(56, 219, 53, 1)',
                    'rgba(191, 219, 53,1)',
                    'rgba(219, 53, 53,1)'
                  ],
                }],

                // These labels appear in the legend and in the tooltips when hovering different arcs
                labels: [
                  <?php 
                    $array = array_unique($menu);
                    $menus = implode('","',$array);
                    print_r('"'.$menus.'"');
                  ?>
                ]
              },
              options: doughnutPieOptions
            });
      };
    </script>
    
    <script type="text/javascript">
    // CHART PENJUALAN BULANAN
      var data = {
        labels: [<?php 
                    $array = array_unique($menu);
                    $menus = implode('","',$array);
                    print_r('"'.$menus.'"');
                  ?>],
        datasets: [{
          labels: '<?php 
                    $array = array_unique($menu);
                    $menus = implode('","',$array);
                    print_r('"'.$menus.'"');
                  ?>',
          data: [<?php 
                    foreach ($quantity as $q):
                      $qty = implode(',', $q);
                      $qt = '"'.$qty.'",';
                      print_r($qt);
                    endforeach
                   ?>],
          backgroundColor: [
            'rgba(255, 99, 132, 0.2)',
            'rgba(54, 162, 235, 0.2)',
            'rgba(255, 206, 86, 0.2)',
            'rgba(75, 192, 192, 0.2)',
            'rgba(153, 102, 255, 0.2)',
            'rgba(255, 159, 64, 0.2)',
            'rgba(56, 219, 53, 0.2)',
            'rgba(191, 219, 53,0.2)',
            'rgba(219, 53, 53,0.2)'
          ],
          borderColor: [
            'rgba(255,99,132,1)',
            'rgba(54, 162, 235, 1)',
            'rgba(255, 206, 86, 1)',
            'rgba(75, 192, 192, 1)',
            'rgba(153, 102, 255, 1)',
            'rgba(255, 159, 64, 1)',
            'rgba(56, 219, 53, 1)',
            'rgba(191, 219, 53,1)',
            'rgba(219, 53, 53,1)'
          ],
          borderWidth: 1,
          fill: false
        }]
      };
      var options = {
        scales: {
          yAxes: [{
            ticks: {
              beginAtZero: true
            },
            gridLines: {
              color: "rgba(204, 204, 204,0.1)"
            }
          }],
          xAxes: [{
            gridLines: {
              color: "rgba(204, 204, 204,0.1)"
            }
          }]
        },
        legend: {
          display: false
        },
        elements: {
          point: {
            radius: 0
          }
        }
      };

      if ($("#penjualanChart").length) {
        var penjualanChartCanvas = $("#penjualanChart").get(0).getContext("2d");
        var penjualanChart = new Chart(penjualanChartCanvas, {
          type: 'bar',
          data: data,
          options: options
        });
      }
    </script>

    <script>
    $('#menu').DataTable({
        "dom": "<'row'<'col-sm-6 col-md-6'l><'col-sm-6 col-md-6 text-right'f>>"+
               "rt<'row'<'col-sm-12 col-md-4'i><'col-sm-12 col-md-4 justify-content-center d-flex'p><'col-sm-12 col-md-4'>>",
        "responsive": true,
        "lengthChange": true,
        "autoWidth": true,
        buttons: [{
                extend: 'print',
                title: 'Data Menu',
                messageTop: 'Cafe Laine',
                customize: function(win) {
                    $(win.document.body).find('h1').css('text-align', 'center');
                    $(win.document.body).find('div').css('text-align', 'center');
                    $(win.document.body).find('th').addClass('display').css('text-align',
                        'center');
                    $(win.document.body).find('th').addClass('display').css('padding-right', 0);
                    $(win.document.body).find('tr').addClass('display').css('text-align',
                        'center');
                },
                exportOptions: {
                    columns: ':not(:last-child)',
                }
            },
            {
                extend: 'pdfHtml5',
                title: 'Data Menu',
                exportOptions: {
                    columns: ':not(:last-child)',
                }
            },
            {
                extend: 'excel',
                title: 'Data Menu',
                exportOptions: {
                    columns: ':not(:last-child)',
                }
            },
            {
                extend: 'csv',
                title: 'Data Menu',
                exportOptions: {
                    columns: ':not(:last-child)',
                }
            },
            {
                extend: 'copy',
                title: 'Data Menu',
                exportOptions: {
                    columns: ':not(:last-child)',
                }
            }
        ],
    });

    $('#transaksi').DataTable({
        "dom": "<'row'<'col-sm-6 col-md-6'l><'col-sm-6 col-md-6 text-right'f>>"+
               "rt<'row'<'col-sm-12 col-md-4'i><'col-sm-12 col-md-4 justify-content-center d-flex'p><'col-sm-12 col-md-4'>>",
        "responsive": true,
        "lengthChange": true,
        "autoWidth": true,
        "pageLength": 5,
        "order": [[0,'asc']],
        "select": true,
        buttons: [
                {
                    extend: 'print',
                    title: 'Data Transaksi',
                    text: '<i class="mdi mdi-file-document"></i> Print Seluruh Data Transaksi',
                    messageTop: 'Cafe Laine',
                    exportOptions: {
                        columns: ':not(:last-child)',
                        modifier: {
                            selected: null
                        }
                    },
                    customize: function(win) {
                        $(win.document.body).find('h1').css('text-align', 'center');
                        $(win.document.body).find('div').css('text-align', 'center');
                        $(win.document.body).find('th').addClass('display').css('text-align','center');
                        $(win.document.body).find('th').addClass('display').css('padding-right', 0);
                        $(win.document.body).find('tr').addClass('display').css('text-align','center');
                    }
            },
            {
                extend: 'print',
                text: '<i class="mdi mdi-file-document"></i> Print Data Yang Dipilih'
            }
        ],
    }).buttons().container().appendTo('#transaksi_wrapper .col-md-6:eq(0)');

    $('#dashboard').DataTable({
        "dom": "<'row'<'col-sm-6 col-md-6'l><'col-sm-6 col-md-6 text-right'f>>"+
               "rt<'row'<'col-sm-12 col-md-4'i><'col-sm-12 col-md-4 justify-content-center d-flex'p><'col-sm-12 col-md-4'>>",
        "responsive": true,
        "lengthChange": true,
        "autoWidth": true,
        "pageLength": 5,
        "order": [[0,'desc']],
        buttons: [{
                extend: 'print',
                title: 'Data Transaksi',
                messageTop: 'Cafe Laine',
                customize: function(win) {
                    $(win.document.body).find('h1').css('text-align', 'center');
                    $(win.document.body).find('div').css('text-align', 'center');
                    $(win.document.body).find('th').addClass('display').css('text-align',
                        'center');
                    $(win.document.body).find('th').addClass('display').css('padding-right', 0);
                    $(win.document.body).find('tr').addClass('display').css('text-align',
                        'center');
                },
                exportOptions: {
                    columns: ':not(:last-child)',
                }
            },
            {
                extend: 'pdfHtml5',
                title: 'Data Transaksi',
                exportOptions: {
                    columns: ':not(:last-child)',
                }
            },
            {
                extend: 'excel',
                title: 'Data Transaksi',
                exportOptions: {
                    columns: ':not(:last-child)',
                }
            },
            {
                extend: 'csv',
                title: 'Data Transaksi',
                exportOptions: {
                    columns: ':not(:last-child)',
                }
            },
            {
                extend: 'copy',
                title: 'Data Transaksi',
                exportOptions: {
                    columns: ':not(:last-child)',
                }
            }
        ],
    });

    $('#user').DataTable({
        "dom": "<'row'<'col-sm-6 col-md-6'l><'col-sm-6 col-md-6 text-right'f>>"+
               "rt<'row'<'col-sm-12 col-md-4'i><'col-sm-12 col-md-4 justify-content-center d-flex'p><'col-sm-12 col-md-4'>>",
        "responsive": true,
        "lengthChange": true,
        "autoWidth": true,
        buttons: [{
                extend: 'print',
                title: 'Data User',
                messageTop: 'Cafe Laine',
                customize: function(win) {
                    $(win.document.body).find('h1').css('text-align', 'center');
                    $(win.document.body).find('div').css('text-align', 'center');
                    $(win.document.body).find('th').addClass('display').css('text-align',
                        'center');
                    $(win.document.body).find('th').addClass('display').css('padding-right', 0);
                    $(win.document.body).find('tr').addClass('display').css('text-align',
                        'center');
                },
                exportOptions: {
                    columns: ':not(:last-child)',
                }
            },
            {
                extend: 'pdfHtml5',
                title: 'Data User',
                exportOptions: {
                    columns: ':not(:last-child)',
                }
            },
            {
                extend: 'excel',
                title: 'Data User',
                exportOptions: {
                    columns: ':not(:last-child)',
                }
            },
            {
                extend: 'csv',
                title: 'Data User',
                exportOptions: {
                    columns: ':not(:last-child)',
                }
            },
            {
                extend: 'copy',
                title: 'Data User',
                exportOptions: {
                    columns: ':not(:last-child)',
                }
            }
        ],
    });

    $('#userlog').DataTable({
        "dom": "<'row'<'col-sm-6 col-md-6'l><'col-sm-6 col-md-6 text-right'f>>"+
               "rt<'row'<'col-sm-12 col-md-4'i><'col-sm-12 col-md-4 justify-content-center d-flex'p><'col-sm-12 col-md-4'>>",
        "responsive": true,
        "lengthChange": true,
        "autoWidth": true,
        "order": [[0,'desc']],
        buttons: [{
                extend: 'print',
                title: 'Data User',
                messageTop: 'Cafe Laine',
                customize: function(win) {
                    $(win.document.body).find('h1').css('text-align', 'center');
                    $(win.document.body).find('div').css('text-align', 'center');
                    $(win.document.body).find('th').addClass('display').css('text-align',
                        'center');
                    $(win.document.body).find('th').addClass('display').css('padding-right', 0);
                    $(win.document.body).find('tr').addClass('display').css('text-align',
                        'center');
                },
                exportOptions: {
                    columns: ':not(:last-child)',
                }
            },
            {
                extend: 'pdfHtml5',
                title: 'Data User',
                exportOptions: {
                    columns: ':not(:last-child)',
                }
            },
            {
                extend: 'excel',
                title: 'Data User',
                exportOptions: {
                    columns: ':not(:last-child)',
                }
            },
            {
                extend: 'csv',
                title: 'Data User',
                exportOptions: {
                    columns: ':not(:last-child)',
                }
            },
            {
                extend: 'copy',
                title: 'Data User',
                exportOptions: {
                    columns: ':not(:last-child)',
                }
            }
        ],
    });

    $('#userlogdash').DataTable({
        "dom": "<'row'<'col-sm-12 col-md-6'l><'col-sm-12 col-md-6 text-right'f>>"+
               "rt<'row'<'col-sm-12 col-md-6'i><'col-sm-12 col-md-6 justify-content-center d-flex'p>>",
        "responsive": true,
        "lengthChange": true,
        "autoWidth": true,
        "pageLength": 2,
        "order": [[0,'desc']],
        buttons: [{
                extend: 'print',
                title: 'Data User',
                messageTop: 'Cafe Laine',
                customize: function(win) {
                    $(win.document.body).find('h1').css('text-align', 'center');
                    $(win.document.body).find('div').css('text-align', 'center');
                    $(win.document.body).find('th').addClass('display').css('text-align',
                        'center');
                    $(win.document.body).find('th').addClass('display').css('padding-right', 0);
                    $(win.document.body).find('tr').addClass('display').css('text-align',
                        'center');
                },
                exportOptions: {
                    columns: ':not(:last-child)',
                }
            },
            {
                extend: 'pdfHtml5',
                title: 'Data User',
                exportOptions: {
                    columns: ':not(:last-child)',
                }
            },
            {
                extend: 'excel',
                title: 'Data User',
                exportOptions: {
                    columns: ':not(:last-child)',
                }
            },
            {
                extend: 'csv',
                title: 'Data User',
                exportOptions: {
                    columns: ':not(:last-child)',
                }
            },
            {
                extend: 'copy',
                title: 'Data User',
                exportOptions: {
                    columns: ':not(:last-child)',
                }
            }
        ],
    });
    </script>
  </body>
</html>
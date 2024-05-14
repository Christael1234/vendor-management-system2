<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>


<script src="{{asset('asset/plugins/jquery/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{asset('asset/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{asset('asset/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- ChartJS -->
<script src="{{asset('asset/plugins/chart.js/Chart.min.js')}}"></script>
<!-- Sparkline -->
<script src="{{asset('asset/plugins/sparklines/sparkline.js')}}"></script>
<!-- JQVMap -->
<script src="{{asset('asset/plugins/jqvmap/jquery.vmap.min.js')}}"></script>
<script src="{{asset('asset/plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
<!-- jQuery Knob Chart -->
<script src="{{asset('asset/plugins/jquery-knob/jquery.knob.min.js')}}"></script>
<!-- daterangepicker -->
<script src="{{asset('asset/plugins/moment/moment.min.js')}}"></script>
<script src="{{asset('asset/plugins/daterangepicker/daterangepicker.js')}}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{asset('asset/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
<!-- Summernote -->
<script src="{{asset('asset/plugins/summernote/summernote-bs4.min.js')}}"></script>
<!-- overlayScrollbars -->
<script src="{{asset('asset/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('asset/js/adminlte.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('asset/js/demo.js')}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{asset('asset/js/pages/dashboard.js')}}"></script>
<script src="{{asset('asset/plugins/jquery-mousewheel/jquery.mousewheel.js')}}"></script>
<script src="{{asset('asset/plugins/raphael/raphael.min.js')}}"></script>
<script src="{{asset('asset/plugins/jquery-mapael/jquery.mapael.min.js')}}"></script>
<!-- SweetAlert2 -->
<script src="{{asset('asset/plugins/sweetalert2/sweetalert2.min.js')}}"></script>
<!-- Toastr -->
<script src="{{asset('asset/plugins/toastr/toastr.min.js')}}"></script>
<script>

    </script>
    
    <script>
       $(function() {
    var Toast = Swal.mixin({
      toast: true,
      position: 'top-end',
      showConfirmButton: false,
      timer: 6000
    });

      $('.swalaDefaultSuccess').click(function() {
      Swal.fire({
        icon: 'success',
        title: 'Added Successfully'
      })
    });

    $('.swaldDefaultSuccess').click(function() {
      
      swal.fire({
        icon: 'success',
        title: 'Deleted Successfully'
      })
    });
    $('.toastrDefaultSuccess').click(function() {
      toastr.success('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
    });
     
  })


    </script>
  
    
<script>
    $(document).ready(function() {
        $('.delete-product-btn').click(function(e) {
            e.preventDefault(); // Prevent default form submission
            
            let form = $(this).closest('form');

            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: form.attr('action'),
                        method: form.attr('method'),
                        data: form.serialize(),
                        success: function(response) {
                            Swal.fire({
                                icon: 'success',
                                title: 'Product Deleted Successfully',
                                showConfirmButton: false,
                                timer: 1500 // Automatically close after 1.5 seconds
                            }).then(() => {
                                location.reload(); // Reload the page to reflect changes
                            });
                        },
                        error: function(xhr) {
                            Swal.fire({
                                icon: 'error',
                                title: 'Oops...',
                                text: 'Something went wrong!'
                            });
                        }
                    });
                }
            });
        });
    });

    $(document).ready(function() {
        $('.delete-unit-btn').click(function(e) {
            e.preventDefault(); // Prevent default form submission
            
            let form = $(this).closest('form');

            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: form.attr('action'),
                        method: form.attr('method'),
                        data: form.serialize(),
                        success: function(response) {
                            Swal.fire({
                                icon: 'success',
                                title: 'Unit Deleted Successfully',
                                showConfirmButton: false,
                                timer: 1500 // Automatically close after 1.5 seconds
                            }).then(() => {
                                location.reload(); // Reload the page to reflect changes
                            });
                        },
                        error: function(xhr) {
                            Swal.fire({
                                icon: 'error',
                                title: 'Oops...',
                                text: 'Something went wrong!'
                            });
                        }
                    });
                }
            });
        });
    });

    $(document).ready(function() {
        $('.delete-category-btn').click(function(e) {
            e.preventDefault(); // Prevent default form submission
            
            let form = $(this).closest('form');

            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: form.attr('action'),
                        method: form.attr('method'),
                        data: form.serialize(),
                        success: function(response) {
                            Swal.fire({
                                icon: 'success',
                                title: 'Category Deleted Successfully',
                                showConfirmButton: false,
                                timer: 1500 // Automatically close after 1.5 seconds
                            }).then(() => {
                                location.reload(); // Reload the page to reflect changes
                            });
                        },
                        error: function(xhr) {
                            Swal.fire({
                                icon: 'error',
                                title: 'Oops...',
                                text: 'Something went wrong!'
                            });
                        }
                    });
                }
            });
        });
    });

    $(document).ready(function() {
        $('.delete-brand-btn').click(function(e) {
            e.preventDefault(); // Prevent default form submission
            
            let form = $(this).closest('form');

            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: form.attr('action'),
                        method: form.attr('method'),
                        data: form.serialize(),
                        success: function(response) {
                            Swal.fire({
                                icon: 'success',
                                title: 'Brand Deleted Successfully',
                                showConfirmButton: false,
                                timer: 1500 // Automatically close after 1.5 seconds
                            }).then(() => {
                                location.reload(); // Reload the page to reflect changes
                            });
                        },
                        error: function(xhr) {
                            Swal.fire({
                                icon: 'error',
                                title: 'Oops...',
                                text: 'Something went wrong!'
                            });
                        }
                    });
                }
            });
        });
    });

    $(document).ready(function() {
        $('.delete-address-btn').click(function(e) {
            e.preventDefault(); // Prevent default form submission
            
            let form = $(this).closest('form');

            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: form.attr('action'),
                        method: form.attr('method'),
                        data: form.serialize(),
                        success: function(response) {
                            Swal.fire({
                                icon: 'success',
                                title: 'Address Deleted Successfully',
                                showConfirmButton: false,
                                timer: 1500 // Automatically close after 1.5 seconds
                            }).then(() => {
                                location.reload(); // Reload the page to reflect changes
                            });
                        },
                        error: function(xhr) {
                            Swal.fire({
                                icon: 'error',
                                title: 'Oops...',
                                text: 'Something went wrong!'
                            });
                        }
                    });
                }
            });
        });
    });
</script>


<script>
    $(document).ready(function() {
        $('#add-product-btn').click(function(e) {
            e.preventDefault(); // Prevent default form submission
            
            let form = $('#add-product-form');

            $.ajax({
                url: form.attr('action'),
                method: form.attr('method'),
                data: form.serialize(),
                success: function(response) {
                    Swal.fire({
                        icon: 'success',
                        title: 'Product Added Successfully',
                        showConfirmButton: true
                    }).then((result) => {
                        if (result.isConfirmed) {
                            window.location.href = "{{ route('allP.show') }}"; // Reload the page to reflect changes
                        }
                    });
                },
                error: function(xhr) {
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Something went wrong!'
                    });
                }
            });
        });
    });

    $(document).ready(function() {
        $('#add-address-btn').click(function(e) {
            e.preventDefault(); // Prevent default form submission
            
            let form = $('#add-address-form');

            $.ajax({
                url: form.attr('action'),
                method: form.attr('method'),
                data: form.serialize(),
                success: function(response) {
                    Swal.fire({
                        icon: 'success',
                        title: 'Address Added Successfully',
                        showConfirmButton: true
                    }).then((result) => {
                        if (result.isConfirmed) {
                            window.location.href = "{{ route('allAddresses.show') }}"; // Reload the page to reflect changes
                        }
                    });
                },
                error: function(xhr) {
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Something went wrong!'
                    });
                }
            });
        });
    });

    $(document).ready(function() {
        $('#add-unit-btn').click(function(e) {
            e.preventDefault(); // Prevent default form submission
            
            let form = $('#add-unit-form');

            $.ajax({
                url: form.attr('action'),
                method: form.attr('method'),
                data: form.serialize(),
                success: function(response) {
                    Swal.fire({
                        icon: 'success',
                        title: 'Unit Added Successfully',
                        showConfirmButton: true
                    }).then((result) => {
                        if (result.isConfirmed) {
                            window.location.href = "{{ route('allU.show') }}"; // Reload the page to reflect changes
                        }
                    });
                },
                error: function(xhr) {
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Something went wrong!'
                    });
                }
            });
        });
    });

    $(document).ready(function() {
        $('#add-category-btn').click(function(e) {
            e.preventDefault(); // Prevent default form submission
            
            let form = $('#add-category-form');

            $.ajax({
                url: form.attr('action'),
                method: form.attr('method'),
                data: form.serialize(),
                success: function(response) {
                    Swal.fire({
                        icon: 'success',
                        title: 'Category Added Successfully',
                        showConfirmButton: true
                    }).then((result) => {
                        if (result.isConfirmed) {
                            window.location.href = "{{ route('allC.show') }}"; // Reload the page to reflect changes
                        }
                    });
                },
                error: function(xhr) {
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Something went wrong!'
                    });
                }
            });
        });
    });

    $(document).ready(function() {
        $('#add-brand-btn').click(function(e) {
            e.preventDefault(); // Prevent default form submission
            
            let form = $('#add-brand-form');

            $.ajax({
                url: form.attr('action'),
                method: form.attr('method'),
                data: form.serialize(),
                success: function(response) {
                    Swal.fire({
                        icon: 'success',
                        title: 'Brand Added Successfully',
                        showConfirmButton: true
                    }).then((result) => {
                        if (result.isConfirmed) {
                            window.location.href = "{{ route('allB.show') }}"; // Reload the page to reflect changes
                        }
                    });
                },
                error: function(xhr) {
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Something went wrong!'
                    });
                }
            });
        });
    });
</script>


<script src="{{asset('asset/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('asset/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- DataTables  & Plugins -->
<script src="{{asset('asset/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('asset/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('asset/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('asset/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<script src="{{asset('asset/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('asset/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{asset('asset/plugins/jszip/jszip.min.js')}}"></script>
<script src="{{asset('asset/plugins/pdfmake/pdfmake.min.js')}}"></script>
<script src="{{asset('asset/plugins/pdfmake/vfs_fonts.js')}}"></script>
<script src="{{asset('asset/plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{asset('asset/plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{asset('asset/plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>


<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,"ordering": true,
      "buttons": ["copy", "pdf", "print"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      'searching': false;
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
<!-- ChartJS -->
</body>
</html>

<!-- BEGIN: Vendor JS-->
<script src="{{ asset(mix('vendors/js/vendors.min.js')) }}"></script>
<!-- BEGIN Vendor JS-->
<!-- BEGIN: Page Vendor JS-->
<script src="{{asset(mix('vendors/js/ui/jquery.sticky.js'))}}"></script>
@yield('vendor-script')
<!-- END: Page Vendor JS-->
<!-- BEGIN: Theme JS-->
<script src="{{ asset(mix('js/core/app-menu.js')) }}"></script>
<script src="{{ asset(mix('js/core/app.js')) }}"></script>

<!-- custome scripts file for user -->
<script src="{{ asset(mix('js/core/scripts.js')) }}"></script>

@if($configData['blankPage'] === false)
<script src="{{ asset(mix('js/scripts/customizer.js')) }}"></script>
@endif
<!-- END: Theme JS-->
<script src="{{ asset('vendors/js/extensions/sweetalert2.all.min.js') }}"></script>
<!-- BEGIN: Page JS-->
@yield('page-script')
<!-- END: Page JS-->

@stack('modals')
@livewireScripts
<script defer src="{{ asset(mix('vendors/js/alpinejs/alpine.js')) }}"></script>

<script type="text/javascript">
    $(document).on('click', '.modal_button', function() {
      $.ajax({
          url: $(this).data('action'),
          method: "GET",
          success:function(result)
          {
            $('#view_modal').html(result);
              if($('#view_modal').is(':visible')){
              }else{
                $('#view_modal').modal({backdrop: 'static', keyboard: false}).modal('toggle');
              }
              if (feather) {
                feather.replace({
                  width: 14, height: 14
                });
              }
          }
      });
  });

  $(document).on('click', '.confirmDelete', function(){
    Swal.fire({
        title:$(this).data('title'),
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
      }).then((result) => {
        if (result.isConfirmed) {
          $.ajax({
              url: $(this).data('action'),
              method: "DELETE",
              success:function(result)
              {
                Swal.fire({
                  icon: 'success',
                  title: result.msg,
                  showConfirmButton: false,
                  timer: 1500,
                  showClass: {
                    popup: 'animate__animated animate__fadeIn'
                  },
                });
                $(".view_modal").trigger("hidden.bs.modal");

                if($('#view_modal').hasClass('show')){
                  $('#view_modal').modal('toggle');
                }
                if (result.removeRow) {
                  console.log('yes');
                      $('#'+ result.removeRow).remove();
                  }
                }
          });
        }
      })
  });

  $.ajaxSetup({
      headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
  });
</script>

<script>var hostUrl = "assets/";</script>
<script src="{{ asset('assets/plugins/global/plugins.bundle.js') }}"></script>
<script src="{{ asset('assets/js/scripts.bundle.js') }}"></script>
<script src="{{ asset('assets/js/widgets.bundle.js') }}"></script>
<script src="{{ asset('assets/js/custom/widgets.js') }}"></script>
<script src="{{ asset('assets/plugins/custom/datatables/datatables.bundle.js') }}"></script>

@yield('script')

@if (session('success'))
<script>
    Swal.fire({ text: '{{ session("success") }}', icon: "success", buttonsStyling: !1, confirmButtonText: "Ok, got it!", customClass: { confirmButton: "btn btn-primary" } });
</script>	
@endif

@if (session('error'))
<script>
    Swal.fire({ text: '{{ session("error") }}', icon: "error", buttonsStyling: !1, confirmButtonText: "Ok, got it!", customClass: { confirmButton: "btn btn-primary" } });
</script>	
@endif

@if (session('msg'))
<script>
    Swal.fire({
      text: '{{ session("msg") }}',
      icon: "warning",
      showCancelButton: !0,
      buttonsStyling: !1,
      confirmButtonText: "Yes, login again!",
      cancelButtonText: "No, return",
      closeOnConfirm: false,
       closeOnCancel: false,
      customClass: { confirmButton: "btn btn-primary", cancelButton: "btn btn-active-light" },
    }).then(function (isConfirm) {
        if (isConfirm.value){
          window.location.href = "/logout";
        } else {
          Swal.fire({ text: "Your action has been cancelled!.", icon: "error", buttonsStyling: !1, confirmButtonText: "Ok, got it!", customClass: { confirmButton: "btn btn-primary" } });
         }
    });
</script>	
@endif

<script>
  function confirmButtonText(link) {
    Swal.fire({
      text: "Are you sure delete this?",
      icon: "warning",
      showCancelButton: !0,
      buttonsStyling: !1,
      confirmButtonText: "Yes, delete it!",
      cancelButtonText: "No, return",
      closeOnConfirm: false,
       closeOnCancel: false,
      customClass: { confirmButton: "btn btn-active-light", cancelButton: "btn btn-primary" },
    }).then(function (isConfirm) {
        if (isConfirm.value){
          window.location.href = link;
        } else {
          Swal.fire({ text: "Your action has been cancelled!.", icon: "error", buttonsStyling: !1, confirmButtonText: "Ok, got it!", customClass: { confirmButton: "btn btn-primary" } });
         }
    });
  }
</script>

<script>
  function toggleFullScreen() {
    var doc = window.document;
    var docEl = doc.documentElement;

    var requestFullScreen = docEl.requestFullscreen || docEl.mozRequestFullScreen || docEl.webkitRequestFullScreen || docEl.msRequestFullscreen;
    var cancelFullScreen = doc.exitFullscreen || doc.mozCancelFullScreen || doc.webkitExitFullscreen || doc.msExitFullscreen;

    if(!doc.fullscreenElement && !doc.mozFullScreenElement && !doc.webkitFullscreenElement && !doc.msFullscreenElement) {
    requestFullScreen.call(docEl);
    }
    else {
    cancelFullScreen.call(doc);
    }
  }
</script>
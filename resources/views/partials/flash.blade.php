@if(session()->has('flash_message'))
    <script>
        swal({
          title: "{{ session('flash_message.title') }}",
          text: "{{ session('flash_message.message') }}",
          type: "{{ session('flash_message.notice') }}",
          timer: 1500,
          showConfirmButton: false
        })
    </script>
@endif

@if(session()->has('flash_message_custom'))
    <script>
      swal({
        title: "{{ session('flash_message_custom.title') }}",
        text: "{{ session('flash_message_custom.message') }}",
        imageUrl: "/img/thumbs-up.jpg",
        timer: 1500,
        showConfirmButton: false
      })
    </script>
@endif

@if(session()->has('flash_message_overlay'))
    <script>
      swal({
        title: "{{ session('flash_message_overlay.title') }}",
        text: "{{ session('flash_message_overlay.message') }}",
        type: "{{ session('flash_message_overlay.notice') }}",
        confirmButtonText: 'Okay'
      })
    </script>
@endif

@if ($errors->any())
    <script>
      swal({
        title: "{{ "Sorry!" }}",
        text: "{{ $errors->first() }}",
        type: "error",
        timer: 1500,
        showConfirmButton: false
      })
    </script>
@endif
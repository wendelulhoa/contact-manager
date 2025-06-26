<script type="text/javascript" defer>
    $(document).ready(function(){
        hidePreloader();
    });
    
    // show Preloader
    function showPreloader(title = '') {
        $('#preloader-title').html(title);
        $('.preloader').fadeIn(300);
    }

    // hide Preloader
    function hidePreloader(time = 2000) {
        $(".preloader").fadeOut(time);
    }

    function sweetAlert2(title, action){
        Swal.fire({
            title: title,
            icon: 'question',
            showCancelButton: true,
            confirmButtonText: 'Confirm',
            cancelButtonText:'cancel'
          }).then((result)=>{
            if(result.isConfirmed){
               action();    
            }
          }); 
    }

    @if (session('successMsg'))
        toastr.success("{{ session('successMsg') }}");
    @elseif(session('warningMsg'))
        toastr.warning("{{ session('warningMsg') }}");
    @endif

    // logout
    function logoutSystem() {
        $.ajax({
            url: "{{ Route('logout') }}",
            method:'POST',
            data:{
                _token: "{{ csrf_token() }}"
            },
            success: function(data){
                window.location.href = "{{ route('login') }}";
            },
            error: function(){
                window.location.href = "{{ route('login') }}";
            }
        });
    }
</script>
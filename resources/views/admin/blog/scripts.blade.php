<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.9/sweetalert2.min.js"></script>
<script>
$(document).ready(function () {
    $('#blogTable').DataTable();
});
$(function(){
    $('.changeStatus').on('click',function(e){
        e.preventDefault();
        var url = "{{route('admin.blog.changeStatus')}}";
        var id = $(this).data('id');
        swal({
            title: "Are you sure?",
            text: "You want to chnage status",
            type: "warning",
            showCancelButton: true,
            confirmButtonClass: "btn-danger",
            confirmButtonText: "Yes, Change it!",
            closeOnConfirm: false,
            },
            function(){
                $.ajax({
                    url:url,
                    type:'post',
                    data:id,
                    processData:false,
                    contentType:false,
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success:function(data){
                        alert(data);
                        // swal("Chnage!", "Your blog status chnage succefully.", "success");
                    }
                });
            }
        );
    });
});
</script>
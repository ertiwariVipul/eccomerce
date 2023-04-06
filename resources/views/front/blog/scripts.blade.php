<script>
    $(function(){
        $(document).on('submit','#blogForm',function(e){
            e.preventDefault();
            var formData = new FormData(this);
            var url = '{{route('front.blog.store')}}';
            $.ajax({
                url:url,
                type:'post',
                data:formData,
                processData:false,
                contentType:false,
                success:function(data){
                    if(data.ResponseCode==1){
                        $('#success').html(data.ResponseText);
                        location.reload();
                    }else{
                        $('#error').html(data.ResponseText);
                    }
                }
            });
        });
    });
</script>
<script>
    $(document).on('click','.add-to-cart', function () {
        let productId = $('.product-id').val();
        let qty       = $('.qty').val();
        if(qty > 10){
            alert('Quantity exceeds maximum number');
            $('.qty').val('');
        }else{
            let url   = '{{ url('add-to-cart') }}';
            let token = '{{ csrf_token() }}';
            $.ajax({
               type:'post',
               url :url,
               data:{
                   productId: productId, qty: qty, _token: token
               },
               success:function (data) {
                    location.reload();
               }
            });
        }

    })
</script>

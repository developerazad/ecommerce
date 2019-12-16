<script>
    // add product to cart
    $(document).on('click','button.add-to-cart', function () {
        let thisDiv   = $(this).closest('div');
        let productId = thisDiv.find('.product-id').val();
        let qty       = thisDiv.find('.qty').val();
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

    });

    // update cart
    $(document).on('click', '.update-cart', function () {
        let thisRow = $(this).closest('tr');
        let status  = $(this).attr('data-status');
        let rowId   = thisRow.find('.rowId').val();
        let qty     = thisRow.find('.qty').val();

        if(status==='inc'){
            qty = qty++;
        }else{
            //if(qty>1){
                qty = qty--;
            //}
        }
        alert(qty);
    });
</script>

<a class="nav-link hover-danger" title="删除" onclick="fs()">
    <i class="ti-trash"></i>
</a>
<script>
    var api = @json($url);

    function fs() {
        Swal.fire({
            title: '您确定删除吗?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: '确定',
            cancelButtonText: '取消',
        }).then(function (result) {
            if (result.value) {
                $.ajax({
                    type: "DELETE",
                    url: api,
                    data: '',
                    //请求成功
                    success: function (data, status) {
                        swal(
                            data.message
                        );
                        window.location.reload();
                    }
                    ,
                    //请求失败
                    error: function (data) {
                        swal(
                            '删除失败!',
                            '',
                            'error'
                        );
                    }
                });
            } else {
                swal(
                    '您取消了删除操作！',
                );
            }
        })
    }
</script>
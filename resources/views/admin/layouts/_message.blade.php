<script>
    @if(get_first_flash('success'))
    swal("成功", "{{get_first_flash('success')}}", "success");
    @endif
    @if(get_first_flash('warning'))
    swal("警告", "{{get_first_flash('warning')}}", "warning");
    @endif
    @if(get_first_flash('error'))
    swal("错误", "{{get_first_flash('error')}}", "error");
    @endif
</script>
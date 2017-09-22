<input type="text" name="aa" value="testtttt!!!">
<a href="javascript:aa();">BUTTON</a>
<script type="text/javascript" src="/public/lib/js/jquery-1.9.1.min.js"></script>
<script>
    function aa(){
        alert($('input[name=aa]').val());
    }
</script>
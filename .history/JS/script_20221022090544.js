<script type="text/javascript">
    var counter = 1;
    setInterval(function () {
        Document.getElementbyID('radio'+ counter).checked=true;
        counter++;
        if(counter > 4){
            counter=1;
        }
    },5000);
</script>
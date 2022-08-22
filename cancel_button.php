<span id="sample" hidden/></span>
<button type="button" id="app_cancel" name="app_cancel" class="btn btn-danger" style="float:right;">Cancel</button>

<script>
$("#app_cancel").click(function (event) {
    var link = $("#sample").html();
    if (link != "") var url = "https://drgalen.org/lab_payment_cancel/?" + link;
    else var url = "https://drgalen.org/lab_payment_cancel/";
    window.location = url;
});
</script>

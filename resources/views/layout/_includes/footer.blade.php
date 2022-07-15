<!-- JQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

<script>
    $(document).ready(function() {
        M.updateTextFields();
    });

    $(document).ready(function() {
        $('.sidenav').sidenav();
    });

    $(document).ready(function() {
        $('input#input_text, textarea#textarea2').characterCounter();
    });

    $(document).ready(function() {
        $('.parallax').parallax();
    });

    $(".dropdown-trigger").dropdown();

    $(document).ready(function() {
        $('.modal').modal();
    });

    $(document).ready(function() {
        $('.materialboxed').materialbox();
    });

    $(document).ready(function() {
        $('.collapsible').collapsible();
    });
</script>

</body>

</html>
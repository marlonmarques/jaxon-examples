    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.1.0/js/bootstrap.min.js"></script>

<div id="jaxon-code">

{!! $jaxonJs !!}

{!! $jaxonScript !!}

{!! $jaxonCss !!}
</div>

<script type="text/javascript">
jaxon.config.postHeaders = {'X-CSRF-TOKEN': "{!! csrf_token() !!}"};
</script>

</body>
</html>

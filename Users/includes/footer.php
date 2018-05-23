<div class="extra">

    <div class="container">

        <div class="row">

            <div class="col-md-3">

                <h4>About</h4>

                <ul>
                    <li><a href="javascript:;">About Us</a></li>
                    <li><a href="javascript:;">Twitter</a></li>
                    <li><a href="javascript:;">Facebook</a></li>
                    <li><a href="javascript:;">Google+</a></li>
                </ul>

            </div> <!-- /span3 -->

            <div class="col-md-3">

                <h4>Support</h4>

                <ul>
                    <li><a href="javascript:;">Frequently Asked Questions</a></li>
                    <li><a href="javascript:;">Ask a Question</a></li>
                    <li><a href="javascript:;">Video Tutorial</a></li>
                    <li><a href="javascript:;">Feedback</a></li>
                </ul>

            </div> <!-- /span3 -->

            <div class="col-md-3">

                <h4>Legal</h4>

                <ul>
                    <li><a href="javascript:;">License</a></li>
                    <li><a href="javascript:;">Terms of Use</a></li>
                    <li><a href="javascript:;">Privacy Policy</a></li>
                    <li><a href="javascript:;">Security</a></li>
                </ul>

            </div> <!-- /span3 -->

            <div class="col-md-3">

                <h4>Settings</h4>

                <ul>
                    <li><a href="javascript:;">Consectetur adipisicing</a></li>
                    <li><a href="javascript:;">Eiusmod tempor </a></li>
                    <li><a href="javascript:;">Fugiat nulla pariatur</a></li>
                    <li><a href="javascript:;">Officia deserunt</a></li>
                </ul>

            </div> <!-- /span3 -->

        </div> <!-- /row -->

    </div> <!-- /container -->

</div> <!-- /extra -->

<div class="footer">

    <div class="container">

        <div class="row">

            <div id="footer-copyright" class="col-md-6">
                &copy; <?php
                $copyYear = 2014;
                $curYear = date('Y');
                echo $copyYear . (($copyYear != $curYear) ? '-' . $curYear : '');
                ?> Jolync Solutions. All Rights Reserved
            </div> <!-- /span6 -->

            <div id="footer-terms" class="col-md-6">
                Creator { <a href="http://www.jovicorp.com" target="_blank">Jovicorp Studio</a> }
            </div> <!-- /.span6 -->

        </div> <!-- /row -->

    </div> <!-- /container -->

</div> <!-- /footer -->

<!-- Le javascript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="../../assets/js/libs/jquery-1.9.1.min.js"></script>
<script src="../../assets/js/libs/jquery-ui-1.10.0.custom.min.js"></script>
<script src="../../assets/js/libs/bootstrap.min.js"></script>

<script src="../../assets/js/plugins/flot/jquery.flot.js"></script>
<script src="../../assets/js/plugins/flot/jquery.flot.pie.js"></script>
<script src="../../assets/js/plugins/flot/jquery.flot.resize.js"></script>

<script src="../../assets/js/Application.js"></script>
<script src="../../assets/js/bootstrap-datepicker.js"></script>

<script src="../../assets/js/charts/area.js"></script>
<script src="../../assets/js/charts/donut.js"></script>
<script src="../../assets/js/ckeditor/ckeditor.js"></script>
<script type="application/javascript">
    CKEDITOR.replace('reason');
</script>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="../../assets/js/jquery.dataTables.js"></script>

<script src="http://cdn.datatables.net/1.10.2/js/jquery.dataTables.min.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
<script>
    $(document).ready(function() {
        $("#datepicker").datepicker();
    });

    $(document).ready(function() {
        $("#datepicker1").datepicker();
        $("#datepicker2").datepicker();
        $("#datepicker3").datepicker();
        $("#datepicker-inline").datepicker();
    });
</script>

<script type="text/javascript" charset="utf-8">
    $(document).ready(function() {
        $('#jobs').dataTable();

    } );
</script>

<script>
    $(document).ready(function(){
        $("#mytable #checkall").click(function () {
            if ($("#mytable #checkall").is(':checked')) {
                $("#mytable input[type=checkbox]").each(function () {
                    $(this).prop("checked", true);
                });

            } else {
                $("#mytable input[type=checkbox]").each(function () {
                    $(this).prop("checked", false);
                });
            }
        });

        $("[data-toggle=tooltip]").tooltip();
    });

    $(function () {
        $( '#table' ).searchable({
            striped: true,
            oddRow: { 'background-color': '#f5f5f5' },
            evenRow: { 'background-color': '#fff' },
            searchType: 'fuzzy'
        });

        $( '#searchable-container' ).searchable({
            searchField: '#container-search',
            selector: '.row',
            childSelector: '.col-xs-4',
            show: function( elem ) {
                elem.slideDown(100);
            },
            hide: function( elem ) {
                elem.slideUp( 100 );
            }
        })
    });

</script>

<script>
    $('#search_jobs').click(function (event){
       event.preventDefault();
        var job = $('#job').val();
        var city = $('#city').val();

            jQuery.ajax({
               type: "POST",
                url: 'job_search_results.php',
//                dataType: 'json',
                data: {
                    title_company: job,
                    location: city
                },
                success: function(data) {
                    if(data != '') {
                        $('#jobs_listing').html("");
                        $('#jobs_listing').html(data);
                    } else {
                        $('#jobs_listing').html("");
                    }
                }
            });
    });
</script>

</body>
</html>


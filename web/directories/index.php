<?php

require(__DIR__ . '/defs.php');
require(__DIR__ . '/../../includes/header.php');

// The Jaxon objects are registered only when the page is loaded
$jaxon->registerClasses();
?>

    <div class="container-fluid">
        <div class="row">
<?php require(__DIR__ . '/../../includes/nav.php') ?>
            <div class="col-sm-9 content">
                <h3 class="page-header">Register Directories</h3>

                <div class="row" id="jaxon-html">
                        <div class="col-md-12" id="div1">
                            &nbsp;
                        </div>
                        <div class="col-md-4 margin-vert-10">
                            <select class="form-control" id="colorselect1" name="colorselect1"
                                onchange="<?php echo rq()->call('Test.App.setColor', rq()->select('colorselect1')) ?>">
                                <option value="black" selected="selected">Black</option>
                                <option value="red">Red</option>
                                <option value="green">Green</option>
                                <option value="blue">Blue</option>
                            </select>
                        </div>
                        <div class="col-md-8 margin-vert-10">
                            <button type="button" class="btn btn-primary" onclick="<?php echo rq()->call('Test.App.sayHello', 1) ?>" >CLICK ME</button>
                            <button type="button" class="btn btn-primary" onclick="<?php echo rq()->call('Test.App.sayHello', 0) ?>" >Click Me</button>
                            <button type="button" class="btn btn-primary" onclick="<?php echo rq()->call('Test.App.showDialog') ?>" >Show Dialog</button>
                        </div>

                        <div class="col-md-12" id="div2">
                            &nbsp;
                        </div>
                        <div class="col-md-4 margin-vert-10">
                            <select class="form-control" id="colorselect2" name="colorselect2"
                                onchange="<?php echo rq()->call('Test.Ext.setColor', rq()->select('colorselect2')) ?>">
                                <option value="black" selected="selected">Black</option>
                                <option value="red">Red</option>
                                <option value="green">Green</option>
                                <option value="blue">Blue</option>
                            </select>
                        </div>
                        <div class="col-md-8 margin-vert-10">
                            <button type="button" class="btn btn-primary" onclick="<?php echo rq()->call('Test.Ext.sayHello', 1) ?>" >CLICK ME</button>
                            <button type="button" class="btn btn-primary" onclick="<?php echo rq()->call('Test.Ext.sayHello', 0) ?>" >Click Me</button>
                            <button type="button" class="btn btn-primary" onclick="<?php echo rq()->call('Test.Ext.showDialog') ?>" >Show Dialog</button>
                        </div>

                </div>
            </div> <!-- class="content" -->
       </div> <!-- class="row" -->
    </div>
<div id="jaxon-init">
<script type='text/javascript'>
    /* <![CDATA[ */
    window.onload = function() {
        <?php echo rq()->call('Test.App.sayHello', 0, false) ?>;
        <?php echo rq()->call('Test.App.setColor', rq()->select('colorselect1'), false) ?>;
        <?php echo rq()->call('Test.Ext.sayHello', 0, false) ?>;
        <?php echo rq()->call('Test.Ext.setColor', rq()->select('colorselect2'), false) ?>;
    }
    /* ]]> */
</script>
</div>

<?php require(__DIR__ . '/../../includes/footer.php') ?>

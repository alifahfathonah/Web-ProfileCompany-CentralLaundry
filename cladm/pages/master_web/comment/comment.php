<script language="javascript">

        function ValLayanan()
{
    if(addlayanan.img.value=="")
    {
        alert("Pilih Gambar")
        addlayanan.img.focus()
        return false
    }
   
    
        return true;
}
</script>
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Dashboard
                        <small>Control panel</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Master Web</a></li>
                        <li class="active">Comment & Slider</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                    <!-- Main row -->
                    <div class="row">
                        <div class="col-xs-12">
                         <div class="nav-tabs-custom">
                                <ul class="nav nav-tabs">
                                    <li  class="active"><a href="#comment" data-toggle="tab"><i class="fa fa-comments"></i> Comment</a></li>
                                    <li><a href="#slider" data-toggle="tab"><i class="fa fa-picture-o"></i> Slider</a></li>
                                </ul>
                                
                                <div class="tab-content">
                                    <!-- Font Awesome icons -->
                                    <div class="tab-pane active" id="comment" >
                                    <?php include "pages/master_web/comment/comm.php"; ?>
                                    </div><!-- /#fa-icons -->
                                    <!-- glyphicons-->
                                    <div class="tab-pane" id="slider">
                                    <?php include "pages/master_web/slider/slider.php"; ?>
                                    
                                    </div><!-- /#ion-icons -->

                                </div><!-- /.tab-content -->
                            </div><!-- /.nav-tabs-custom -->
                        
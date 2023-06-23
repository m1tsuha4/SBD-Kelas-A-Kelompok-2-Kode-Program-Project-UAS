
<!DOCTYPE html>
    <html lang="en-US">
        <head>
            <meta charset="UTF-8"/>
            <link rel="icon" type="image/x-icon" href="images/logo-header.png" />
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <!-- Font Awesome -->
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
            <!-- Ionicons -->
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
            <meta name="csrf-param" content="_csrf">
<meta name="csrf-token" content="UmcYk4ZClwRSBiQTlq0dDy-j6FLJDXo5XCpScTVyiKgaM2rr6yehYWpoUSKg_ylcaMWLHPhUPAsmYwAQGDTw8g==">
            <title>Sistem Informasi Perpustakaan</title>
            <link href="assets/82ce6ab9/css/bootstrap.css" rel="stylesheet">
<link href="assets/af110e1e/css/activeform.min.css" rel="stylesheet">
<link href="assets/a03c4790/css/form.min.css" rel="stylesheet">
<link href="assets/14da9175/css/kv-grid.min.css" rel="stylesheet">
<link href="assets/e58bb852/css/bootstrap-dialog-bs3.min.css" rel="stylesheet">
<link href="assets/14da9175/css/jquery.resizableColumns.min.css" rel="stylesheet">
<link href="css/site.css" rel="stylesheet">
<link href="css/eofficestyle.css" rel="stylesheet">
<link href="css/eofficestyle_bo.css" rel="stylesheet">
<link href="adminlte/css/AdminLTE.css" rel="stylesheet">
<link href="css/proses-step.css" rel="stylesheet">
<link href="css/loading.css" rel="stylesheet">
<link href="assets/9f702a68/css/font-awesome.min.css" rel="stylesheet">
<link href="assets/8b93b1c2/css/AdminLTE.min.css" rel="stylesheet">
<link href="assets/8b93b1c2/css/skins/_all-skins.min.css" rel="stylesheet">
<script src="assets/e58bb852/js/dialog.min.js"></script>
<script>var krajeeDialogDefaults_f77ffd0f = {"alert":{"type":"type-info","title":"Information","buttonLabel":"<span class=\"glyphicon glyphicon-ok\"></span> Ok"},"confirm":{"type":"type-warning","title":"Confirmation","btnOKClass":"btn-warning","btnOKLabel":"<span class=\"glyphicon glyphicon-ok\"></span> Ok","btnCancelLabel":"<span class=\"glyphicon glyphicon-ban-circle\"></span>  Cancel"},"prompt":{"draggable":false,"title":"Information","buttons":[{"label":"Cancel","icon":"glyphicon glyphicon-ban-circle","cssClass":"btn-default"},{"label":"Ok","icon":"glyphicon glyphicon-ok","cssClass":"btn-primary"}],"closable":false},"dialog":{"draggable":true,"title":"Information","buttons":[{"label":"Cancel","icon":"glyphicon glyphicon-ban-circle","cssClass":"btn-default"},{"label":"Ok","icon":"glyphicon glyphicon-ok","cssClass":"btn-primary"}]}};
var krajeeDialog_7f94fe21 = {"id":"w4"};
var krajeeDialog=new KrajeeDialog(true,krajeeDialog_7f94fe21,krajeeDialogDefaults_f77ffd0f);</script>        </head>
        <body class="hold-transition skin-green fixed sidebar-collapse- sidebar-mini-">
                        <div lass="wrapper">

                
<header class="main-header">
        <a href="" class="logo">
        <span class="logo-mini art-object567354297-bo-mini"></span>
        <span class="logo-lg" style="text-align: left;">    
            <div class="art-object567354297-bo" data-left="0%"></div>
            <h1 class="art-headline-bo" data-left="10%">Pustaka Mandiri</h1>
            <h2 class="art-slogan-bo" data-left="10.09%">Universitas Andalas</h2>
        </span>
    </a>
    <nav class="navbar navbar-static-top" role="navigation">

        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
            <!--<span style="font-weight: bold;">MENU</span>-->
        </a>

        <div class="navbar-custom-menu">

            <ul class="nav navbar-nav">
                <!-- Messages: style can be found in dropdown.less-->
                <li class="dropdown notifications-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-bell-o"></i>
                        <span id="notifikasi-info-jml" class="label label-warning" style="font-size:12px;">0</span>
                    </a>
                    <ul id="notifikasi-info-list" class="dropdown-menu">
                        <!-- Notofikasi List Informasi -->
                    </ul>
                </li>
                <!-- Tasks: style can be found in dropdown.less -->
                                <!-- User Account: style can be found in dropdown.less -->
                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <img src="images/nobody.png" class="user-image" alt="User Image" style="background-color: white"/>
                        <span class="hidden-xs">
                            Akun Saya
                        </span>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- User image -->
                        <li class="user-header" style="min-height: 80px;max-height:80px;">
                            <table border="0" style="width: 100%;">
                                <tbody>
                                    <tr>
                                        <td style="width: 50px;">
                                            <img src="images/nobody.png" class="user-image" style="width: 50px;height:50px;background-color: white;margin: 0px;" alt="User Image"/>
                                        </td>
                                        <td style="text-align: left;color: white;font-stretch: condensed;padding-left: 10px;">
                                            RAZZAQ ARDANA                                            <br/>
                                            <small>Member sejak Aug,2017</small>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </li>
                        <li class="user-footer">
                            <div class="pull-left">
                            </div>
                            <div class="pull-right">
                                <a class="btn btn-danger btn-flat" href="logout" data-method="post"><i class="fa fa-power-off"></i> Keluar</a>                            </div>
                        </li>
                    </ul>
                </li>

                <!-- User Account: style can be found in dropdown.less -->
                <!-- Control Sidebar Toggle Button -->
                <!--                <li>
                                    <a href="#" data-toggle="control-sidebar"><i class="fa fa-user"></i></a>
                                </li>-->
            </ul>
        </div>
    </nav>
</header>

<div id="modal-dialog-pengumuman" class="fade modal" role="dialog" tabindex="-1" data-backdrop="true">
<div class="modal-dialog modal-md">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
Pengumuman & Informasi
</div>
<div class="modal-body">
<div id="modalContent"></div>
</div>

</div>
</div>
</div>
                <!--overflow-y: auto;overflow-x: hidden;-->
<aside class="main-sidebar" style="height: 100%;scrollbar-width:thin;overflow-y: auto;overflow-x: hidden;">
    <section class="sidebar">
        <div class="user-panel" style="height: 80px;">
            <div class="pull-left image">
                <img src="images/nobody.png" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>
                    RAZZAQ ARDANA (17115...                    <br/>
                    <i style="font-size: 11px;">ID : 1711513011</i>
                </p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <ul class="sidebar-menu"><li class="header"><span><span>MENU UTAMA</span></span></li>
<li><a href="../../dashboard.php"><i class="fa fa-home"></i>  <span>Home</span></a></li>
<li class="active"><a href="perpanjang.php"><i class="fa fa-refresh"></i>  <span>Perpanjang Peminjaman Buku</span></a></li>
<li class="sidebar-menu-item disabled"><a href="riwayat.php"><i class="fa fa-history"></i>  <span>Riwayat Peminjaman Buku</span></a></li>

<li class="disabled"><a href="../kliring/kliring.php"><i class="fa fa-archive"></i>  <span>Kliring Perpustakaan</span></a></li></ul>    </section>
</aside>
                <div class="content-wrapper">
    <section class="content">
                <div class="loan-index">
    <div class="panel panel-default" style="margin-bottom: 0px;">
        <div class="panel-heading">
            <h4 style="margin: 0px;font-weight: bold;"><i class="fa fa-refresh"></i> Perpanjang Peminjaman</h4>
            <div class="pull-right" style="margin-top: -25px;">
            </div>
        </div>
        <div class="panel-body center" style="padding-bottom: 0px;">
            
<div class="loan-search">
    <div class="panel panel-success form-pencarian">
        <div class="panel-heading">
            <h5 style="margin: 0px;"><i class="fa fa-search"></i> Tambah Perpanjangan</h5>
        </div>
        <div class="panel-body center">
            <form id="frm-cari" class="form-horizontal kv-form-horizontal" action="member/peminjaman/perpanjang" method="post" role="form">
<input type="hidden" name="_csrf" value="UmcYk4ZClwRSBiQTlq0dDy-j6FLJDXo5XCpScTVyiKgaM2rr6yehYWpoUSKg_ylcaMWLHPhUPAsmYwAQGDTw8g==">	
<div class="kv-nested-attribute-block form-sub-attributes form-group">
<label class="col-sm-3 control-label">
Kode Eksemplar
</label>
<div class="col-sm-9">
	<div class="row">

		<div class="col-sm-6">

			
<div class="form-group highlight-addon field-loansearch-kodeeksemplar">


<input type="text" id="loansearch-kodeeksemplar" class="form-control" name="LoanSearch[kodeEksemplar]" onkeypress="perpanjang(event)" autofocus="true" data-pjax="0" placeholder="Kode Eksemplar">

<div class="help-block"></div>

</div>

		</div>

		<div class="col-sm-6">

			<div style="text-align: left; margin-top: 0px"><button type="button" class="btn btn-sm btn-success" onclick="perpanjang(event)" data-pjax="0"><i class="fa fa-refresh"></i> Perpanjang</button></div>
		</div>

	</div>


</div>
</div>
	

</form>        </div>
    </div>
</div>
            <div id="pjax-perpanjang-peminjaman" data-pjax-container=""><div id="w1-pjax" data-pjax-container="" data-pjax-push-state data-pjax-timeout="1000"><div class="kv-loader-overlay"><div class="kv-loader"></div></div><div id="w1" class="grid-view is-bs3 hide-resize" data-krajee-grid="kvGridInit_3679da27" data-krajee-ps="ps_w1_container"><div class="panel panel-default"><div class="panel-heading">    <div class="pull-right"></div>
    <h3 class="panel-title"><b>Daftar Perpanjangan</b></h3>
    <div class="clearfix"></div></div>

<div id="w1-container" class="table-responsive kv-grid-container"><table class="kv-grid-table table table-hover table-bordered table-striped table-condensed kv-table-wrap"><thead>

<tr><th class="kv-align-center kv-align-top" style="width:50px;" data-col-seq="0">#</th><th class="kv-align-center" style="width:100px;;" data-col-seq="1"><a href="member/peminjaman/perpanjang?sort=item_code" data-sort="item_code">Kode Buku</a></th><th class="kv-align-left" data-col-seq="2">Judul Buku</th><th class="kv-align-center" style="width:100px;" data-col-seq="3"><a href="member/peminjaman/perpanjang?sort=loan_date" data-sort="loan_date">Tanggal Pinjam</a></th><th class="kv-align-center" style="width:100px;" data-col-seq="4"><a href="member/peminjaman/perpanjang?sort=due_date" data-sort="due_date">Tanggal Kembali</a></th><th class="kv-align-center" style="width:100px;" data-col-seq="5">Keterangan</th></tr>

</thead>
<tbody>
<tr><td colspan="6"><div class="empty">No results found.</div></td></tr>
</tbody></table></div>

<div class="panel-footer">    <div class="kv-panel-pager">
        
    </div>
    <div style="float:right;margin-top:-25px;font-style:italic;"><div class="pull-right"></div></div>
    <div class="clearfix"></div></div></div></div></div></div>        </div>
    </div>
</div>
    </section>
</div>

<footer class="main-footer" style="font-size: 13px;font-style: italic;">
    <div class="pull-right hidden-xs">
        <b>Version</b> 2.0.40-0.1    </div>
    <strong>&copy; <a href="http://www.unand.ac.id" target="_blank">2021</a> <a href="http://www.unand.ac.id/" target="_blank">Universitas Andalas</a>.</strong> All rights reserved.
</footer>

            </div>

            <script src="assets/28cefd75/jquery.js"></script>
<script src="assets/9d28d2c7/yii.js"></script>
<script src="assets/9d28d2c7/yii.activeForm.js"></script>
<script src="assets/82ce6ab9/js/bootstrap.js"></script>
<script src="assets/af110e1e/js/activeform.min.js"></script>
<script src="assets/a03c4790/js/form.min.js"></script>
<script src="assets/9d28d2c7/yii.gridView.js"></script>
<script src="assets/e58bb852/js/bootstrap-dialog.min.js"></script>
<script src="assets/e58bb852/js/dialog-yii.min.js"></script>
<script src="assets/14da9175/js/kv-grid-export.min.js"></script>
<script src="assets/14da9175/js/jquery.resizableColumns.min.js"></script>
<script src="assets/9de6f626/jquery.pjax.js"></script>
<script src="adminlte/js/app.min.js"></script>
<script src="js/loading.js"></script>
<script src="assets/8b93b1c2/js/adminlte.min.js"></script>
<script>
    function btnKembali(){
        //$(document).on('pjax:start', function() {
        //    jQuery('body').showLoading()
        //});
        $.pjax.reload({
            container:"#pjax-perpanjang-peminjaman",
            url:'',
            type:"GET",
            async:false,
            timeout:false,
            push:true
        });
        //$(document).on('pjax:complete', function() {
        //    jQuery('body').hideLoading()
        //});
    }
    
    function perpanjang(e) {
        document.getElementById("loansearch-kodeeksemplar").focus();
        if(e.type=='click' || e.type=='change' || (e.type=='keypress' && e.keyCode==13) || e.type=='complete'){
            e.preventDefault();
            $.ajax({
                type: 'POST',
                url:'member/peminjaman/set-perpanjang',
                data:{'btn-perpanjang':1,data:$('#frm-cari').serialize()},
                success: function (data) {
                    var cek = JSON.parse(data);
                    if(cek.status=='success'){
                        krajeeDialog.confirm(cek.message, function (result) {
                            if (result) {
                                $.ajax({
                                    type: 'POST',
                                    url:'member/peminjaman/set-perpanjang',
                                    data:{'btn-perpanjang-ok':1,'loanId':cek.loanId},
                                    success: function (data) {
                                        var rs = JSON.parse(data);
                                        if(rs.status=='success'){
                                            $.pjax.reload({
                                                container:"#pjax-perpanjang-peminjaman",
                                                type:"POST",
                                                timeout:false
                                            });
                                        }else if(rs.status=='alert'){
                                            krajeeDialog.alert(rs.message);
                                        }
                                        return false;
                                    }
                                });
                                this.remove();
                            } else {
                                this.remove();
                            }
                        });
                    }else{
                        if(cek.status=='hint'){
                            for(var i=0;i<cek.errors.length;i++){
                                $.each(cek.errors[i],function(index,value){
                                    $('div.field-loansearch-'+index).addClass('has-error');
                                    $('.field-loansearch-'+index+' div.help-block').html(value);
                                });
                            }
                        }else{
                            $.pjax.reload({
                                container:"#pjax-perpanjang-peminjaman",
                                type:"POST",
                                timeout:false
                            });
                            krajeeDialog.alert(cek.message);
                        }
                    }
                }
            });
        }
    }
</script>
<script>jQuery(function ($) {
var $el=jQuery("#frm-cari .kv-hint-special");if($el.length){$el.each(function(){$(this).activeFieldHint()});}
jQuery("#w0").kvFormBuilder({});
jQuery('#frm-cari').yiiActiveForm([], []);
jQuery('#w2').dropdown();
krajeeYiiConfirm('krajeeDialog');
var kvGridExp_9aaabd41={"gridId":"w1","action":"gridview/export/download","module":"gridview","encoding":"utf-8","bom":1,"target":"_blank","messages":{"allowPopups":"Disable any popup blockers in your browser to ensure proper download.","confirmDownload":"Ok to proceed?","downloadProgress":"Generating the export file. Please wait...","downloadComplete":"Request submitted! You may safely close this dialog after saving your downloaded file."},"exportConversions":[{"from":"<span class=\"glyphicon glyphicon-ok text-success\"></span>","to":"Active"},{"from":"<span class=\"glyphicon glyphicon-remove text-danger\"></span>","to":"Inactive"}],"skipExportElements":[".sr-only",".hide"],"showConfirmAlert":true};
var kvGridExp_12735912={"filename":"grid-export","showHeader":true,"showPageSummary":true,"showFooter":true};
var kvGridExp_4df710e6={"dialogLib":"krajeeDialog","gridOpts":kvGridExp_9aaabd41,"genOpts":kvGridExp_12735912,"alertMsg":"The HTML export file will be generated for download.","config":{"cssFile":["https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"]}};
var kvGridExp_2ddb59a2={"dialogLib":"krajeeDialog","gridOpts":kvGridExp_9aaabd41,"genOpts":kvGridExp_12735912,"alertMsg":"The CSV export file will be generated for download.","config":{"colDelimiter":",","rowDelimiter":"\r\n"}};
var kvGridExp_cee8a492={"dialogLib":"krajeeDialog","gridOpts":kvGridExp_9aaabd41,"genOpts":kvGridExp_12735912,"alertMsg":"The TEXT export file will be generated for download.","config":{"colDelimiter":"\t","rowDelimiter":"\r\n"}};
var kvGridExp_0579e20e={"dialogLib":"krajeeDialog","gridOpts":kvGridExp_9aaabd41,"genOpts":kvGridExp_12735912,"alertMsg":"The EXCEL export file will be generated for download.","config":{"worksheet":"ExportWorksheet","cssFile":""}};
var kvGridExp_59bcef24={"dialogLib":"krajeeDialog","gridOpts":kvGridExp_9aaabd41,"genOpts":kvGridExp_12735912,"alertMsg":"The PDF export file will be generated for download.","config":{"mode":"UTF-8","format":"A4-L","destination":"D","marginTop":20,"marginBottom":20,"cssInline":".kv-wrap{padding:20px}","methods":{"SetHeader":[{"odd":{"L":{"content":"Yii2 Grid Export (PDF)","font-size":8,"color":"#333333"},"C":{"content":"Grid Export","font-size":16,"color":"#333333"},"R":{"content":"Generated: Sun, 18-Jun-2023","font-size":8,"color":"#333333"}},"even":{"L":{"content":"Yii2 Grid Export (PDF)","font-size":8,"color":"#333333"},"C":{"content":"Grid Export","font-size":16,"color":"#333333"},"R":{"content":"Generated: Sun, 18-Jun-2023","font-size":8,"color":"#333333"}}}],"SetFooter":[{"odd":{"L":{"content":"© Krajee Yii2 Extensions","font-size":8,"font-style":"B","color":"#999999"},"R":{"content":"[ {PAGENO} ]","font-size":10,"font-style":"B","font-family":"serif","color":"#333333"},"line":true},"even":{"L":{"content":"© Krajee Yii2 Extensions","font-size":8,"font-style":"B","color":"#999999"},"R":{"content":"[ {PAGENO} ]","font-size":10,"font-style":"B","font-family":"serif","color":"#333333"},"line":true}}]},"options":{"title":"Grid Export","subject":"PDF export generated by kartik-v/yii2-grid extension","keywords":"krajee, grid, export, yii2-grid, pdf"},"contentBefore":"","contentAfter":""}};
var kvGridExp_34fdeabe={"dialogLib":"krajeeDialog","gridOpts":kvGridExp_9aaabd41,"genOpts":kvGridExp_12735912,"alertMsg":"The JSON export file will be generated for download.","config":{"colHeads":[],"slugColHeads":false,"jsonReplacer":function(k,v){return typeof(v)==='string'?$.trim(v):v},"indentSpace":4}};
var kvGridInit_3679da27=function(){
jQuery('#w1 .export-html').gridexport(kvGridExp_4df710e6);jQuery('#w1 .export-csv').gridexport(kvGridExp_2ddb59a2);jQuery('#w1 .export-txt').gridexport(kvGridExp_cee8a492);jQuery('#w1 .export-xls').gridexport(kvGridExp_0579e20e);jQuery('#w1 .export-pdf').gridexport(kvGridExp_59bcef24);jQuery('#w1 .export-json').gridexport(kvGridExp_34fdeabe);jQuery('#w1-container').resizableColumns('destroy').resizableColumns({"store":null,"resizeFromBody":false});
};
kvGridInit_3679da27();
jQuery("#w1-pjax").on('pjax:timeout', function(e){e.preventDefault()}).on('pjax:send', function(){$("#w1-pjax").addClass('kv-grid-loading')}).off('pjax:complete.95421baf').on('pjax:complete.95421baf', function(){setTimeout(kvGridInit_3679da27, 2500);$("#w1-pjax").removeClass('kv-grid-loading');
});
jQuery('#w1').yiiGridView({"filterUrl":"\/mandiri\/member\/peminjaman\/perpanjang","filterSelector":"#w1-filters input, #w1-filters select","filterOnFocusOut":true});
jQuery(document).pjax("#w1-pjax a", {"push":true,"replace":false,"timeout":1000,"scrollTo":false,"container":"#w1-pjax"});
jQuery(document).off("submit", "#w1-pjax form[data-pjax]").on("submit", "#w1-pjax form[data-pjax]", function (event) {jQuery.pjax.submit(event, {"push":true,"replace":false,"timeout":1000,"scrollTo":false,"container":"#w1-pjax"});});
jQuery(document).pjax("#pjax-perpanjang-peminjaman a", {"push":false,"replace":false,"timeout":false,"scrollTo":false,"container":"#pjax-perpanjang-peminjaman"});
jQuery(document).off("submit", "#pjax-perpanjang-peminjaman form[data-pjax]").on("submit", "#pjax-perpanjang-peminjaman form[data-pjax]", function (event) {jQuery.pjax.submit(event, {"push":false,"replace":false,"timeout":false,"scrollTo":false,"container":"#pjax-perpanjang-peminjaman"});});
jQuery('#modal-dialog-pengumuman').modal({"show":false,"keyboard":false});
        
    //Load Notifikasi
    function notifInfo() {
        $.ajax({
            type: 'GET',
            url: 'dashboard/notifikasi-info',
            success: function (data) {
                var rs = JSON.parse(data);
                $('#notifikasi-info-jml').html(rs.jml);
                $('#notifikasi-info-list').html(rs.list);
            }
        });
    }
    notifInfo();
        
        
});</script>        </body>
    </html>
        
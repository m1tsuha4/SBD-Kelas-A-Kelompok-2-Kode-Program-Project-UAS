
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
<meta name="csrf-token" content="Gffh_pjww7i2ttb6FIIdHIO_1AtM3diRau4TKT9AJ41Ro5OG9ZX13Y7Yo8si0ClPxNm3RX2EnqMQp0FIEgZf1w==">
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
var krajeeDialog_f8382620 = {"id":"w5"};
var krajeeDialog=new KrajeeDialog(true,krajeeDialog_f8382620,krajeeDialogDefaults_f77ffd0f);</script>        </head>
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
<li><a href="anggota.php"><i class="fa fa-address-book"></i>  <span>Anggota</span></a></li>
<li class="active"><a href="buku.php"><i class="fa fa-book"></i>  <span>Buku</span></a></li>
<li><a href="../mng2/kategori.php"><i class="fa fa-object-group"></i>  <span>Kategori</span></a></li>
<li><a href="../mng2/penerbit.php"><i class="fa fa-institution"></i>  <span>Penerbit</span></a></li></ul>    </section>
</aside>
                <div class="content-wrapper">
    <section class="content">
                <div class="loan-index">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4 style="margin: 0px;"><i class="fa fa-history"></i> Riwayat Peminjaman Buku</h4>
        </div>
        <div class="panel-body center" style="padding-bottom: 0px;">
            
<div class="loan-search">
    <div class="panel panel-default form-pencarian">
        <div class="panel-heading">
            <h5 style="margin: 0px;"><i class="fa fa-search"></i> Pencarian</h5>
        </div>
        <div class="panel-body center">
            <form id="frm-cari" class="form-vertical" action="member/peminjaman/riwayat" method="post" role="form">
<input type="hidden" name="_csrf" value="Gffh_pjww7i2ttb6FIIdHIO_1AtM3diRau4TKT9AJ41Ro5OG9ZX13Y7Yo8si0ClPxNm3RX2EnqMQp0FIEgZf1w=="><div class="row">
	<div class="col-sm-6">

		
<div class="form-group highlight-addon field-loansearch-item_code">
<label class="control-label has-star" for="loansearch-item_code">Kode Buku</label>

<input type="text" id="loansearch-item_code" class="form-control" name="LoanSearch[item_code]" onkeypress="cariData(event)" placeholder="Kode Buku">

<div class="help-block"></div>

</div>

	</div>

	<div class="col-sm-6">

		
<div class="form-group highlight-addon field-loansearch-title">
<label class="control-label has-star" for="loansearch-title">Judul Buku</label>

<input type="text" id="loansearch-title" class="form-control" name="LoanSearch[title]" onkeypress="cariData(event)" placeholder="Judul Buku">

<div class="help-block"></div>

</div>

	</div>

</div>

	
		<div style="text-align: left; margin-top: 0px"><button type="button" class="fa fa-search btn btn-primary btn-flat" onclick="cariData(event)"> Tampilkan</button></div>
	

</form>        </div>
    </div>
</div>
            <div id="pjax-peminjaman" data-pjax-container=""><div id="w2-pjax" data-pjax-container="" data-pjax-push-state data-pjax-timeout="1000"><div class="kv-loader-overlay"><div class="kv-loader"></div></div><div id="w2" class="grid-view is-bs3 hide-resize" data-krajee-grid="kvGridInit_daa33f7b" data-krajee-ps="ps_w2_container"><div class="panel panel-default">

<div id="w2-container" class="table-responsive kv-grid-container"><table class="kv-grid-table table table-hover table-bordered table-striped table-condensed kv-table-wrap"><thead>

<tr><th class="kv-align-center kv-align-top" style="width:50px;" data-col-seq="0">#</th><th class="kv-align-center" style="width:100px;;" data-col-seq="1"><a href="member/peminjaman/riwayat?sort=item_code" data-sort="item_code">Kode Buku</a></th><th class="kv-align-left" data-col-seq="2">Judul Buku</th><th class="kv-align-center" style="width:100px;" data-col-seq="3"><a href="member/peminjaman/riwayat?sort=loan_date" data-sort="loan_date">Tanggal Pinjam</a></th><th class="kv-align-center" style="width:100px;" data-col-seq="4"><a href="member/peminjaman/riwayat?sort=due_date" data-sort="due_date">Tanggal Kembali</a></th><th class="kv-align-center" style="width:100px;" data-col-seq="5">Keterangan</th><th class="kv-align-center kv-grid-group-header w2" data-group-key="89b66db2" data-col-seq="6"></th></tr>

</thead>
<tbody>

<tr class="w2" data-key="534274"><td class="kv-align-center kv-align-top w2" style="width:50px;" data-col-seq="0">1</td><td class="kv-align-center w2" style="width:100px;;" data-col-seq="1">22000223037</td><td class="kv-align-left w2" data-col-seq="2"><b>Data Mining dan Machine Learning Menggunakan Matlab dan Python</b><br/><i style="font-size: 11px;">ISBN : 9786237131328</i> <i style="font-size: 11px;">Tahun : 2020</i> </td><td class="kv-align-center w2" style="width:100px;" data-col-seq="3">29 Mei 2023</td><td class="kv-align-center w2" style="width:100px;" data-col-seq="4">12 Jun 2023</td><td class="kv-align-center w2" style="width:100px;" data-col-seq="5"><i class="label label-success"><span class="fa fa-check"></span> Telah Kembali</i></td></tr>
<tr class="w2" data-key="534275"><td class="kv-align-center kv-align-top w2" style="width:50px;" data-col-seq="0">2</td><td class="kv-align-center w2" style="width:100px;;" data-col-seq="1">HBH2015DL05</td><td class="kv-align-left w2" data-col-seq="2"><b>Kendali Sistem Tenaga Listrik dengan Matlab</b><br/><i style="font-size: 11px;">ISBN : 9786022621697</i> <i style="font-size: 11px;">Tahun : 2014</i> </td><td class="kv-align-center w2" style="width:100px;" data-col-seq="3">29 Mei 2023</td><td class="kv-align-center w2" style="width:100px;" data-col-seq="4">12 Jun 2023</td><td class="kv-align-center w2" style="width:100px;" data-col-seq="5"><i class="label label-success"><span class="fa fa-check"></span> Telah Kembali</i></td></tr>
<tr class="w2" data-key="534276"><td class="kv-align-center kv-align-top w2" style="width:50px;" data-col-seq="0">3</td><td class="kv-align-center w2" style="width:100px;;" data-col-seq="1">21000223523</td><td class="kv-align-left w2" data-col-seq="2"><b>MACHINE LEARNING (Tingkat Dasar dan Lanjut)</b><br/><i style="font-size: 11px;">ISBN : 9786026232786</i> <i style="font-size: 11px;">Tahun : 2018</i> </td><td class="kv-align-center w2" style="width:100px;" data-col-seq="3">29 Mei 2023</td><td class="kv-align-center w2" style="width:100px;" data-col-seq="4">05 Jun 2023</td><td class="kv-align-center w2" style="width:100px;" data-col-seq="5"><i class="label label-success"><span class="fa fa-check"></span> Telah Kembali</i></td></tr>
</tbody></table></div>

<div class="panel-footer">    <div class="kv-panel-pager">
        
    </div>
    <div style="float:right;margin-top:-25px;font-style:italic;"><div class="pull-right"><div class="summary">Showing <b>1-3</b> of <b>3</b> items.</div></div></div>
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
<script src="assets/14da9175/js/kv-grid-group.min.js"></script>
<script src="assets/e58bb852/js/bootstrap-dialog.min.js"></script>
<script src="assets/e58bb852/js/dialog-yii.min.js"></script>
<script src="assets/14da9175/js/kv-grid-export.min.js"></script>
<script src="assets/14da9175/js/jquery.resizableColumns.min.js"></script>
<script src="assets/9de6f626/jquery.pjax.js"></script>
<script src="adminlte/js/app.min.js"></script>
<script src="js/loading.js"></script>
<script src="assets/8b93b1c2/js/adminlte.min.js"></script>
<script>
    function cariData(e){
        if(e.type=='click' || e.type=='change' || (e.type=='keypress' && e.keyCode==13)){
            $.pjax.reload({
                start:jQuery('body').showLoading(),
                container:"#pjax-peminjaman",
                url:'http://katalog.pustaka.unand.ac.idmember/peminjaman/riwayat',
                type:"POST",
                data: $('#frm-cari').serialize(),
                async:true,
                timeout:false,
                push:true
            });
            $(document).on('pjax:complete', function() {
                jQuery('body').hideLoading();
            });
        }
    }
    
    function perpanjang(url) {
        $.ajax({
            type: 'POST',
            url: url+'&ok=0',
            success: function (data) {
                var cek = JSON.parse(data);
                krajeeDialog.confirm(cek.message+"<br/>Apakah anda yakin memperpanjang item ini?", function (result) {
                    if (result) {
                        $.ajax({
                            type: 'POST',
                            url: url+'&ok=1',
                            success: function (data) {
                                var rs = JSON.parse(data);
                                $.pjax.reload({
                                    container:"#pjax-peminjaman",
                                    type:"POST",
                                    timeout:false
                                });
                                return false;
                            }
                        });
                        this.remove();
                    } else {
                        this.remove();
                    }
                });
            }
        });
    }
</script>
<script>jQuery(function ($) {
var $el=jQuery("#frm-cari .kv-hint-special");if($el.length){$el.each(function(){$(this).activeFieldHint()});}
jQuery("#w0").kvFormBuilder({});
jQuery("#w1").kvFormBuilder({});
jQuery('#frm-cari').yiiActiveForm([], []);
kvGridGroup('w2');
jQuery('#w3').dropdown();
krajeeYiiConfirm('krajeeDialog');
var kvGridExp_1403c7e3={"gridId":"w2","action":"gridview/export/download","module":"gridview","encoding":"utf-8","bom":1,"target":"_blank","messages":{"allowPopups":"Disable any popup blockers in your browser to ensure proper download.","confirmDownload":"Ok to proceed?","downloadProgress":"Generating the export file. Please wait...","downloadComplete":"Request submitted! You may safely close this dialog after saving your downloaded file."},"exportConversions":[{"from":"<span class=\"glyphicon glyphicon-ok text-success\"></span>","to":"Active"},{"from":"<span class=\"glyphicon glyphicon-remove text-danger\"></span>","to":"Inactive"}],"skipExportElements":[".sr-only",".hide"],"showConfirmAlert":true};
var kvGridExp_12735912={"filename":"grid-export","showHeader":true,"showPageSummary":true,"showFooter":true};
var kvGridExp_be06d3cd={"dialogLib":"krajeeDialog","gridOpts":kvGridExp_1403c7e3,"genOpts":kvGridExp_12735912,"alertMsg":"The HTML export file will be generated for download.","config":{"cssFile":["https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"]}};
var kvGridExp_5de8f07f={"dialogLib":"krajeeDialog","gridOpts":kvGridExp_1403c7e3,"genOpts":kvGridExp_12735912,"alertMsg":"The CSV export file will be generated for download.","config":{"colDelimiter":",","rowDelimiter":"\r\n"}};
var kvGridExp_2fc2dcbc={"dialogLib":"krajeeDialog","gridOpts":kvGridExp_1403c7e3,"genOpts":kvGridExp_12735912,"alertMsg":"The TEXT export file will be generated for download.","config":{"colDelimiter":"\t","rowDelimiter":"\r\n"}};
var kvGridExp_884382ad={"dialogLib":"krajeeDialog","gridOpts":kvGridExp_1403c7e3,"genOpts":kvGridExp_12735912,"alertMsg":"The EXCEL export file will be generated for download.","config":{"worksheet":"ExportWorksheet","cssFile":""}};
var kvGridExp_48c28d49={"dialogLib":"krajeeDialog","gridOpts":kvGridExp_1403c7e3,"genOpts":kvGridExp_12735912,"alertMsg":"The PDF export file will be generated for download.","config":{"mode":"UTF-8","format":"A4-L","destination":"D","marginTop":20,"marginBottom":20,"cssInline":".kv-wrap{padding:20px}","methods":{"SetHeader":[{"odd":{"L":{"content":"Yii2 Grid Export (PDF)","font-size":8,"color":"#333333"},"C":{"content":"Grid Export","font-size":16,"color":"#333333"},"R":{"content":"Generated: Sun, 18-Jun-2023","font-size":8,"color":"#333333"}},"even":{"L":{"content":"Yii2 Grid Export (PDF)","font-size":8,"color":"#333333"},"C":{"content":"Grid Export","font-size":16,"color":"#333333"},"R":{"content":"Generated: Sun, 18-Jun-2023","font-size":8,"color":"#333333"}}}],"SetFooter":[{"odd":{"L":{"content":"© Krajee Yii2 Extensions","font-size":8,"font-style":"B","color":"#999999"},"R":{"content":"[ {PAGENO} ]","font-size":10,"font-style":"B","font-family":"serif","color":"#333333"},"line":true},"even":{"L":{"content":"© Krajee Yii2 Extensions","font-size":8,"font-style":"B","color":"#999999"},"R":{"content":"[ {PAGENO} ]","font-size":10,"font-style":"B","font-family":"serif","color":"#333333"},"line":true}}]},"options":{"title":"Grid Export","subject":"PDF export generated by kartik-v/yii2-grid extension","keywords":"krajee, grid, export, yii2-grid, pdf"},"contentBefore":"","contentAfter":""}};
var kvGridExp_fa0422d3={"dialogLib":"krajeeDialog","gridOpts":kvGridExp_1403c7e3,"genOpts":kvGridExp_12735912,"alertMsg":"The JSON export file will be generated for download.","config":{"colHeads":[],"slugColHeads":false,"jsonReplacer":function(k,v){return typeof(v)==='string'?$.trim(v):v},"indentSpace":4}};
var kvGridInit_daa33f7b=function(){
jQuery('#w2 .export-html').gridexport(kvGridExp_be06d3cd);jQuery('#w2 .export-csv').gridexport(kvGridExp_5de8f07f);jQuery('#w2 .export-txt').gridexport(kvGridExp_2fc2dcbc);jQuery('#w2 .export-xls').gridexport(kvGridExp_884382ad);jQuery('#w2 .export-pdf').gridexport(kvGridExp_48c28d49);jQuery('#w2 .export-json').gridexport(kvGridExp_fa0422d3);jQuery('#w2-container').resizableColumns('destroy').resizableColumns({"store":null,"resizeFromBody":false});
};
kvGridInit_daa33f7b();
jQuery("#w2-pjax").on('pjax:timeout', function(e){e.preventDefault()}).on('pjax:send', function(){$("#w2-pjax").addClass('kv-grid-loading')}).off('pjax:complete.f5990a77').on('pjax:complete.f5990a77', function(){setTimeout(kvGridInit_daa33f7b, 2500);$("#w2-pjax").removeClass('kv-grid-loading');
});
jQuery('#w2').yiiGridView({"filterUrl":"\/mandiri\/member\/peminjaman\/riwayat","filterSelector":"#w2-filters input, #w2-filters select","filterOnFocusOut":true});
jQuery("#w2-pjax").off('pjax:complete.43004f42').on('pjax:complete.43004f42', function(){ kvGridGroup('w2'); });
jQuery(document).pjax("#w2-pjax a", {"push":true,"replace":false,"timeout":1000,"scrollTo":false,"container":"#w2-pjax"});
jQuery(document).off("submit", "#w2-pjax form[data-pjax]").on("submit", "#w2-pjax form[data-pjax]", function (event) {jQuery.pjax.submit(event, {"push":true,"replace":false,"timeout":1000,"scrollTo":false,"container":"#w2-pjax"});});
jQuery(document).pjax("#pjax-peminjaman a", {"push":false,"replace":false,"timeout":false,"scrollTo":false,"container":"#pjax-peminjaman"});
jQuery(document).off("submit", "#pjax-peminjaman form[data-pjax]").on("submit", "#pjax-peminjaman form[data-pjax]", function (event) {jQuery.pjax.submit(event, {"push":false,"replace":false,"timeout":false,"scrollTo":false,"container":"#pjax-peminjaman"});});
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
        
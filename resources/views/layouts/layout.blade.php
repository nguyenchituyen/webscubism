<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="img/favicon.png">
    <title>scubism-vn - @yield('title')</title>
    {!! Html::style('css/bootstrap.min.css')!!}
    {!! Html::style('css/bootstrap-theme.css')!!}
    {!! Html::style('css/elegant-icons-style.css')!!}
    {!! Html::style('css/font-awesome.min.css')!!}
    {!! Html::style('assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css')!!}
    {!! Html::style('assets/fullcalendar/fullcalendar/fullcalendar.css')!!}
    {!! Html::style('assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css')!!}
    {!! Html::style('css/owl.carousel.css')!!}
    {!! Html::style('css/jquery-jvectormap-1.2.2.css')!!}
    {!! Html::style('css/fullcalendar.css')!!}
    {!! Html::style('css/widgets.css')!!}
    {!! Html::style('css/style.css')!!}
    {!! Html::style('css/style-responsive.css')!!}
    {!! Html::style('css/xcharts.min.css')!!}
    {!! Html::style('css/jquery-ui-1.10.4.min.css')!!}
    {{-------if have error please install laravelcollective/Html-------}}
</head>
<body>
<section id="container" class="">
    @include('layouts.header.header')
    @include('layouts.sidebar.sidebar')
    <section id="main-content">
        <section class="wrapper">
            @include('layouts.flash_message')
            @include('layouts.page_header')
            @yield('content')
        </section>
    </section>
</section>
{!! Html::script('js/jquery.js') !!}
{!! Html::script('js/jquery-ui-1.10.4.min.js') !!}
{!! Html::script('js/jquery-1.8.3.min.js') !!}
{!! Html::script('js/jquery-ui-1.9.2.custom.min.js') !!}
{!! Html::script('js/bootstrap.min.js') !!}
{!! Html::script('js/jquery.scrollTo.min.js') !!}
{!! Html::script('js/jquery.nicescroll.js') !!}
{!! Html::script('assets/jquery-knob/js/jquery.knob.js') !!}
{!! Html::script('js/jquery.sparkline.js') !!}
{!! Html::script('assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js') !!}
{!! Html::script('js/owl.carousel.js') !!}
{!! Html::script('js/fullcalendar.min.js') !!}
{!! Html::script('assets/fullcalendar/fullcalendar/fullcalendar.js') !!}
{!! Html::script('js/calendar-custom.js') !!}
{!! Html::script('js/jquery.rateit.min.js') !!}
{!! Html::script('js/jquery.customSelect.min.js') !!}
{!! Html::script('assets/chart-master/Chart.js') !!}
{!! Html::script('js/scripts.js') !!}
{!! Html::script('js/sparkline-chart.js') !!}
{!! Html::script('js/easy-pie-chart.js') !!}
{!! Html::script('js/jquery-jvectormap-1.2.2.min.js') !!}
{!! Html::script('js/jquery-jvectormap-world-mill-en.js') !!}
{!! Html::script('js/xcharts.min.js') !!}
{!! Html::script('js/jquery.autosize.min.js') !!}
{!! Html::script('js/jquery.placeholder.min.js') !!}
{!! Html::script('js/gdp-data.js') !!}
{!! Html::script('js/morris.min.js') !!}
{!! Html::script('js/sparklines.js') !!}
{!! Html::script('js/charts.js') !!}
{!! Html::script('js/jquery.slimscroll.min.js') !!}
{!! Html::script('js/util.js') !!}
{!! Html::script('ckeditor/ckeditor.js') !!}
<script type="text/javascript">
    CKEDITOR.replace( 'description');

    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                if ($('#image_input').next().attr('id')) {
                    $('#image_show').attr("src",e.target.result);
                } else {
                    $('#image_input').after( "<img src="+e.target.result+" id='image_show' style='width:15%'>" );
                }
            };
            reader.readAsDataURL(input.files[0]);
        }
    }

    $("#image_input").change(function(){
        readURL(this);
    });

    function displayVals() {
        $( "#name" )
                .keyup(function() {
                    var valueName = $( this ).val();
                    var i = 0, spaceCountLength = valueName.length;
                    for (i; i < spaceCountLength; i++) {
                        valueName = valueName.replace(" ", "-");
                    }
                    $("#alias").val( ChangeToSlug($(valueName).val()) );
                })
                .keyup();
    }

    $(document).ready(function () {
        $( "#name" ).change(function () {
            displayVals();
        });

    $("#name").keyup(function () {
      $("#alias").val( ChangeToSlug($(this).val()) );
    });
  });
  function ChangeToSlug(title)
  {
    var slug;
    slug = title.toLowerCase();
    slug = slug.replace(/á|à|ả|ạ|ã|ă|ắ|ằ|ẳ|ẵ|ặ|â|ấ|ầ|ẩ|ẫ|ậ/gi, 'a');
    slug = slug.replace(/é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ/gi, 'e');
    slug = slug.replace(/i|í|ì|ỉ|ĩ|ị/gi, 'i');
    slug = slug.replace(/ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ/gi, 'o');
    slug = slug.replace(/ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự/gi, 'u');
    slug = slug.replace(/ý|ỳ|ỷ|ỹ|ỵ/gi, 'y');
    slug = slug.replace(/đ/gi, 'd');
    slug = slug.replace(/\“|\”|\’|\`|\~|\!|\@|\#|\||\$|\%|\^|\&|\*|\(|\)|\+|\=|\,|\.|\/|\?|\>|\<|\'|\"|\:|\;|_/gi, '');
    slug = slug.replace(/ /gi, "-");
    slug = slug.replace(/\-\-\-\-\-/gi, '-');
    slug = slug.replace(/\-\-\-\-/gi, '-');
    slug = slug.replace(/\-\-\-/gi, '-');
    slug = slug.replace(/\-\-/gi, '-');
    slug = '@' + slug + '@';
    slug = slug.replace(/\@\-|\-\@|\@/gi, '');
    return slug;
  }
</script>

<script>
    function deleteAllJob(){
      var checkboxChecked = [];
      $(':checkbox:checked').each(function(i){
        checkboxChecked[i] = $(this).val();
      });
      var delFlg = checkboxChecked.indexOf("on");
      if (delFlg == 0) {
        checkboxChecked.shift();
        var items = checkboxChecked.join(',');
        $.ajax({
          url: "/multi_checkboxes",
          method: "get",
          data: { id : items },
          dataType: 'JSON',
          success: function () {
            location.reload();
          }
        });
      } else {
        var items = checkboxChecked.join(',');
        $.ajax({
          url: "/multi_checkboxes",
          method: "get",
          data: { id : items },
          dataType: 'JSON',
          success: function () {
            location.reload();
          }
        });
      }
    }

  $("#select_all").change(function(){  //"select all" change
    $(".checkbox").prop('checked', $(this).prop("checked")); //change all ".checkbox" checked status
  });

  //".checkbox" change
  $('.checkbox').change(function(){
    //uncheck "select all", if one of the listed checkbox item is unchecked
    if(false == $(this).prop("checked")){ //if this item is unchecked
      $("#select_all").prop('checked', false); //change "select all" checked status to false
    }
    //check "select all" if all checkbox items are checked
    if ($('.checkbox:checked').length == $('.checkbox').length ){
      $("#select_all").prop('checked', true);
    }
  });
</script>
</body>
</html>
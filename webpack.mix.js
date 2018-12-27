let mix = require('laravel-mix')

/*
|--------------------------------------------------------------------------
| Admin
|--------------------------------------------------------------------------
*/

var pluginPath = 'resources/assets/plugins/'

mix.combine([
  // ** Required Plugins **
  pluginPath + 'jquery/jquery.js',
  pluginPath + 'bootstrap/popper.js',
  pluginPath + 'bootstrap/bootstrap.js',
  pluginPath + 'customScrollBar/customScrollBar.js',

  // ** Additional Plugins **
  pluginPath + 'ladda/spin.js',
  pluginPath + 'ladda/ladda.js',
  pluginPath + 'toastr/toastr.js',
  pluginPath + 'notie/notie.js',
  pluginPath + 'jquery-validate/jquery.validate.js',
  pluginPath + 'jquery-validate/additional-methods.js',
  pluginPath + 'clockpicker/bootstrap-clockpicker.js',
  pluginPath + 'switchery/switchery.js',
  pluginPath + 'select2/select2.js',
  pluginPath + 'datatables/jquery.dataTables.js',
  pluginPath + 'datatables/dataTables.bootstrap4.js',
  pluginPath + 'datatables/dataTables.responsive.js',
  pluginPath + 'multiselect/jquery.multi-select.js',
  pluginPath + 'bootstrap-datepicker/bootstrap-datepicker.js',
  pluginPath + 'timepicker/jquery.timepicker.js',
  pluginPath + 'summernote/summernote.js',
  pluginPath + 'simplemde/simplemde.min.js',
  pluginPath + 'prism/prism.js',
  pluginPath + 'charts/chartjs/Chart.js',
  pluginPath + 'charts/sparkline/jquery.sparkline.js',
  pluginPath + 'charts/amcharts/amcharts.js',
  pluginPath + 'charts/amcharts/serial.js',
  pluginPath + 'charts/amcharts/amstock.js',
  pluginPath + 'charts/amcharts/xy.js',
  pluginPath + 'charts/amcharts/ammap.js',
  pluginPath + 'charts/amcharts/worldLow.js',
  pluginPath + 'charts/amcharts/pie.js',
  pluginPath + 'charts/amcharts/animate.js',
  pluginPath + 'charts/amcharts/export.js',
  pluginPath + 'charts/amcharts/radar.js',
  pluginPath + 'charts/amcharts/polarScatter.js',
  pluginPath + 'charts/amcharts/light.js',
  pluginPath + 'charts/morris/raphael.js',
  pluginPath + 'charts/morris/morris.js',
  pluginPath + 'charts/gauges/gauge.js',
  pluginPath + 'alertify/alertify.js',
  pluginPath + 'easypiecharts/jquery.easypiechart.js',
  pluginPath + 'metisMenu/metisMenu.js',
  pluginPath + 'form-wizard/jquery.steps.js',
  pluginPath + 'bar-rating/jquery.barrating.js',
  pluginPath + 'nestable/nestable.js',
  pluginPath + 'jstree/jstree.js',
  pluginPath + 'gallery/image/photoswipe.js',
  pluginPath + 'gallery/image/photoswipe-ui-default.js',
  pluginPath + 'gallery/image/mp.mansory.js',
  pluginPath + 'gallery/image/gallery.js',
  pluginPath + 'gallery/video/videobox.js',
  pluginPath + 'rating/jquery.raty.js',
  pluginPath + 'zoom/transition.js',
  pluginPath + 'zoom/zoom.js',
  pluginPath + 'calendar/moment.js',
  pluginPath + 'calendar/fullcalendar.js',
  pluginPath + 'imageCropper/cropper.js',
  pluginPath + 'ace-editor/ace.js',
  pluginPath + 'icons/evil.js',
  pluginPath + 'ace-editor/twilight.js',

  // ** Laraspace Inits **
  pluginPath + 'laraspace/laraspace-layout.js',
  pluginPath + 'laraspace/laraspace-notifs.js',
  pluginPath + 'laraspace/laraspace-forms.js'

], 'public/assets/admin/js/core/plugins.js')

.js('resources/assets/admin/js/app.js', 'public/assets/admin/js/core/')

.sass('resources/assets/admin/sass/laraspace.scss', 'public/assets/admin/css/')

.options({
    processCssUrls: false
})

.version();

/*
|--------------------------------------------------------------------------
| Front
|--------------------------------------------------------------------------
*/
/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */


mix.combine([
  // ** Required Plugins **
  pluginPath + 'jquery/jquery.js',
  pluginPath + 'bootstrap/tether.js',
  pluginPath + 'bootstrap/bootstrap.js',
  pluginPath + 'toastr/toastr.js',
  pluginPath + 'notie/notie.js',

  // Notifs
  pluginPath + 'laraspace/laraspace-notifs.js'
], 'public/assets/front/js/plugins.js')

.sass('resources/assets/front/sass/front.scss', 'public/assets/front/css/')

.options({
    processCssUrls: false
})

.version();



mix.sass('resources/assets/sass/frontend/app.scss', 'public/css/frontend.css')
    .sass('resources/assets/sass/backend/app.scss', 'public/css/backend.css')
    .styles([
        'public/css/plugin/datatables/jquery.dataTables.min.css',
        'public/css/backend/plugin/datatables/dataTables.bootstrap.min.css',
        'public/css/plugin/datatables/buttons.dataTables.min.css',
        'public/js/select2/select2.css',
        'public/css/bootstrap.min.css',
        'public/css/custom-style.css',
        'public/css/bootstrap-datetimepicker.min.css'
    ], 'public/css/backend-custom.css')
    .js([
        'resources/assets/js/frontend/app.js',
        'resources/assets/js/plugin/sweetalert/sweetalert.min.js',
        'resources/assets/js/plugins.js'
    ], 'public/js/frontend.js')
    .js([
        'resources/assets/js/backend/app.js',
        'resources/assets/js/plugin/sweetalert/sweetalert.min.js',
        'resources/assets/js/plugins.js'
    ], 'public/js/backend.js')
    //Copying all directories of tinymce to public folder
    .copyDirectory('node_modules/tinymce/plugins', 'public/js/plugins')
    .copyDirectory('node_modules/tinymce/skins', 'public/js/skins')
    .copyDirectory('node_modules/tinymce/themes', 'public/js/themes')
    .scripts([
        "node_modules/moment/moment.js",
        "node_modules/select2/dist/js/select2.full.js",
        "public/js/bootstrap-datetimepicker.min.js",
        "public/js/backend/custom-file-input.js",
        "public/js/backend/notification.js",
        "public/js/backend/admin.js"
    ], 'public/js/backend-custom.js')
    //Datatable js
    .scripts([
        'node_modules/datatables.net/js/jquery.dataTables.js',
        'public/js/plugin/datatables/dataTables.bootstrap.min.js',
        'node_modules/datatables.net-buttons/js/dataTables.buttons.js',
        'node_modules/datatables.net-buttons/js/buttons.flash.js',
        'public/js/plugin/datatables/jszip.min.js',
        'public/js/plugin/datatables/pdfmake.min.js',
        'public/js/plugin/datatables/vfs_fonts.js',
        'node_modules/datatables.net-buttons/js/buttons.html5.js',
        'node_modules/datatables.net-buttons/js/buttons.print.js',
    ], 'public/js/dataTable.js')
    .webpackConfig({
        plugins: []
    })
    .version();
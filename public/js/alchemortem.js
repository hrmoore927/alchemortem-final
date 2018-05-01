//$('document').ready(function () {
////    accordion('#accordion');
////    loadImages();
//});
//
//function accordion(collapseThese){
//    $(collapseThese).accordion({
//        collapsible: true,
//        active: 1,
//        heightStyle: "content"
//    });
//}
//
//function loadImages(){
//    var images = [];
//	var loadThese = $('img');
//	for(i=0; i<loadThese.length; i++){
//		images[i] = new Image();
//		images[i].src = loadThese[i];
//		}
//}
//var url = window.location;
//// Will only work if string in href matches with location
//$('.nav a[href="'+ url +'"]').parent().addClass('active');
//
//// Will also work for relative and absolute hrefs
//$('.nav a').filter(function() {
//    return this.href == url;
//}).parent().addClass('active');
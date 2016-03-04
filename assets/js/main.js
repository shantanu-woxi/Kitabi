$(document).ready(function(){
  $(".loginLink").click(function(){
    $(".loignForm").slideToggle();
  });

  // dashboard subjects show/hide
  $("#engcall").click(function(){
    hideSubjectWrap();
    $("#engLessons").show();
  });
  $("#gkcall").click(function(){
    hideSubjectWrap();
    $("#gkLessons").show();
  });
  $("#mathscall").click(function(){
    hideSubjectWrap();
    $("#mathsLessons").show();
  });
  $("#reasoncall").click(function(){
    hideSubjectWrap();
    $("#reasonLessons").show();
  });
  $(".backToSubjects").click(function(){
    $(".subjectData").hide();
    showSubjectWrap();
    return false;
  });

  // dashboardmenu height
  var dashboardmenuHeight = $(window).height() - ($(".welcomeStrip").height() + $(".header").height()); 
  $(".sidebarNav").height(dashboardmenuHeight);
});
var hideSubjectWrap = function() {
  $(".subjectsWrap").hide();
}
var showSubjectWrap = function() {
  $(".subjectsWrap").show();
}
